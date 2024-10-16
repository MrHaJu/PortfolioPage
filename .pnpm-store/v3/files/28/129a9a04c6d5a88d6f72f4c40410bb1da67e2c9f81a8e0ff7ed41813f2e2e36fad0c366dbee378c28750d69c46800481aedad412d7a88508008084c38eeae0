"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const vite_plugin_auto_origin_1 = __importDefault(require("vite-plugin-auto-origin"));
const typo3project_js_1 = __importDefault(require("./typo3project.js"));
const typo3extension_js_1 = __importDefault(require("./typo3extension.js"));
function typo3(userConfig = {}) {
    if (userConfig.target === "extension") {
        return [(0, typo3extension_js_1.default)(userConfig)];
    }
    else {
        return [(0, typo3project_js_1.default)(userConfig), (0, vite_plugin_auto_origin_1.default)()];
    }
}
exports.default = typo3;
//# sourceMappingURL=index.js.map