import autoOrigin from "vite-plugin-auto-origin";
import typo3project from "./typo3project.js";
import typo3extension from "./typo3extension.js";
export default function typo3(userConfig = {}) {
    if (userConfig.target === "extension") {
        return [typo3extension(userConfig)];
    }
    else {
        return [typo3project(userConfig), autoOrigin()];
    }
}
//# sourceMappingURL=index.js.map