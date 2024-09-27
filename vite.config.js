import { defineConfig } from "vite";
import { resolve } from "path";
import autoOrigin from "vite-plugin-auto-origin";

// TYPO3 root path (relative to this config file)
const VITE_TYPO3_ROOT = "./";

// Vite input files (relative to TYPO3 root path)
const VITE_ENTRYPOINTS = [
    "packages/mrhaju_sidepackage/Resources/Private/Frontend/main.entry.js",
];
const VITE_OUTPUT_PATH = 'public/_assets/vite/';
const rootPath = resolve(__dirname, VITE_TYPO3_ROOT);

export default defineConfig({
    root: rootPath,
    base: '',
    resolve: {
        alias: {
            '@bk2k': resolve(__dirname, '/vendor/bk2k/bootstrap-package/')
        },
    },
    build: {
        manifest: true,
        rollupOptions: {
            input: VITE_ENTRYPOINTS.map(entry => resolve(rootPath, entry)),
        },
        outDir: resolve(rootPath, VITE_OUTPUT_PATH),
    },
    css: {
        devSourcemap: true,
    },
    server: {
        origin: process.env.VITE_DEV_ORIGIN || 'http://localhost:5173', // Ensure this is set
        cors: {
            origin: '*',
            methods: ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
            allowedHeaders: ['Content-Type', 'Authorization'],
            exposedHeaders: ['Authorization'],
            credentials: true,
            preflightContinue: false,
        },
    },
    plugins: [autoOrigin()],
    publicDir: false,
});
