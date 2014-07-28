<?php
/**
 * Test suite for PMF_Search_Database related classes
 *
 * PHP Version 5.4
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at http://mozilla.org/MPL/2.0/.
 *
 * @category  phpMyFAQ
 * @package   PMF_Tests
 * @author    Gustavo Solt <gustavo.solt@mayflower.de>
 * @copyright 2010 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      http://www.phpmyfaq.de
 * @since     2010-01-03
 */

// include PHPUnit
require_once __DIR__ . '/../../../vendor/phpunit/phpunit/src/Framework/TestSuite.php';
require_once __DIR__ . '/../../../vendor/phpunit/phpunit/src/TextUI/TestRunner.php';

require_once 'PMF_Search_Database_MysqliTest.php';
require_once 'PMF_Search_Database_PgsqlTest.php';

/**
 * AllTests
 *
 * @category  phpMyFAQ
 * @package   PMF_Tests
 * @author    Gustavo Solt <gustavo.solt@mayflower.de>
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      http://www.phpmyfaq.de
 * @copyright 2009-2014 phpMyFAQ Team
 * @since     2009-05-16
 */
class PMF_Search_Database_AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('phpMyFAQ Search Database');
        
        //$suite->addTestSuite('PMF_Search_Database_MysqlTest');
        //$suite->addTestSuite('PMF_Search_Database_PgsqlTest');
        
        return $suite;
    }
}
