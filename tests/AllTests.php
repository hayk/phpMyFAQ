<?php
/**
 * Main test suite for phpMyFAQ
 *
 * PHP Version 5.4
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at http://mozilla.org/MPL/2.0/.
 *
 * @category  phpMyFAQ
 * @package   PMF_Tests
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      http://www.phpmyfaq.de
 * @copyright 2009-2014 phpMyFAQ Team
 * @since     2009-05-16
 */

// Define the named constant used as a check by any included PHP file
define('IS_VALID_PHPMYFAQ', null);

date_default_timezone_set('Europe/Berlin');
error_reporting(E_ALL | E_STRICT);

// include PHPUnit
require_once __DIR__ . '/../vendor/phpunit/phpunit/src/Framework/TestSuite.php';
require_once __DIR__ . '/../vendor/phpunit/phpunit/src/TextUI/TestRunner.php';

// include Testsuites
require_once __DIR__ . '/Attachment/AllTests.php';
require_once __DIR__ . '/Category/AllTests.php';
require_once __DIR__ . '/Configuration/AllTests.php';
require_once __DIR__ . '/Faq/AllTests.php';
require_once __DIR__ . '/Instance/AllTests.php';
require_once __DIR__ . '/Search/AllTests.php';
//require_once __DIR__ . '/PMF_GlossaryTest.php';
require_once __DIR__ . '/PMF_LinkTest.php';

/**
 * AllTests
 *
 * @category  phpMyFAQ
 * @package   PMF_Tests
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      http://www.phpmyfaq.de
 * @copyright 2009-2014 phpMyFAQ Team
 * @since     2009-05-16
 */
class AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('phpMyFAQ AllTests');
        
        $suite->addTest(Attachment_AllTests::suite());
        $suite->addTest(Category_AllTests::suite());
        $suite->addTest(Configuration_AllTests::suite());
        $suite->addTest(Faq_AllTests::suite());
        $suite->addTest(Instance_AllTests::suite());
        $suite->addTest(Search_AllTests::suite());
        //$suite->addTestSuite('PMF_GlossaryTest');
        $suite->addTestSuite('PMF_LinkTest');
        
        return $suite;
    }
}
