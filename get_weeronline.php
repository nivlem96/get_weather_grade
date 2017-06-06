<?php
/**
 * Created by PhpStorm.
 * User: nivlem
 * Date: 06/06/17
 * Time: 21:56
 *
 * Creates function to get content from weeronline website
 */
function getContent()
{
    $opts    = array('http' => array('header'=> 'Cookie: cookieConsent=true'));
    $context = stream_context_create($opts);
    $content = file_get_contents('http://www.weeronline.nl/', false, $context);

    return $content;
}