<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
    return "";

$strReturn = '';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= "
                <a href='{$arResult[$index]["LINK"]}'>
                    {$title}
                </a>
        ";
    } else {
        $strReturn .= "
            <span>                
                {$title}                
            </span>
        ";
    }
}

return $strReturn;