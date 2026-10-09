<?php

use App\Application\Devflow;

use function App\Shared\Helpers\cms_head;

?>
<!DOCTYPE html>
<html lang="<?=Devflow::$PHP->configContainer->string(key: 'app.language');?>">
<head>
    <meta charset="<?=Devflow::$PHP->configContainer->string(key: 'app.charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?=$page->getTranslation('meta_description');?>">
    <title><?=$page->getTranslation('meta_title');?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?=phpb_theme_asset(path: 'images/favicon.ico');?>">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?=phpb_theme_asset(path: 'css/style.css');?>" rel="stylesheet">
    <?php cms_head(); ?>

</head>
