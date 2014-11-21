<!DOCTYPE HTML>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head_tag', FairePackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $bodyClass; ?>">
<div id="level-1">
    <?php Loader::packageElement('theme/nav', FairePackage::PACKAGE_HANDLE); ?>
    <div id="level-2">
        <main class="page-body">

            <section class="welcome">
                <div class="mast-slide" data-delay="3000" data-speed="0.65">
                    <div class="inner">
                        <div class="node tablespread">
                            <div class="tabular">
                                <div class="cellular">
                                    <img src="<?php echo FAIRE_IMAGE_PATH; ?>cantstopwontstop.png" />
                                </div>
                            </div>
                        </div>
                        <div class="node poolparty">
                            <div class="tabular">
                                <div class="cellular">
                                    <img src="<?php echo FAIRE_IMAGE_PATH; ?>cantstopwontstop.png" />
                                </div>
                            </div>
                        </div>
                        <div class="node winepour">
                            <div class="tabular">
                                <div class="cellular">
                                    <img src="<?php echo FAIRE_IMAGE_PATH; ?>cantstopwontstop.png" />
                                </div>
                            </div>
                        </div>
                        <div class="node smilingbro">
                            <div class="tabular">
                                <div class="cellular">
                                    <img src="<?php echo FAIRE_IMAGE_PATH; ?>cantstopwontstop.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tagline tabular">
                        <div class="cellular">
                            <img src="<?php echo FAIRE_IMAGE_PATH; ?>cantstopwontstop.png" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="history tabular">
                <div class="cellular">
                    <div class="percent-width p-75">
                        <h1>Limoux: Birthplace of Faire Le Fete</h1>
                        <p>Faire la Fête ¬ to create a party – originates in the village of Limoux where the world’s longest running annual carnival celebration allows revelers to dance, sing, celebrate and enjoy an endless flow of sparkling wine. Faire la Fête brings new relevance to sparkling wine for a generation seeking authenticity from every experience. </p>
                    </div>
                </div>
            </section>

            <section class="explore">
                <!-- stuff in here -->
            </section>

            <section class="cellar tabular">
                <div class="cellular">
                    <div class="percent-width p-75">
                        <h2>Cellar</h2>
                        <img src="<?php echo FAIRE_IMAGE_PATH; ?>divider.png" />
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="<?php echo FAIRE_IMAGE_PATH; ?>bottle_closeup.jpg" />
                            </div>
                            <div class="col-sm-4">
                                <h3>Product Description</h3>
                                <h4>Taste</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="col-sm-4">
                                <h4>Pairing</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cellar-bottom tabular">
                <div class="cellular">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4>Style</h4>
                                <p>Cremant De Lemauex</p>
                            </div>
                            <div class="col-sm-4">
                                <h4>Blend</h4>
                                <p>Chardonnay, Chenin Blanc, and Pinot Noir</p>
                            </div>
                            <div class="col-sm-4">
                                <h4>Alcohol/Volume</h4>
                                <p>12%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="experience">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Experience</h2>
                            <img src="<?php echo FAIRE_IMAGE_PATH; ?>divider.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 grid">
                            <div class="node purchase">

                            </div>
                            <div class="node recipes">

                            </div>
                            <div class="node press">

                            </div>
                            <div class="node events">

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
    <?php Loader::packageElement('theme/footer', FairePackage::PACKAGE_HANDLE); ?>
</div>
<?php Loader::element('footer_required'); // REQUIRED BY C5 // ?>
</body>
</html>