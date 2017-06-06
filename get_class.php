<?php
/**
 * Created by PhpStorm.
 * User: nivlem
 * Date: 06/06/17
 * Time: 22:02
 *
 * Creates function to find elements by classname
 */

function getClass($html, $classname)
{
    $domdocument = new DOMDocument();
    $domdocument->loadHTML($html);

    $finder        = new DomXPath($domdocument);
    $result        = $finder->query("//*[contains(@class, '$classname')]");
    $displayResult = iterator_to_array($result)[0];

    return $displayResult;
}