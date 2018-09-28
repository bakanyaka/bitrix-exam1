<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="menu-block popup-wrap">
    <a href="" class="btn-menu btn-toggle"></a>
    <div class="menu popup-block">
        <ul class="">
            <li class="main-page"><a href="<?= SITE_DIR ?>">Главная</a>
            </li>
            <? if (!empty($arResult)): ?>
                <?
                $previousLevel = 0;
                foreach ($arResult as $arItem): ?>
                    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                    <? endif ?>
                        <?if ($arItem["PERMISSION"] > "D"):?>
                        <li>
                            <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                        <? if ($arItem["IS_PARENT"]): ?>
                            <ul>
                                <? if (!empty($arItem["PARAMS"]["MENU_TEXT"])): ?>
                                    <div class="menu-text"><?= $arItem["PARAMS"]["MENU_TEXT"] ?></div>
                                <? endif; ?>
                        <? else: ?>
                        </li>
                        <? endif; ?>
                    <? endif; ?>
                    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
                <? endforeach; ?>
                <? if ($previousLevel > 1)://close last item tags?>
                    <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                <? endif ?>
            <? endif ?>
        </ul>
        <a href="" class="btn-close"></a>
    </div>
    <div class="menu-overlay"></div>
</div>
