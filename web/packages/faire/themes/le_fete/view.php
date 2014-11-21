<?php
    if( !($this->controller instanceof FairePageController) ){
        $pageController = new FairePageController;
        $pageController->attachThemeAssets( $this->controller );
    }
?>
<!DOCTYPE HTML>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head_tag', FairePackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $bodyClass; ?>">
    <div id="level-1">
        <?php Loader::packageElement('theme/nav', FairePackage::PACKAGE_HANDLE); ?>
        <div id="level-2">
            <main class="page-body">
                <?php echo $innerContent; ?>

                <?php Loader::packageElement('theme/footer', FairePackage::PACKAGE_HANDLE); ?>
            </main>
        </div>
    </div>

<?php Loader::element('footer_required'); // REQUIRED BY C5 // ?>
</body>
</html>