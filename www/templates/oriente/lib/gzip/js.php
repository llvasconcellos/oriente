<?php 
/**
* @package   oriente Template
* @file      js.php
* @version   1.5.0 May 2010
* @author    Oriente http://www.oriente.com.br
* @copyright 
*/

define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', dirname(dirname(dirname(dirname(dirname(__FILE__))))).DS);

// set header
if (extension_loaded('zlib') && !ini_get('zlib.output_compression')) @ob_start('ob_gzhandler');
header('Content-type: application/x-javascript');
header('Expires: '.gmdate('D, d M Y H:i:s', time() + 86400).' GMT');

// include file
if (isset($_GET['id']) && $_GET['id']) {

	$id   = (string) preg_replace('/[^A-Z0-9_\.-]/i', '', $_GET['id']);
	$file = PATH_ROOT.'cache'.DS.'template'.DS.'js-'.$id.'.js';

	if (is_file($file)) {
		include($file);
	}
}

?>