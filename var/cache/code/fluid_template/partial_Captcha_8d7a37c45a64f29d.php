<?php
class partial_Captcha_8d7a37c45a64f29d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
		<div class="captcha">
			<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'pageUid' => NULL,
'additionalParams' => [],
'noCache' => false,
'language' => NULL,
'section' => '',
'linkAccessRestrictedPages' => false,
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'pageType' => 3413,
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '"
				 alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'extensionName' => 'bw_captcha',
'key' => 'partial.image.alt',
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output7 .= '"
				 aria-live="polite"
				 loading="lazy"
				 onload="this.parentElement.classList.remove(\'captcha--reloading\'); return false;"/>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('element.properties.showRefresh'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
				<a class="captcha__reload"
				   href="#"
				   title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'extensionName' => 'bw_captcha',
'key' => 'partial.refresh.title',
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output15 .= '"
				   aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'extensionName' => 'bw_captcha',
'key' => 'partial.refresh.label',
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output15 .= '"
				   role="button"
				   data-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'pageUid' => NULL,
'additionalParams' => [],
'noCache' => false,
'language' => NULL,
'section' => '',
'linkAccessRestrictedPages' => false,
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'pageType' => 3413,
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output15 .= '"
				   onclick="const div = this.parentElement; div.classList.add(\'captcha--reloading\', \'captcha--spin\'); let captchaUrl = this.dataset.url; this.previousElementSibling.setAttribute(\'src\', captchaUrl + (/\\?/.test(captchaUrl) ? \'&\' : \'?\') + \'now=\' + Date.now()); setTimeout(function()';

$output15 .= '{div.classList.remove(\'captcha--spin\')}';

$output15 .= ',400); return false;">
					<svg width="31" height="28" xmlns="http://www.w3.org/2000/svg">
						<g fill="#000" fill-rule="evenodd">
							<path d="M10 10.7 6.3 8.5a11 11 0 0 1 20 3l2.5-.8h.4v-.3A14 14 0 0 0 3.6 7L.3 5l1.8 8.3 8-2.6ZM31 23l-1.7-8-8 2.5 3.7 2.1a10.9 10.9 0 0 1-19.8-2.3l-2 .6-1 .3a13.9 13.9 0 0 0 17 9.3 14 14 0 0 0 8.4-6.4l3.4 2Z"/>
						</g>
					</svg>
				</a>
			';
return $output15;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output7 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('element.properties.showAudio'),
];

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments22 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
				<a class="captcha__audio"
				   href="#"
				   data-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'pageUid' => NULL,
'additionalParams' => [],
'noCache' => false,
'language' => NULL,
'section' => '',
'linkAccessRestrictedPages' => false,
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'pageType' => 3414,
];

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= '"
				   title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'extensionName' => 'bw_captcha',
'key' => 'partial.audio.title',
];

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output25 .= '"
				   aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'extensionName' => 'bw_captcha',
'key' => 'partial.audio.label',
];

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output25 .= '"
				   role="button"
				   onclick="const div = this.parentElement;window.captchaAudio = window.captchaAudio ? window.captchaAudio : new Audio();window.captchaAudio.addEventListener(\'ended\', () => div.classList.remove(\'captcha--playing\'));if (window.captchaAudio.paused) {	div.classList.add(\'captcha--playing\');	const img = div.querySelector(\'img\');	const c = document.createElement(\'canvas\');	const ctx = c.getContext(\'2d\');	const data = new FormData();	c.width = img.naturalWidth;	c.height = img.naturalHeight;	ctx.drawImage(img, 0, 0);	data.append(\'captchaDataUrl\', c.toDataURL());fetch(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'pageUid' => NULL,
'additionalParams' => [],
'noCache' => false,
'language' => NULL,
'section' => '',
'linkAccessRestrictedPages' => false,
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'pageType' => 3414,
];

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output25 .= '\', ';

$output25 .= '{method: \'POST\',body: data}';

