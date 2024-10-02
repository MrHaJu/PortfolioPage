<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
defined('TYPO3') or die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de'][] = 'EXT:mrhaju_sidepackage/Resources/Private/Language/de.backend.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['en'][] = 'EXT:mrhaju_sidepackage/Resources/Private/Language/backend.xlf';

(static function () {
    ExtensionManagementUtility::addPageTSConfig('
    @import \'EXT:mrhaju_sidepackage/Configuration/TsConfig/Page/Page.tsconfig\'
    @import \'EXT:mrhaju_sidepackage/Configuration/TsConfig/Page/TCEFORM.tsconfig\'
    @import \'EXT:mrhaju_sidepackage/Configuration/TsConfig/Page/TCEMAIN.tsconfig\'
    @import \'EXT:mrhaju_sidepackage/Configuration/TsConfig/Page/TCADefaults.tsconfig\'
    @import \'EXT:mrhaju_sidepackage/Configuration/TsConfig/Page/RTE.tsconfig\'
    @import \'EXT:mrhaju_sidepackage/Configuration/TsConfig/Page/BackendLayouts.tsconfig\'
    ');
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['mrhaju_sidepackage'] = 'EXT:mrhaju_sidepackage/Configuration/RTE/Default.yaml';
})();