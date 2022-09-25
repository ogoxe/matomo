<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

if (!defined('PIWIK_DOCUMENT_ROOT')) {
    define('PIWIK_DOCUMENT_ROOT', dirname(__FILE__) == '/' ? '' : dirname(__FILE__));
}

/* for adBlocker */
if (isset($_GET['_bric'])) {
		$_GET['action_name'] = $_GET['_bric'];
		unset($_GET['_bric']);
}
if (isset($_GET['_bric_id'])) {
		$_GET['idsite'] = $_GET['_bric_id'];
		unset($_GET['_bric_id']);
}

include PIWIK_DOCUMENT_ROOT.'/piwik.php';