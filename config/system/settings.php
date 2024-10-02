<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$amZlNDIxZ2VCb1RmWlM1YQ$Hsd02sB2OX5IxDLK7INnns5yI5LVa/53PrtedzFJMwc',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'db',
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => 'db',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'db',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => 'EXT:mrhaju_sidepackage/Resources/Public/Icons/favicon.ico',
            'backendLogo' => 'EXT:mrhaju_sidepackage/Resources/Public/Images/Cowboy-logo.webp',
            'loginBackgroundImage' => '',
            'loginFootnote' => 'MrHaJu the Coding Cowboy',
            'loginHighlightColor' => '#785E33',
            'loginLogo' => 'EXT:mrhaju_sidepackage/Resources/Public/Images/Cowboy-logo.webp',
            'loginLogoAlt' => 'MrHaJu the Coding Cowboy',
        ],
        'bootstrap_package' => [
            'disableCssProcessing' => '0',
            'disableGoogleFontCaching' => '0',
            'disablePageTsBackendLayouts' => '0',
            'disablePageTsContentElements' => '0',
            'disablePageTsRTE' => '0',
            'disablePageTsTCADefaults' => '0',
            'disablePageTsTCEFORM' => '0',
            'disablePageTsTCEMAIN' => '0',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'image_jack' => [
            'avif' => [
                'active' => '0',
                'converter' => 'im',
                'mimeTypes' => [
                    'gif' => '1',
                    'jpeg' => '1',
                    'png' => '1',
                ],
                'options' => '-sharpen 1 -quality 75 -define avif:speed=0 -define avif:lossless=false +profile "*"',
            ],
            'jpeg' => [
                'active' => '1',
                'path' => '/usr/bin/jpegoptim',
            ],
            'logging' => [
                'alerts' => '1',
                'critical' => '1',
                'debugs' => '0',
                'emergencies' => '1',
                'errors' => '1',
                'infos' => '0',
                'notices' => '0',
                'warnings' => '0',
            ],
            'png' => [
                'active' => '1',
                'path' => '/usr/bin/optipng',
            ],
            'useFallbackDriver' => '0',
            'useLiveProcessing' => '0',
            'useSafeProcessing' => '1',
            'webp' => [
                'active' => '1',
                'converter' => 'im',
                'mimeTypes' => [
                    'gif' => '1',
                    'jpeg' => '1',
                    'png' => '1',
                ],
                'options' => '-sharpen 1 -quality 75 -define webp:lossless=false -define webp:method=6',
            ],
        ],
        'indexed_search' => [
            'catdoc' => '/usr/bin/',
            'debugMode' => '0',
            'deleteFromIndexAfterEditing' => '1',
            'disableFrontendIndexing' => '0',
            'enableMetaphoneSearch' => '1',
            'flagBitMask' => '192',
            'fullTextDataLength' => '0',
            'ignoreExtensions' => '',
            'indexExternalURLs' => '0',
            'maxAge' => '0',
            'maxExternalFiles' => '5',
            'minAge' => '24',
            'pdf_mode' => '20',
            'pdftools' => '/usr/bin/',
            'ppthtml' => '/usr/bin/',
            'unrtf' => '/usr/bin/',
            'unzip' => '/usr/bin/',
            'useMysqlFulltext' => '0',
            'xlhtml' => '/usr/bin/',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
        ],
        'vite_asset_collector' => [
            'defaultManifest' => '_assets/vite/.vite/manifest.json',
            'devServerUri' => 'auto',
            'useDevServer' => 'auto',
        ],
    ],
    'FE' => [
        'debug' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'defaultMailFromAddress' => '',
        'defaultMailFromName' => '',
        'transport' => 'sendmail',
        'transport_sendmail_command' => 'sendmail -t',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => 'ce241a7a8e057903c48fcc7522bcfc903436401dde88f242a9e55e75190fa824aeda3e0a2b229d98ba27888cdf9e426a',
        'exceptionalErrors' => 12290,
        'sitename' => 'Typo313',
        'systemMaintainers' => [
            1,
        ],
        'trustedHostsPattern' => '.*.*',
    ],
];
