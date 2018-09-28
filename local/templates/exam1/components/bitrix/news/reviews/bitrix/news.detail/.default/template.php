<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<hr>
<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <? echo $arResult["DETAIL_TEXT"]; ?>
        </div>
        <div class="review-autor">
            <?= $arResult["NAME"] ?>, <?= $arResult["DISPLAY_ACTIVE_FROM"] ?><?= !empty($arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]) ? ', ' . $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"] : '' ?><?= !empty($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]) ? ', ' . $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"] : '' ?>
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap">
        <? if (is_array($arResult["DETAIL_PICTURE"])): ?>
            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
        <? else: ?>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/rew/no_photo.jpg">
        <? endif; ?>
    </div>
</div>
<? if (is_set($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"])): ?>
    <div class="exam-review-doc">
        <p><?= GetMessage('DOCUMENTS') ?>:</p>
        <? foreach ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"] as $file): ?>
            <div class="exam-review-item-doc"><img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
                <a href="<?= $file["SRC"] ?>"><?= $file["ORIGINAL_NAME"] ?>
                </a>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>