<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $page_title ?> | Custom Header</title>

    <?php 
    /**
     * This will render any CSS added into theme on the fly,
     * You can directly load common css before call renderCSS();
    */
    StieTotalWin\Themes\Themes::renderCSS();
    ?>
</head>
<body>