$output25 .= ').then(response => response.blob()).then(blob => {	window.captchaAudio.src = window.URL.createObjectURL(blob);	window.captchaAudio.play();	});} else {	window.captchaAudio.pause();div.classList.remove(\'captcha--playing\')} return false;">
					<svg xmlns="http://www.w3.org/2000/svg" height="35" fill="none" viewBox="0 0 115 100">
						<path fill="#000"
							  d="M59.145 50.136v39.223c0 1.334-.135 2.667-1.65 3.256-1.521.588-2.308-.386-3.173-1.256C48.197 85.255 42.025 79.188 36 73a7.603 7.603 0 0 0-6.162-2.666c-5.734.187-11.479.078-17.23 0-3 0-3.494-.495-3.494-3.438v-33.88c0-2.666.589-3.317 3.318-3.333H30.786a5.705 5.705 0 0 0 4.48-1.87c6.067-6.078 12.203-12.146 18.322-18.307a14.896 14.896 0 0 1 1.64-1.546 2.285 2.285 0 0 1 2.392-.428 2.296 2.296 0 0 1 1.432 1.964c.114.833.146 1.677.094 2.52.02 12.71.02 25.417 0 38.121Z"/>
						<path fill="#000"
							  class="captcha__audio__mute"
							  d="M67.935 29.935a3.192 3.192 0 0 1 4.515 0l15.05 15.05 15.05-15.05a3.192 3.192 0 1 1 4.515 4.515L92.015 49.5l15.05 15.05a3.192 3.192 0 1 1-4.515 4.515L87.5 54.015l-15.05 15.05a3.192 3.192 0 1 1-4.515-4.515l15.05-15.05-15.05-15.05a3.192 3.192 0 0 1 0-4.515Z"/>
						<path fill="#000"
							  class="captcha__audio__sound"
							  d="M97.839 49.896a42.769 42.769 0 0 1-11.584 29.625c-.432.485-.906.927-1.416 1.334A3.642 3.642 0 0 1 80 80.563a3.737 3.737 0 0 1-.307-4.667c.463-.593.963-1.156 1.495-1.682a35.772 35.772 0 0 0 9.349-23.964 35.784 35.784 0 0 0-9.162-24.036 18.253 18.253 0 0 1-1.693-1.896 3.74 3.74 0 0 1 .532-4.864 3.57 3.57 0 0 1 4.65-.105c.59.47 1.131.995 1.615 1.573a42.513 42.513 0 0 1 11.36 28.974Z"/>
						<path fill="#000"
							  class="captcha__audio__sound"
							  d="M81.333 51.667a25.566 25.566 0 0 1-6.562 16 10.73 10.73 0 0 1-1.6 1.588 3.71 3.71 0 0 1-4.88-.323A3.603 3.603 0 0 1 68 64.24c.375-.547.865-1 1.333-1.506a19.157 19.157 0 0 0-.172-25.495c-.307-.359-.65-.682-.932-1.051a3.695 3.695 0 0 1 .318-5.084 3.749 3.749 0 0 1 5.104.203c.86.85 1.646 1.766 2.349 2.745 3.495 4.64 5.333 10.177 5.333 17.615Z"/>
					</svg>
				</a>
			';
return $output25;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, static fn() => '', $renderingContext)
;

$output7 .= '
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};
$output36 = '';

$output36 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute');

$output36 .= ' form-control';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'renderingOptionProperty' => NULL,
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
'property' => 'fluidAdditionalAttributes',
];

$arguments34 = [
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'dir' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'text',
'property' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'id' => $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier'),
'value' => '',
'class' => $output36,
'errorClass' => $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute'),
'additionalAttributes' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext),
];

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output7 .= '
	';
return $output7;
};

$array6 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
];

$arguments4 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'debug' => true,
'partial' => 'Field/Field',
'arguments' => $array6,
'contentAs' => 'elementContent',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};

$arguments1 = [
'renderable' => $renderingContext->getVariableProvider()->getByPath('element'),
];

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';

    return $output0;
}

}

#