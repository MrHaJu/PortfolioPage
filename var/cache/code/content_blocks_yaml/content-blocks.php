<?php
return array (
  't3s/swiperslider' => 
  array (
    'name' => 't3s/swiperslider',
    'yaml' => 
    array (
      'name' => 't3s/swiperslider',
      'title' => 'Swiper Slider',
      'description' => 'Swiper - is the free and most modern mobile touch slider with hardware accelerated transitions and amazing native behavior',
      'basics' => 
      array (
        0 => 'T3S/SwiperSlides',
        1 => 'T3S/SwiperSettings',
        2 => 'TYPO3/Appearance',
      ),
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 't3s_swiperheader_palette',
          'type' => 'Palette',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header',
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'header',
              'useExistingField' => true,
            ),
            1 => 
            array (
              'type' => 'Linebreak',
            ),
            2 => 
            array (
              'identifier' => 'header_layout',
              'useExistingField' => true,
            ),
            3 => 
            array (
              'identifier' => 'header_position',
              'useExistingField' => true,
            ),
            4 => 
            array (
              'type' => 'Linebreak',
            ),
            5 => 
            array (
              'identifier' => 'header_link',
              'useExistingField' => true,
            ),
            6 => 
            array (
              'type' => 'Linebreak',
            ),
            7 => 
            array (
              'identifier' => 'subheader',
              'useExistingField' => true,
            ),
            8 => 
            array (
              'type' => 'Linebreak',
            ),
          ),
        ),
        1 => 
        array (
          'identifier' => 't3s_swiperslides_tab',
          'type' => 'Tab',
          'label' => 'Swiper Slides',
        ),
        2 => 
        array (
          'identifier' => 'swiperslides_palette',
          'type' => 'Palette',
          'label' => 'Add your images and text here',
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'items',
              'type' => 'Collection',
              'label' => 'Swiper items',
              'labelField' => 'title',
              'minitems' => 1,
              'fields' => 
              array (
                0 => 
                array (
                  'identifier' => 't3s_swiperslide',
                  'label' => 'Swiper image',
                  'type' => 'File',
                  'extendedPalette' => true,
                  'minitems' => 1,
                  'maxitems' => 1,
                  'allowed' => 'common-image-types',
                ),
                1 => 
                array (
                  'identifier' => 'title',
                  'label' => 'Caption title',
                  'type' => 'Text',
                ),
                2 => 
                array (
                  'identifier' => 'caption',
                  'label' => 'Caption text',
                  'type' => 'Textarea',
                  'rows' => 15,
                  'enableRichtext' => true,
                ),
                3 => 
                array (
                  'identifier' => 'link',
                  'type' => 'Link',
                  'autocomplete' => true,
                  'allowedTypes' => 
                  array (
                    0 => 'page',
                    1 => 'url',
                    2 => 'file',
                  ),
                ),
                4 => 
                array (
                  'identifier' => 'pi_flexform',
                  'type' => 'FlexForm',
                  'label' => 'Override general settings',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'captionWidth',
                      'label' => 'Caption width',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => '',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'default from Swiper settings',
                          'value' => '0',
                        ),
                        1 => 
                        array (
                          'label' => 'Width 25%',
                          'value' => 'w-25',
                        ),
                        2 => 
                        array (
                          'label' => 'Width 33%',
                          'value' => 'w-33',
                        ),
                        3 => 
                        array (
                          'label' => 'Width 50%',
                          'value' => 'w-50',
                        ),
                        4 => 
                        array (
                          'label' => 'Width 75%',
                          'value' => 'w-75',
                        ),
                        5 => 
                        array (
                          'label' => 'Width 100%',
                          'value' => 'w-100',
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'identifier' => 'contentAlign',
                      'label' => 'Caption align',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => '',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'default from Swiper settings',
                          'value' => '',
                        ),
                        1 => 
                        array (
                          'label' => 'left-top',
                          'value' => 'left-top',
                        ),
                        2 => 
                        array (
                          'label' => 'left-center',
                          'value' => 'left-center',
                        ),
                        3 => 
                        array (
                          'label' => 'left-bottom',
                          'value' => 'left-bottom',
                        ),
                        4 => 
                        array (
                          'label' => 'center-top',
                          'value' => 'center-top',
                        ),
                        5 => 
                        array (
                          'label' => 'center-center',
                          'value' => 'center-center',
                        ),
                        6 => 
                        array (
                          'label' => 'center-bottom',
                          'value' => 'center-bottom',
                        ),
                        7 => 
                        array (
                          'label' => 'right-top',
                          'value' => 'right-top',
                        ),
                        8 => 
                        array (
                          'label' => 'right-center',
                          'value' => 'right-center',
                        ),
                        9 => 
                        array (
                          'label' => 'right-bottom',
                          'value' => 'right-bottom',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        3 => 
        array (
          'identifier' => 't3s_swipersettings_tab',
          'type' => 'Tab',
          'label' => 'Swiper Settings',
        ),
        4 => 
        array (
          'identifier' => 'swipersettings_palette',
          'type' => 'Palette',
          'label' => 'Swiper Slider Settings',
          'description' => 'Swiper - is the free and most modern mobile touch slider with hardware accelerated transitions and amazing native behavior',
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'pi_flexform',
              'useExistingField' => true,
              'type' => 'FlexForm',
              'label' => 'Swiper Settings',
              'fields' => 
              array (
                0 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'main',
                  'label' => 'Main',
                  'description' => 'Main Swiper settings',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'width',
                      'label' => 'Max. Swiper width in px',
                      'type' => 'Number',
                      'default' => 1300,
                      'size' => 5,
                      'range' => 
                      array (
                        'lower' => 100,
                      ),
                    ),
                    1 => 
                    array (
                      'identifier' => 'ratio',
                      'label' => 'Aspect ratio',
                      'description' => 'e.g. 1:1, 4:3 or 36:24 ... (default 16:9)',
                      'default' => '16:9',
                      'type' => 'Text',
                      'size' => 5,
                    ),
                    2 => 
                    array (
                      'identifier' => 'themeColor',
                      'label' => 'Theme color',
                      'description' => 'for navigation and pagination etc.',
                      'type' => 'Color',
                      'size' => 5,
                    ),
                    3 => 
                    array (
                      'identifier' => 'backendView',
                      'label' => 'Backend preview',
                      'description' => 'shows slider also in backend if activated',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                      'default' => 1,
                    ),
                  ),
                ),
                1 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'caption',
                  'label' => 'Caption',
                  'description' => 'Caption settings',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'useCaption',
                      'label' => 'Use title and caption in the slider',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                      'default' => 1,
                    ),
                    1 => 
                    array (
                      'identifier' => 'disableCaption',
                      'label' => 'Disable Caption',
                      'description' => 'if screen sizes width is <= your selection',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => '',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'never',
                          'value' => '',
                        ),
                        1 => 
                        array (
                          'label' => '576px',
                          'value' => '576',
                        ),
                        2 => 
                        array (
                          'label' => '768px',
                          'value' => '768',
                        ),
                        3 => 
                        array (
                          'label' => '992px',
                          'value' => '992',
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'identifier' => 'captionWidth',
                      'label' => 'Caption width',
                      'description' => 'general setting - override in "Swiper Slides" is possible',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => 'w-50',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'auto',
                          'value' => 'w-0',
                        ),
                        1 => 
                        array (
                          'label' => 'Width 25%',
                          'value' => 'w-25',
                        ),
                        2 => 
                        array (
                          'label' => 'Width 33%',
                          'value' => 'w-33',
                        ),
                        3 => 
                        array (
                          'label' => 'Width 50%',
                          'value' => 'w-50',
                        ),
                        4 => 
                        array (
                          'label' => 'Width 75%',
                          'value' => 'w-75',
                        ),
                        5 => 
                        array (
                          'label' => 'Width 100%',
                          'value' => 'w-100',
                        ),
                      ),
                    ),
                    3 => 
                    array (
                      'identifier' => 'contentAlign',
                      'label' => 'Caption align',
                      'description' => 'general setting - override in "Swiper Slides" is possible',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => 'center-center',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'left-top',
                          'value' => 'left-top',
                        ),
                        1 => 
                        array (
                          'label' => 'left-center',
                          'value' => 'left-center',
                        ),
                        2 => 
                        array (
                          'label' => 'left-bottom',
                          'value' => 'left-bottom',
                        ),
                        3 => 
                        array (
                          'label' => 'center-top',
                          'value' => 'center-top',
                        ),
                        4 => 
                        array (
                          'label' => 'center-center',
                          'value' => 'center-center',
                        ),
                        5 => 
                        array (
                          'label' => 'center-bottom',
                          'value' => 'center-bottom',
                        ),
                        6 => 
                        array (
                          'label' => 'right-top',
                          'value' => 'right-top',
                        ),
                        7 => 
                        array (
                          'label' => 'right-center',
                          'value' => 'right-center',
                        ),
                        8 => 
                        array (
                          'label' => 'right-bottom',
                          'value' => 'right-bottom',
                        ),
                      ),
                    ),
                    4 => 
                    array (
                      'identifier' => 'swiperPadding',
                      'label' => 'Swiper padding',
                      'description' => 'slider padding in px',
                      'type' => 'Number',
                      'default' => 20,
                      'size' => 5,
                      'range' => 
                      array (
                        'lower' => 0,
                      ),
                    ),
                  ),
                ),
                2 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'parameter',
                  'label' => 'Parameters',
                  'description' => 'Swiper optional parameters',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'slidesPerView',
                      'label' => 'Slides per view - only if "Effect type" is "slide"',
                      'description' => 'number of slides per view (slides visible at the same time on slider\'s container)',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => '1',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => '1',
                          'value' => '1',
                        ),
                        1 => 
                        array (
                          'label' => '2',
                          'value' => '2',
                        ),
                        2 => 
                        array (
                          'label' => '3',
                          'value' => '3',
                        ),
                        3 => 
                        array (
                          'label' => '4',
                          'value' => '4',
                        ),
                        4 => 
                        array (
                          'label' => '5',
                          'value' => '5',
                        ),
                        5 => 
                        array (
                          'label' => '6',
                          'value' => '6',
                        ),
                        6 => 
                        array (
                          'label' => '7',
                          'value' => '7',
                        ),
                        7 => 
                        array (
                          'label' => '8',
                          'value' => '8',
                        ),
                        8 => 
                        array (
                          'label' => '9',
                          'value' => '9',
                        ),
                        9 => 
                        array (
                          'label' => '10',
                          'value' => '10',
                        ),
                        10 => 
                        array (
                          'label' => '11',
                          'value' => '11',
                        ),
                        11 => 
                        array (
                          'label' => '12',
                          'value' => '12',
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'identifier' => 'slidesPerGroup',
                      'label' => 'Slides per group - only if "Effect type" is "slide"',
                      'description' => 'set numbers of slides to define and enable group sliding. Useful to use with slidesPerView > 1',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => '1',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => '1',
                          'value' => '1',
                        ),
                        1 => 
                        array (
                          'label' => '2',
                          'value' => '2',
                        ),
                        2 => 
                        array (
                          'label' => '3',
                          'value' => '3',
                        ),
                        3 => 
                        array (
                          'label' => '4',
                          'value' => '4',
                        ),
                        4 => 
                        array (
                          'label' => '5',
                          'value' => '5',
                        ),
                        5 => 
                        array (
                          'label' => '6',
                          'value' => '6',
                        ),
                        6 => 
                        array (
                          'label' => '7',
                          'value' => '7',
                        ),
                        7 => 
                        array (
                          'label' => '8',
                          'value' => '8',
                        ),
                        8 => 
                        array (
                          'label' => '9',
                          'value' => '9',
                        ),
                        9 => 
                        array (
                          'label' => '10',
                          'value' => '10',
                        ),
                        10 => 
                        array (
                          'label' => '11',
                          'value' => '11',
                        ),
                        11 => 
                        array (
                          'label' => '12',
                          'value' => '12',
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'identifier' => 'spaceBetween',
                      'label' => 'Space between - only if "Effect type" is "slide"',
                      'description' => 'distance between slides in px',
                      'type' => 'Number',
                      'default' => 0,
                      'size' => 5,
                      'range' => 
                      array (
                        'lower' => 0,
                      ),
                    ),
                    3 => 
                    array (
                      'identifier' => 'speed',
                      'label' => 'Speed',
                      'description' => 'duration of transition between slides (in ms)',
                      'type' => 'Number',
                      'default' => 300,
                      'size' => 5,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    4 => 
                    array (
                      'identifier' => 'initialSlide',
                      'label' => 'Initial slide',
                      'description' => 'index number of initial slide',
                      'type' => 'Number',
                      'default' => 0,
                      'size' => 5,
                      'range' => 
                      array (
                        'lower' => 0,
                      ),
                    ),
                    5 => 
                    array (
                      'identifier' => 'loop',
                      'label' => 'Loop',
                      'description' => 'set to true to enable continuous loop mode',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    6 => 
                    array (
                      'identifier' => 'centeredSlides',
                      'label' => 'Centered slides',
                      'description' => 'if true, then active slide will be centered, not always on the left side',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    7 => 
                    array (
                      'identifier' => 'grabCursor',
                      'label' => 'Grab cursor',
                      'description' => 'this option may a little improve desktop usability. If true, user will see the "grab" cursor when hover on Swiper',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                  ),
                ),
                3 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'breakpoints',
                  'label' => 'Breakpoints',
                  'description' => 'Allows to set different parameter (slidesPerView & slidesPerGroup) for different responsive breakpoints (screen sizes).',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'useBreakpoints',
                      'label' => 'Use breakpoints',
                      'description' => 'only if "Effect type" is "slide"',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    1 => 
                    array (
                      'identifier' => 'bp_10_slidesPerView',
                      'label' => 'Slides per view if screen size is < 576px',
                      'description' => 'number of slides per view (slides visible at the same time on slider\'s container)',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    2 => 
                    array (
                      'identifier' => 'bp_10_slidesPerGroup',
                      'label' => 'Slides per group if screen size is < 576px',
                      'description' => 'set numbers of slides to define and enable group sliding. Useful to use with slidesPerView > 1',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    3 => 
                    array (
                      'identifier' => 'bp_576_slidesPerView',
                      'label' => 'Slides per view if screen size is > 575px and < 768px',
                      'description' => 'number of slides per view (slides visible at the same time on slider\'s container)',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 2,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    4 => 
                    array (
                      'identifier' => 'bp_576_slidesPerGroup',
                      'label' => 'Slides per group if screen size is > 575px and < 768px',
                      'description' => 'set numbers of slides to define and enable group sliding. Useful to use with slidesPerView > 1',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    5 => 
                    array (
                      'identifier' => 'bp_768_slidesPerView',
                      'label' => 'Slides per view if screen size is > 767px and < 992px',
                      'description' => 'number of slides per view (slides visible at the same time on slider\'s container)',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 3,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    6 => 
                    array (
                      'identifier' => 'bp_768_slidesPerGroup',
                      'label' => 'Slides per group if screen size is > 767px and < 992px',
                      'description' => 'set numbers of slides to define and enable group sliding. Useful to use with slidesPerView > 1',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    7 => 
                    array (
                      'identifier' => 'bp_992_slidesPerView',
                      'label' => 'Slides per view if screen size is > 991px and < 1200px',
                      'description' => 'number of slides per view (slides visible at the same time on slider\'s container)',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 4,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    8 => 
                    array (
                      'identifier' => 'bp_992_slidesPerGroup',
                      'label' => 'Slides per group if screen size is > 991px and < 1200px',
                      'description' => 'set numbers of slides to define and enable group sliding. Useful to use with slidesPerView > 1',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    9 => 
                    array (
                      'identifier' => 'bp_1200_slidesPerView',
                      'label' => 'Slides per view if screen size is > 1199px and < 1400px',
                      'description' => 'number of slides per view (slides visible at the same time on slider\'s container)',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 5,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    10 => 
                    array (
                      'identifier' => 'bp_1200_slidesPerGroup',
                      'label' => 'Slides per group if screen size is > 1199px and < 1400px',
                      'description' => 'set numbers of slides to define and enable group sliding. Useful to use with slidesPerView > 1',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    11 => 
                    array (
                      'identifier' => 'bp_1400_slidesPerView',
                      'label' => 'Slides per view if screen size is > 1399px and < 1900px',
                      'description' => 'number of slides per view (slides visible at the same time on slider\'s container)',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 6,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    12 => 
                    array (
                      'identifier' => 'bp_1400_slidesPerGroup',
                      'label' => 'Slides per group if screen size is > 1399px and < 1900px',
                      'description' => 'set numbers of slides to define and enable group sliding. Useful to use with slidesPerView > 1',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    13 => 
                    array (
                      'identifier' => 'bp_1900_slidesPerView',
                      'label' => 'Slides per view if screen size is > 1900 and < 2560px',
                      'description' => 'number of slides per view (slides visible at the same time on slider\'s container)',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 7,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    14 => 
                    array (
                      'identifier' => 'bp_1900_slidesPerGroup',
                      'label' => 'Slides per group if screen size is > 1900 and < 2560px',
                      'description' => 'set numbers of slides to define and enable group sliding. Useful to use with slidesPerView > 1',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                  ),
                ),
                4 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'effects',
                  'label' => 'Effects',
                  'description' => 'A small selection of often used effects as well as some presets with the effect "Creative"',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'effectType',
                      'label' => 'Effect type',
                      'description' => 'some effects depends on the selected type',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => 'slide',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'slide',
                          'value' => 'slide',
                        ),
                        1 => 
                        array (
                          'label' => 'fade',
                          'value' => 'fade',
                        ),
                        2 => 
                        array (
                          'label' => 'cube',
                          'value' => 'cube',
                        ),
                        3 => 
                        array (
                          'label' => 'flip',
                          'value' => 'flip',
                        ),
                        4 => 
                        array (
                          'label' => 'cards',
                          'value' => 'cards',
                        ),
                        5 => 
                        array (
                          'label' => 'creative',
                          'value' => 'creative',
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'identifier' => 'slidedirection',
                      'label' => 'Direction can be \'horizontal\' or \'vertical\'',
                      'description' => 'only if "Slides per view" is 1 and "Effect type" is "slide"',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => 'horizontal',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'horizontal',
                          'value' => 'horizontal',
                        ),
                        1 => 
                        array (
                          'label' => 'vertical',
                          'value' => 'vertical',
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'identifier' => 'slideRows',
                      'label' => 'Slide rows - only if "Effect type" is "slide"',
                      'description' => 'number of slides rows, for multirow layout - rows > 1 is currently not compatible with loop mode & useBreakpoints',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 1,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    3 => 
                    array (
                      'identifier' => 'creativePresets',
                      'label' => 'Creative effect presets',
                      'description' => 'only if Effect type "creative" is selected',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'Preset 1',
                          'value' => '1',
                        ),
                        1 => 
                        array (
                          'label' => 'Preset 2',
                          'value' => '2',
                        ),
                        2 => 
                        array (
                          'label' => 'Preset 3',
                          'value' => '3',
                        ),
                        3 => 
                        array (
                          'label' => 'Preset 4',
                          'value' => '4',
                        ),
                        4 => 
                        array (
                          'label' => 'Preset 5',
                          'value' => '5',
                        ),
                        5 => 
                        array (
                          'label' => 'Preset 6',
                          'value' => '6',
                        ),
                      ),
                    ),
                  ),
                ),
                5 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'navigation',
                  'label' => 'Navigation',
                  'description' => 'Enable Navigation, Scrollbar and Keyboard Control',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'navigationEnable',
                      'label' => 'Enables navigation arrows/buttons',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    1 => 
                    array (
                      'identifier' => 'scrollbarEnable',
                      'label' => 'Enable scrollbar',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    2 => 
                    array (
                      'identifier' => 'keyboardEnable',
                      'label' => 'Enable Keyboard Control',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                  ),
                ),
                6 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'pagination',
                  'label' => 'Pagination',
                  'description' => 'Pagination Parameters',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'paginationEnable',
                      'label' => 'Enable pagination',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    1 => 
                    array (
                      'identifier' => 'paginationType',
                      'label' => 'Pagination type',
                      'type' => 'Select',
                      'renderType' => 'selectSingle',
                      'default' => 'bullets',
                      'items' => 
                      array (
                        0 => 
                        array (
                          'label' => 'bullets',
                          'value' => 'bullets',
                        ),
                        1 => 
                        array (
                          'label' => 'progessbar',
                          'value' => 'progessbar',
                        ),
                        2 => 
                        array (
                          'label' => 'fraction',
                          'value' => 'fraction',
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'identifier' => 'paginationClickable',
                      'label' => 'Pagination clickable',
                      'description' => 'only for pagination type "bullets"',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    3 => 
                    array (
                      'identifier' => 'paginationDynamicBullets',
                      'label' => 'Pagination - dynamic bullets',
                      'description' => 'good to enable if you use bullets pagination with a lot of slides. So it will keep only few bullets visible at the same time',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                  ),
                ),
                7 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'autoplay',
                  'label' => 'Autoplay',
                  'description' => 'Autoplay Parameters',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'autoplayEnable',
                      'label' => 'Enable autoplay',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    1 => 
                    array (
                      'identifier' => 'autoplayProgressCircle',
                      'label' => 'Autoplay progress circle',
                      'description' => 'only if navigation is enabled',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    2 => 
                    array (
                      'identifier' => 'autoplayDelay',
                      'label' => 'Autoplay delay',
                      'description' => 'delay between transitions in ms (default 3000)',
                      'type' => 'Number',
                      'default' => 3000,
                      'size' => 5,
                      'range' => 
                      array (
                        'lower' => 1,
                      ),
                    ),
                    3 => 
                    array (
                      'identifier' => 'pauseOnMouseEnter',
                      'label' => 'Autoplay - pause on pointer enter',
                      'description' => 'when enabled autoplay will be paused on pointer (mouse) enter over Swiper container',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    4 => 
                    array (
                      'identifier' => 'autoplayDisableOnInteraction',
                      'label' => 'Disable autoplay on interaction',
                      'description' => 'set to false and autoplay will not be disabled after user interactions (swipes), it will be restarted every time after interaction (default true)',
                      'type' => 'Checkbox',
                      'default' => 1,
                      'renderType' => 'checkboxToggle',
                    ),
                  ),
                ),
                8 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'thumbnails',
                  'label' => 'Thumbs',
                  'description' => 'Thumbs Parameters',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'thumbnailsEnable',
                      'label' => 'Enable thumbs',
                      'type' => 'Checkbox',
                      'renderType' => 'checkboxToggle',
                    ),
                    1 => 
                    array (
                      'identifier' => 'thumbnailsSlidesPerView',
                      'label' => 'Thumbnail slides per view',
                      'description' => 'number of Thumbnail slides per view',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 4,
                      'range' => 
                      array (
                        'lower' => 2,
                      ),
                    ),
                    2 => 
                    array (
                      'identifier' => 'thumbnailsSpaceBetween',
                      'label' => 'Thumbs Space between',
                      'description' => 'distance between thumbs in px',
                      'type' => 'Number',
                      'size' => 5,
                      'default' => 10,
                      'range' => 
                      array (
                        'lower' => 0,
                      ),
                    ),
                  ),
                ),
                9 => 
                array (
                  'type' => 'Sheet',
                  'identifier' => 'customscript',
                  'label' => 'Custom',
                  'description' => 'Add custom script parameters or style here',
                  'fields' => 
                  array (
                    0 => 
                    array (
                      'identifier' => 'customScript',
                      'label' => 'Custom script',
                      'description' => 'if you are missing a possibility to customize the slider with the given options, you can add your own script here. More infos swiperjs.com/swiper-api',
                      'type' => 'Textarea',
                      'rows' => 5,
                    ),
                    1 => 
                    array (
                      'identifier' => 'customCss',
                      'label' => 'Custom CSS',
                      'type' => 'Textarea',
                      'rows' => 5,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        5 => 
        array (
          'identifier' => 'appearance_tab',
          'type' => 'Tab',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance',
        ),
        6 => 
        array (
          'identifier' => 'frames_palette',
          'type' => 'Palette',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'layout',
              'useExistingField' => true,
            ),
            1 => 
            array (
              'identifier' => 'frame_class',
              'useExistingField' => true,
            ),
            2 => 
            array (
              'identifier' => 'space_before_class',
              'useExistingField' => true,
            ),
            3 => 
            array (
              'identifier' => 'space_after_class',
              'useExistingField' => true,
            ),
          ),
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => '_assets/5f87774f2ff37f0dbb5b6c634c2765bf/Icon.svg',
    'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
    'hostExtension' => 't3sswiper',
    'extPath' => 'EXT:t3sswiper/ContentBlocks/ContentElements/swiperslider',
  ),
  'mrhaju/flip-card' => 
  array (
    'name' => 'mrhaju/flip-card',
    'yaml' => 
    array (
      'name' => 'mrhaju/flip-card',
      'title' => 'mrhaju/flip-card',
      'description' => 'Description for Content Element mrhaju/flip-card',
      'group' => 'common',
      'prefixFields' => true,
      'prefixType' => 'full',
      'basics' => 
      array (
        0 => 'TYPO3/Appearance',
        1 => 'TYPO3/Categories',
      ),
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
          'label' => 'Custom header label',
        ),
        1 => 
        array (
          'identifier' => 'cardImageFront',
          'label' => 'Card Front Image',
          'type' => 'File',
        ),
        2 => 
        array (
          'identifier' => 'cardBackContent',
          'label' => 'Card Back Content',
          'type' => 'File',
        ),
        3 => 
        array (
          'identifier' => 'cardTitle',
          'label' => 'Card Title',
          'type' => 'Text',
        ),
        4 => 
        array (
          'identifier' => 'cardText',
          'label' => 'Card Text',
          'type' => 'Text',
        ),
        5 => 
        array (
          'identifier' => 'appearance_tab',
          'type' => 'Tab',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance',
        ),
        6 => 
        array (
          'identifier' => 'frames_palette',
          'type' => 'Palette',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'layout',
              'useExistingField' => true,
            ),
            1 => 
            array (
              'identifier' => 'frame_class',
              'useExistingField' => true,
            ),
            2 => 
            array (
              'identifier' => 'space_before_class',
              'useExistingField' => true,
            ),
            3 => 
            array (
              'identifier' => 'space_after_class',
              'useExistingField' => true,
            ),
          ),
        ),
        7 => 
        array (
          'identifier' => 'categories_tab',
          'type' => 'Tab',
          'label' => 'LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories',
        ),
        8 => 
        array (
          'identifier' => 'categories',
          'useExistingField' => true,
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => '_assets/e49814126bbc738de538dcebc7e9bcc4/Icon.svg',
    'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
    'hostExtension' => 'mrhaju_sidepackage',
    'extPath' => 'EXT:mrhaju_sidepackage/ContentBlocks/ContentElements/flip-card',
  ),
  'mrhaju/progress-bar' => 
  array (
    'name' => 'mrhaju/progress-bar',
    'yaml' => 
    array (
      'name' => 'mrhaju/progress-bar',
      'title' => 'mrhaju/progress-bar',
      'description' => 'Progress Bar',
      'group' => 'common',
      'prefixFields' => true,
      'prefixType' => 'full',
      'basics' => 
      array (
        0 => 'TYPO3/Appearance',
        1 => 'TYPO3/Categories',
      ),
      'fields' => 
      array (
        0 => 
        array (
          'identifier' => 'header',
          'useExistingField' => true,
          'label' => 'Custom header label',
          'type' => 'Text',
        ),
        1 => 
        array (
          'identifier' => 'progress',
          'label' => 'Fortschritt in %',
          'type' => 'Text',
        ),
        2 => 
        array (
          'identifier' => 'progressColor',
          'label' => 'Textfarbe des Fortschrittsbalkens',
          'type' => 'Radio',
          'items' => 
          array (
            0 => 
            array (
              'value' => 'blue',
              'label' => 'Blau',
            ),
            1 => 
            array (
              'value' => 'middleblue',
              'label' => 'Mittleres Blau',
            ),
            2 => 
            array (
              'value' => 'lightblue',
              'label' => 'Hellblau',
            ),
            3 => 
            array (
              'value' => 'orange',
              'label' => 'Orange',
            ),
            4 => 
            array (
              'value' => 'yellow',
              'label' => 'Gelb',
            ),
            5 => 
            array (
              'value' => 'red',
              'label' => 'Rot',
            ),
            6 => 
            array (
              'value' => 'green',
              'label' => 'Grün',
            ),
            7 => 
            array (
              'value' => 'purple',
              'label' => 'Lila',
            ),
            8 => 
            array (
              'value' => 'pink',
              'label' => 'Pink',
            ),
            9 => 
            array (
              'value' => 'white',
              'label' => 'Weiß',
            ),
            10 => 
            array (
              'value' => 'black',
              'label' => 'Schwarz',
            ),
          ),
        ),
        3 => 
        array (
          'identifier' => 'progressBackgroundColor',
          'label' => 'Farbe des Hintergrundes des Fortschrittsbalkens',
          'type' => 'Radio',
          'items' => 
          array (
            0 => 
            array (
              'value' => 'blue',
              'label' => 'Blau',
            ),
            1 => 
            array (
              'value' => 'middleblue',
              'label' => 'Mittleres Blau',
            ),
            2 => 
            array (
              'value' => 'lightblue',
              'label' => 'Hellblau',
            ),
            3 => 
            array (
              'value' => 'orange',
              'label' => 'Orange',
            ),
            4 => 
            array (
              'value' => 'yellow',
              'label' => 'Gelb',
            ),
            5 => 
            array (
              'value' => 'red',
              'label' => 'Rot',
            ),
            6 => 
            array (
              'value' => 'green',
              'label' => 'Grün',
            ),
            7 => 
            array (
              'value' => 'purple',
              'label' => 'Lila',
            ),
            8 => 
            array (
              'value' => 'pink',
              'label' => 'Pink',
            ),
          ),
        ),
        4 => 
        array (
          'identifier' => 'progressHeight',
          'label' => 'Höhe des Fortschrittsbalkens',
          'type' => 'Text',
        ),
        5 => 
        array (
          'identifier' => 'appearance_tab',
          'type' => 'Tab',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance',
        ),
        6 => 
        array (
          'identifier' => 'frames_palette',
          'type' => 'Palette',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
          'fields' => 
          array (
            0 => 
            array (
              'identifier' => 'layout',
              'useExistingField' => true,
            ),
            1 => 
            array (
              'identifier' => 'frame_class',
              'useExistingField' => true,
            ),
            2 => 
            array (
              'identifier' => 'space_before_class',
              'useExistingField' => true,
            ),
            3 => 
            array (
              'identifier' => 'space_after_class',
              'useExistingField' => true,
            ),
          ),
        ),
        7 => 
        array (
          'identifier' => 'categories_tab',
          'type' => 'Tab',
          'label' => 'LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories',
        ),
        8 => 
        array (
          'identifier' => 'categories',
          'useExistingField' => true,
        ),
      ),
      'table' => 'tt_content',
      'typeField' => 'CType',
    ),
    'icon' => '_assets/36361ed76d95e1808a9a291d14e9903c/Icon.svg',
    'iconProvider' => 'TYPO3\\CMS\\Core\\Imaging\\IconProvider\\SvgIconProvider',
    'hostExtension' => 'mrhaju_sidepackage',
    'extPath' => 'EXT:mrhaju_sidepackage/ContentBlocks/ContentElements/progress-bar',
  ),
);
#