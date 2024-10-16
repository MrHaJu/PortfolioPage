"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.readJsonFile = exports.addAliases = exports.addRollupInputs = exports.outputDebugInformation = exports.determineRelevantTypo3Extensions = exports.findEntrypointsInExtensions = exports.determineComposerContext = exports.createComposerContext = exports.collectComposerChain = exports.initializePluginConfig = void 0;
const node_fs_1 = __importDefault(require("node:fs"));
const node_path_1 = require("node:path");
const fast_glob_1 = __importDefault(require("fast-glob"));
const picocolors_1 = __importDefault(require("picocolors"));
function initializePluginConfig(userConfig, root) {
    const target = userConfig.target ?? "project";
    const composerContext = determineComposerContext(target, collectComposerChain(root));
    if (!composerContext) {
        const message = target === "project"
            ? 'No composer project could be found in parent directories. Make sure to set "type": "project" in your root composer.json.'
            : "No extension composer file could be found in parent directories. Make sure that your extension has a valid composer file.";
        throw new Error(message);
    }
    return {
        target,
        entrypointFile: "Configuration/ViteEntrypoints.json",
        entrypointIgnorePatterns: ["**/node_modules/**", "**/.git/**"],
        debug: false,
        composerContext,
        ...userConfig,
    };
}
exports.initializePluginConfig = initializePluginConfig;
function collectComposerChain(path) {
    let contexts = [];
    // Check if composer file exists in current dir
    const composerFile = (0, node_path_1.join)(path, "composer.json");
    if (node_fs_1.default.existsSync(composerFile)) {
        const composerJson = readJsonFile(composerFile);
        const composerContext = createComposerContext(composerJson, path);
        contexts.push(composerContext);
        // No need to check further if we already found a project root
        if (composerContext.type === "project") {
            return contexts;
        }
    }
    // Check parent dirs recursively
    const parent = (0, node_path_1.dirname)(path);
    if (parent && parent !== path) {
        contexts = contexts.concat(collectComposerChain(parent));
    }
    return contexts;
}
exports.collectComposerChain = collectComposerChain;
function createComposerContext(json, path) {
    switch (json.type) {
        case "project":
            return {
                type: "project",
                path,
                vendorDir: json.config?.["vendor-dir"] ?? "vendor",
                webDir: json.extra?.["typo3/cms"]?.["web-dir"] ?? "public",
            };
        case "typo3-cms-extension":
            return {
                type: "typo3-cms-extension",
                path,
                extensionKey: json.extra?.["typo3/cms"]?.["extension-key"] ?? "",
            };
        default:
            return {
                type: json.type ?? "library",
                path,
            };
    }
}
exports.createComposerContext = createComposerContext;
function determineComposerContext(target, chain) {
    const type = target === "extension" ? "typo3-cms-extension" : target;
    return chain.find((context) => context.type === type);
}
exports.determineComposerContext = determineComposerContext;
function findEntrypointsInExtensions(extensions, entrypointFile, entrypointIgnorePatterns) {
    let entrypoints = [];
    extensions.forEach((extension) => {
        const file = (0, node_path_1.join)(extension.path, entrypointFile);
        if (!node_fs_1.default.existsSync(file)) {
            return;
        }
        const patterns = readJsonFile(file).map((pattern) => (0, node_path_1.resolve)((0, node_path_1.dirname)(file), pattern));
        entrypoints = entrypoints.concat(fast_glob_1.default.globSync(patterns, {
            cwd: (0, node_path_1.dirname)(file),
            ignore: entrypointIgnorePatterns,
            absolute: true,
            // This doesn't seem to work correctly, which is why tests
            // use the actual file system for now
            // fs,
        }));
    });
    return entrypoints;
}
exports.findEntrypointsInExtensions = findEntrypointsInExtensions;
function determineRelevantTypo3Extensions(composerContext, entrypointFile) {
    const composerInstalled = (0, node_path_1.join)(composerContext.path, composerContext.vendorDir, "composer/installed.json");
    if (!node_fs_1.default.existsSync(composerInstalled)) {
        throw new Error(`Unable to read composer package information from "${composerInstalled}". Try executing "composer install".`);
    }
    const installedPackages = readJsonFile(composerInstalled);
    if (!installedPackages.packages) {
        throw new Error(`Invalid composer state in  "${composerInstalled}". Try executing "composer install".`);
    }
    const installedExtensions = installedPackages.packages
        .filter((extension) => extension?.type === "typo3-cms-extension")
        .map((extension) => createComposerContext(extension, (0, node_path_1.resolve)((0, node_path_1.dirname)(composerInstalled), extension["install-path"])));
    return installedExtensions.filter((extension) => node_fs_1.default.existsSync((0, node_path_1.join)(extension.path, entrypointFile)));
}
exports.determineRelevantTypo3Extensions = determineRelevantTypo3Extensions;
function outputDebugInformation(relevantExtensions, entrypoints, composerContext, logger) {
    if (relevantExtensions.length) {
        const extensionList = relevantExtensions.map((extension) => extension.extensionKey);
        const aliasList = extensionList.map((extensionKey) => "@" + extensionKey);
        logger.info(`The following extensions with vite entrypoints have been recognized: ${picocolors_1.default.green(extensionList.join(", "))}`, { timestamp: true });
        logger.info(`The following aliases have been defined: ${picocolors_1.default.green(aliasList.join(", "))}`, { timestamp: true });
    }
    if (entrypoints.length) {
        const entrypointList = entrypoints.map((path) => path.replace(composerContext.path + "/", ""));
        logger.info(`The following entrypoints will be served:\n` +
            picocolors_1.default.green("➜ " + entrypointList.join("\n➜ ")), { timestamp: true });
    }
}
exports.outputDebugInformation = outputDebugInformation;
function addRollupInputs(input, additionalInputs) {
    // Prevent empty input, which would trigger index.html fallback by vite
    input ??= [];
    if (typeof input === "string") {
        input = [input].concat(additionalInputs);
    }
    else if (Array.isArray(input)) {
        input = input.concat(additionalInputs);
    }
    else {
        input = { ...input, ...additionalInputs };
    }
    return input;
}
exports.addRollupInputs = addRollupInputs;
function addAliases(alias, extensions) {
    const additionalAliases = extensions.map((extension) => ({
        find: "@" + extension.extensionKey,
        replacement: extension.path.endsWith("/")
            ? extension.path
            : extension.path + "/",
    }));
    alias ??= [];
    if (!Array.isArray(alias)) {
        alias = Object.entries(alias).map((entry) => ({
            find: entry[0],
            replacement: entry[1],
        }));
    }
    return alias.concat(additionalAliases);
}
exports.addAliases = addAliases;
function readJsonFile(file) {
    return JSON.parse(node_fs_1.default.readFileSync(file, "utf-8"));
}
exports.readJsonFile = readJsonFile;
//# sourceMappingURL=utils.js.map