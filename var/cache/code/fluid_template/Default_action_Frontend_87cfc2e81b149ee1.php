<?php
class Default_action_Frontend_87cfc2e81b149ee1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
    }
    public function hasLayout() {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'cb' => 
  array (
    0 => 'TYPO3\\CMS\\ContentBlocks\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
    }
    /**
 * section Header
 */
public function section_bf6366eeece4db89(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    return NULL;
}
/**
 * section Main
 */
public function section_b0000ec1c8d5f383(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '


    <h6 class="header">';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header')]);

$output0 .= '</h6>
    <div aria-label="Warning example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.progress')]);

$output0 .= '"
         class="progress" role="progressbar" style="height: ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.progressHeight')]);

$output0 .= '">
        <div class="progress-bar ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.progressBackgroundColor')]);

$output0 .= '"
             style="width: ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.progress')]);

$output0 .= '%; color: ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.progressColor')]);

$output0 .= ';">';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.progress')]);

$output0 .= '%
        </div>
    </div>

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output1 = '';
// Rendering ViewHelper TYPO3\CMS\ContentBlocks\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure3 = function() use ($renderingContext) {
return NULL;
};

$arguments2 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'as' => NULL,
'crossorigin' => NULL,
'disabled' => NULL,
'hreflang' => NULL,
'importance' => NULL,
'integrity' => NULL,
'media' => NULL,
'referrerpolicy' => NULL,
'rel' => NULL,
'sizes' => NULL,
'type' => NULL,
'nonce' => NULL,
'useNonce' => false,
'priority' => false,
'file' => 'Frontend.css',
'identifier' => 'content-block-css-mrhaju-mrhaju/progress-bar',
];

$output1 .= TYPO3\CMS\ContentBlocks\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output1 .= '
';
// Rendering ViewHelper TYPO3\CMS\ContentBlocks\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'async' => NULL,
'crossorigin' => NULL,
'defer' => NULL,
'integrity' => NULL,
'nomodule' => NULL,
'nonce' => NULL,
'referrerpolicy' => NULL,
'type' => NULL,
'useNonce' => false,
'priority' => false,
'file' => 'Frontend.js',
'identifier' => 'content-block-js-mrhaju-mrhaju/progress-bar',
];

$output1 .= TYPO3\CMS\ContentBlocks\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output1 .= '
';

$output1 .= '';

$output1 .= '
';

$output1 .= '';

$output1 .= '
';

$output1 .= '';

    return $output1;
}

}

#