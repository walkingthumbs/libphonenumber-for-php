<?php
return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[2-79]\\d{3,4}',
    'PossibleNumberPattern' => '\\d{4,5}',
    'ExampleNumber' => '',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          2(?:
            [0-57-9]\\d|
            6[4-9]
          )\\d{2}|
          (?:
            [2-46]\\d|
            7[01]
          )\\d{2}
        ',
    'PossibleNumberPattern' => '\\d{4,5}',
    'ExampleNumber' => '2158',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '
          (?:
            [59]\\d|
            7[2-9]
          )\\d{2}
        ',
    'PossibleNumberPattern' => '\\d{4,5}',
    'ExampleNumber' => '5012',
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
  'id' => 'SH',
  'countryCode' => 290,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => true,
  'leadingZeroPossible' => NULL,
);