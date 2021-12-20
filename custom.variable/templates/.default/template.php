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

<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if ($arResult['SOME_VAR']) {
    $arrVars = $arResult['SOME_VAR'];
    ?>
    <ul>
        <li class="phone"><?php echo $arrVars['SETTINGS_VAl_1'] ?></li>
        <li class="phone"><?php echo $arrVars['SETTINGS_VAl_2'] ?></li>
        <li class="adress"><?php echo $arrVars['SETTINGS_VAl_3'] ?></li>
        <li class="adress"><?php echo $arrVars['SETTINGS_VAl_4'] ?></li>
    </ul>
<?php } ?>

<?php echo '<pre>'; print_r($arResult['SOME_VAR']); echo '</pre>';   ?>
