<?php
return array (
  'home' => 
  array (
    'base' => 'https://typo3v13.ddev.site/',
    'baseVariants' => 
    array (
      0 => 
      array (
        'base' => 'https://typo3v13.ddev.site/',
        'condition' => 'applicationContext == "development"',
      ),
      1 => 
      array (
        'base' => 'https://p679284.webspaceconfig.de/',
        'condition' => 'applicationContext == "Production"',
      ),
    ),
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'Deutsch',
        'enabled' => true,
        'languageId' => 0,
        'base' => '/',
        'locale' => 'de_DE',
        'navigationTitle' => 'English',
        'flag' => 'de',
        'hreflang' => '',
        'websiteTitle' => '',
      ),
    ),
    'rootPageId' => 1,
    'websiteTitle' => '',
  ),
);
#