<?php

namespace libphonenumber\Tests;

use libphonenumber\PhoneNumber;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberType;

require_once dirname(__FILE__) . '/../PhoneNumber.php';
require_once dirname(__FILE__) . '/../PhoneNumberUtil.php';
require_once dirname(__FILE__) . '/../CountryCodeToRegionCodeMap.php';
require_once dirname(__FILE__) . '/../RegionCode.php';
require_once dirname(__FILE__) . '/../PhoneMetadata.php';
require_once dirname(__FILE__) . '/../PhoneNumberDesc.php';
require_once dirname(__FILE__) . '/../NumberFormat.php';
require_once dirname(__FILE__) . '/../PhoneNumberType.php';
require_once dirname(__FILE__) . '/../PhoneNumberFormat.php';
require_once dirname(__FILE__) . '/../Matcher.php';
require_once dirname(__FILE__) . '/../CountryCodeSource.php';
require_once dirname(__FILE__) . '/../NumberParseException.php';
require_once dirname(__FILE__) . '/../ValidationResult.php';

class PhoneNumberUtilProductionTest extends \PHPUnit_Framework_TestCase
{
    protected $phoneUtil;

    public function __construct() {
        $this->phoneUtil = PhoneNumberUtil::getInstance();
    }

    public function testSpecialCaseIndianMobile() {
        $fixedLineAndMobileNumber = new PhoneNumber();
        $fixedLineAndMobileNumber->setCountryCode(91)->setNationalNumber(7290412345);
        $this->assertEquals(PhoneNumberType::FIXED_LINE_OR_MOBILE,
            $this->phoneUtil->getNumberType($fixedLineAndMobileNumber));
    }
}
