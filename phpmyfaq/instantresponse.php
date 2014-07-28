<?php
/**
 * The Ajax powered instant response page.
 *
 * PHP Version 5.4
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at http://mozilla.org/MPL/2.0/.
 *
 * @category  phpMyFAQ
 * @package   Frontend
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @author    Matteo Scaramuccia <matteo@phpmyfaq.de>
 * @copyright 2007-2014 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      http://www.phpmyfaq.de
 * @since     2007-03-18
 */

if (!defined('IS_VALID_PHPMYFAQ')) {
    $protocol = 'http';
    if (isset($_SERVER['HTTPS']) && strtoupper($_SERVER['HTTPS']) === 'ON'){
        $protocol = 'https';
    }
    header('Location: ' . $protocol . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']));
    exit();
}

try {
    $faqsession->userTracking('instantresponse', 0);
} catch (PMF_Exception $e) {
    // @todo handle the exception
}

$tpl->parse(
    'writeContent',
    array(
        'msgInstantResponse'            => $PMF_LANG['msgInstantResponse'],
        'msgDescriptionInstantResponse' => $PMF_LANG['msgDescriptionInstantResponse'],
        'searchString'                  => '',
        'writeSendAdress'               => '?'.$sids.'action=instantresponse',
        'ajaxlanguage'                  => $LANGCODE,
        'printInstantResponse'          => ''
    )
);

$tpl->merge('writeContent', 'index');
