<?php
return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '
          [14-8]\\d{6,9}|
          [23]\\d{4,9}|
          9(?:
            [1-4]\\d{8}|
            9\\d{2,8}
          )
        ',
    'PossibleNumberPattern' => '\\d{4,10}',
    'ExampleNumber' => '',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            [13-589][12]|
            [27][1-4]
          )\\d{7}|
          2(?:
            1\\d{3,8}|
            3[12]\\d{7}|
            4(?:
              1\\d{4,7}|
              2\\d{7}
            )|
            5(?:
              1\\d{3,7}|
              [2356]\\d{7}
            )|
            6\\d{8}|
            7[34]\\d{7}|
            [89][12]\\d{7}
          )|
          3(?:
            1(?:
              1\\d{4,7}|
              2\\d{7}
            )|
            2[1-4]\\d{7}|
            3(?:
              [125]\\d{7}|
              4\\d{6,7}
            )|
            4(?:
              1\\d{6,7}
              [24-9]\\d{7}
            )|
            5(?:
              1\\d{4,7}|
              [23]\\d{7}
            )|
            [6-9][12]\\d{7}
          )|
          4(?:
            [135-9][12]\\d{7}|
            2[1-467]\\d{7}|
            4(?:
              1\\d{4,7}|
              [2-4]\\d{7}
            )
          )|
          5(?:
            1(?:
              1\\d{4,7}|
              2\\d{7}
            )|
            2[89]\\d{7}|
            3[1-5]\\d{7}|
            4(?:
              1\\d{4,7}|
              [2-8]\\d{7}
            )|
            [5-7][12]\\d{7}|
            8[1245]\\d{7}
          )|
          6(?:
            1(?:
              1\\d{6,7}|
              2\\d{7}
            )|
            [347-9][12]\\d{7}|
            5(?:
              1\\d{7}|
              2\\d{6,7}
            )|
            6[1-6]\\d{7}
          )|
          7(?:
            [13589][12]|
            2[1289]|
            4[1-4]|
            6[1-6]|
            7[1-3]
          )\\d{7}|
          8(?:
            [145][12]|
            3[124578]|
            6[1256]|
            7[1245]
          )\\d{7}
        ',
    'PossibleNumberPattern' => '\\d{5,10}',
    'ExampleNumber' => '2123456789',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '9[1-3]\\d{8}',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '9123456789',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'IR',
  'countryCode' => 98,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(2[15])(\\d{3,5})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              1|
              5[0-47-9]
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 => 
    array (
      'pattern' => '(2[15])(\\d{3})(\\d{3,4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              1|
              5[0-47-9]
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    2 => 
    array (
      'pattern' => '(2\\d)(\\d{4})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              [16]|
              5[0-47-9]
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    3 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{3,4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [13-9]|
            2[02-57-9]
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    4 => 
    array (
      'pattern' => '(\\d{3})(\\d{2})(\\d{2,3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [13-9]|
            2[02-57-9]
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    5 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [13-9]|
            2[02-57-9]
          ',
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);