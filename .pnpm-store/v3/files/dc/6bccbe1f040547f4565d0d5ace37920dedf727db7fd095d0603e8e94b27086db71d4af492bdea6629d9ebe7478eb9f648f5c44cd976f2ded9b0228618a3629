"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const node_path_1 = require("node:path");
const vite_1 = require("vite");
const picocolors_1 = __importDefault(require("picocolors"));
const utils_js_1 = require("./utils.js");
function typo3project(userConfig = {}) {
    const logger = (0, vite_1.createLogger)("info", { prefix: "[plugin-typo3-project]" });
    let pluginConfig;
    let relevantExtensions;
    let entrypoints;
    return {
        name: "vite-plugin-typo3-project",
        config(config) {
            try {
                pluginConfig = (0, utils_js_1.initializePluginConfig)(userConfig, config.root ?? process.cwd());
            }
            catch (err) {
                logger.error(picocolors_1.default.red(err.message), { timestamp: true });
                return;
            }
            // Set empty base path to enable relative paths in generated assets (e. g. CSS files)
            config.base ??= "";
            // Disable public dir since TYPO3 already has plenty of options to serve static files
            config.publicDir ??= false;
            // Enable source maps for CSS files in dev environment
            config.css ??= {};
            config.css.devSourcemap ??= true;
            // Setup build destination folder
            config.build ??= {};
            config.build.manifest ??= true;
            config.build.outDir ??= (0, node_path_1.join)(pluginConfig.composerContext.path, pluginConfig.composerContext.webDir, "_assets/vite/");
            // Extract relevant TYPO3 extensions from composer metadata
            relevantExtensions = (0, utils_js_1.determineRelevantTypo3Extensions)(pluginConfig.composerContext, pluginConfig.entrypointFile);
            // Add path alias for each extension
            config.resolve ??= {};
            config.resolve.alias = (0, utils_js_1.addAliases)(config.resolve.alias, relevantExtensions);
            // Find all vite entrypoints in relevant TYPO3 extensions
            entrypoints = (0, utils_js_1.findEntrypointsInExtensions)(relevantExtensions, pluginConfig.entrypointFile, pluginConfig.entrypointIgnorePatterns);
            // Don't watch files in irrelevant/temporary TYPO3 directories
            // This prevents performance issues and avoids file system problems
            config.server ??= {};
            config.server.watch ??= {};
            config.server.watch.ignored = [
                "**/.ddev/**",
                "**/var/cache/**",
                "**/var/charset/**",
                "**/var/labels/**",
                "**/var/lock/**",
                "**/var/log/**",
                "**/var/session/**",
                "**/var/transient/**",
                "**/fileadmin/**",
                "**/typo3temp/**",
                "**/_processed_/**",
            ];
            if (!entrypoints.length) {
                logger.warn(picocolors_1.default.red("No entrypoints from TYPO3 extensions have been picked up. Make sure that you create at least one 'Configuration/ViteEntrypoints.json' file."), { timestamp: true });
            }
            // Add entrypoints to rollup config while preserving entrypoints that were added manually
            config.build.rollupOptions ??= {};
            config.build.rollupOptions.input = (0, utils_js_1.addRollupInputs)(config.build.rollupOptions.input, entrypoints);
        },
        configResolved(config) {
            if (!pluginConfig) {
                return;
            }
            if (config.build.manifest === false) {
                logger.warn(picocolors_1.default.red("'config.build.manifest' is set to 'false', which might lead to problems with TYPO3."), { timestamp: true });
            }
            if (pluginConfig.debug) {
                (0, utils_js_1.outputDebugInformation)(relevantExtensions, entrypoints, pluginConfig.composerContext, logger);
            }
        },
    };
}
exports.default = typo3project;
//# sourceMappingURL=typo3project.js.map