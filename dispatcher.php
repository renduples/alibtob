<?php
/** 
 * Thin PHP Framework (TPF) 2011 http://thinphp.com
 *
 * Licensed under TPF License at http://bit.ly/TPFLicense
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2011, Thin PHP Framework Team
 * @link          http://thinphp.com
 * @package       app.web
 * @license       TPF License http://bit.ly/TPFLicense
 */

define('BASE', dirname(__FILE__));
require_once BASE.'/app/includes.php';
if ( !isset($_GET['route']) ) exit('No direct script access allowed!');

$c = new MainController( $_GET['route'] );
$c->handle(null);
