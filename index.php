<?php
/**
 * Created by PhpStorm.
 * User: nivlem
 * Date: 06/06/17
 * Time: 20:15
 */
include "get_weeronline.php";
include "get_class.php";

$content = getContent();
$specific = getClass($content, 'homelayout');
echo $specific->nodeValue;