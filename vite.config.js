import { defineConfig } from 'vite';
import { dirname, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';
import typo3 from "vite-plugin-typo3";

const currentDir = dirname(fileURLToPath(import.meta.url));
// TYPO3 root path (relative to this config file)
const VITE_TYPO3_ROOT = "./";

// Vite input files (relative to TYPO3 root path)
const VITE_ENTRYPOINTS = [
    "packages/mrhaju_sidepackage/Resources/Private/Frontend/main.entry.js",
];
const VITE_OUTPUT_PATH = 'public/_assets/vite/';
const rootPath = resolve(currentDir, VITE_TYPO3_ROOT);

export default defineConfig({
    root: rootPath,
    base: '',
    resolve: {
        alias: {
            '@bk2k': resolve(currentDir, '/vendor/bk2k/bootstrap-package/'),
            '@mrhaju': resolve(currentDir, '/vendor/mrahju/mrhaju_sidepackage/')
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
    plugins: [typo3()],
    publicDir: false,
});
