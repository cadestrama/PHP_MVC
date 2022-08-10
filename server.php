<?php
declare(strict_types=1);

$root= dirname(__DIR__).DIRECTORY_SEPARATOR.'mvc'.DIRECTORY_SEPARATOR;

define('CONTROLLER_PATH',$root.'controller'.DIRECTORY_SEPARATOR);
define('MODEL_PATH',$root.'model'.DIRECTORY_SEPARATOR);
define('VIEW_PATH',$root.'view'.DIRECTORY_SEPARATOR);


require CONTROLLER_PATH . "File.php";
require CONTROLLER_PATH . "Data.php";
require CONTROLLER_PATH . "View.php";


File::setPath(MODEL_PATH);
Data::showData(VIEW_PATH);




