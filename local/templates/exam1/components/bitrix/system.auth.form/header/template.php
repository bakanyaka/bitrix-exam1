<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult ['SHOW_ERRORS'] == 'Y' && $arResult ['ERROR'])
    ShowMessage($arResult ['ERROR_MESSAGE']);

CJSCore::Init();
?>
<nav class="menu-block">
    <ul>
        <? if ($arResult["FORM_TYPE"] == "login") : ?>
            <li class="att popup-wrap"><a id="hd_singin_but_open" href=""
                                          class="btn-toggle"><?= GetMessage("AUTH_LOGIN_LINK_TEXT") ?></a>
                <form class="frm-login popup-block" name="system_auth_form<?= $arResult["RND"] ?>" method="post"
                      target="_top" action="<?= $arResult["AUTH_URL"] ?>">
                    <div class="frm-title"><?= GetMessage("AUTH_LOGIN_LINK_TEXT") ?></div>
                    <a href="" class="btn-close"><?= GetMessage("AUTH_LOGIN_LINK_CLOSE_TEXT") ?></a>
                    <?
                    if ($arResult["BACKURL"] <> ''):?>
                        <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>"/>
                    <? endif ?>
                    <?
                    foreach ($arResult["POST"] as $key => $value):?>
                        <input type="hidden" name="<?= $key ?>" value="<?= $value ?>"/>
                    <? endforeach ?>
                    <input type="hidden" name="AUTH_FORM" value="Y"/>
                    <input type="hidden" name="TYPE" value="AUTH"/>
                    <div class="frm-row">
                        <input type="text" placeholder="<?= GetMessage("AUTH_LOGIN") ?>" name="USER_LOGIN"
                               maxlength="50" value="" size="17"/>
                        <script>
                          BX.ready(function () {
                            var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                            if (loginCookie) {
                              var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                              var loginInput = form.elements['USER_LOGIN'];
                              loginInput.value = loginCookie;
                            }
                          });
                        </script>
                    </div>
                    <div class="frm-row">
                        <input type="password" placeholder="<?= GetMessage("AUTH_PASSWORD") ?>" name="USER_PASSWORD"
                               maxlength="50" size="17" autocomplete="off"/>
                    </div>
                    <?if ($arResult["CAPTCHA_CODE"]):?>
                        <div class="frm-row">
                            <?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
                            <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
                            <input type="text" name="captcha_word" maxlength="50" value="" />
                        </div>
                    <?endif?>
                    <div class="frm-row">
                        <a href="<?= $arParams["FORGOT_PASSWORD_URL"] ?>" class="btn-forgot"><?= GetMessage("AUTH_FORGOT_PASSWORD_2") ?></a>
                    </div>
                    <div class="frm-row">
                        <div class="frm-chk">
                            <input type="checkbox" id="login" name="USER_REMEMBER" value="Y"> <label
                                    for="login"><?= GetMessage("AUTH_REMEMBER_ME_SHORT") ?></label>
                        </div>
                    </div>
                    <div class="frm-row">
                        <input type="submit" name="Login" value="<?= GetMessage("AUTH_LOGIN_BUTTON") ?>">
                    </div>
                    <?if($arResult["AUTH_SERVICES"]):?>
                        <div class="frm-row">
                            <?=GetMessage("socserv_as_user_form")?><br />
                            <?
                            $APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "icons",
                                array(
                                    "AUTH_SERVICES" => $arResult["AUTH_SERVICES"],
                                    "SUFFIX" => "form",
                                ),
                                $component,
                                array("HIDE_ICONS" => "Y")
                            );
                            ?>
                        </div>
                    <?endif?>
                </form>
            </li>
            <li><a href="<?= $arParams["REGISTER_URL"] ?>"><?= GetMessage("AUTH_REGISTER") ?></a></li>
        <? else: ?>
            <li>
                <a href="<?= $arResult["PROFILE_URL"] ?>"><?= $arResult["USER_NAME"] ?></a>
            </li>
            <li><a href="<?= $APPLICATION->GetCurPageParam("logout=yes", array(
                    "login",
                    "logout",
                    "register",
                    "forgot_password",
                    "change_password")); ?>"><?= GetMessage("AUTH_LOGOUT_BUTTON") ?></a>
            </li>
        <? endif; ?>
    </ul>
</nav>
