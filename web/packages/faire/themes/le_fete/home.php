<!DOCTYPE HTML>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head_tag', FairePackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $bodyClass; ?>">
    <div id="level-1">
        <?php Loader::packageElement('theme/nav', FairePackage::PACKAGE_HANDLE); ?>
        <div id="level-2">
            <main class="page-body">

                <section id="pg-origin" class="welcome">
                    <div class="mast-slide" data-delay="4200" data-speed="0.65" data-fade>
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
                        <div class="container-fluid p-75">
                            <!--<h1>Limoux: Birthplace of Faire La F&ecirc;te</h1>
                            <p>Faire la Fête ¬ to create a party – originates in the village of Limoux where the world’s longest running annual carnival celebration allows revelers to dance, sing, celebrate and enjoy an endless flow of sparkling wine. Faire la Fête brings new relevance to sparkling wine for a generation seeking authenticity from every experience. </p>-->
                            <?php $a = new Area('Main 1'); $a->display($c); ?>
                        </div>
                    </div>
                </section>

                <section class="explore">
                    <!-- stuff in here -->
                </section>

                <section id="pg-cellar" class="cellar tabular">
                    <div class="cellular">
                        <div class="products">
                            <div class="container-fluid product-desc m-1020">
                                <h2 class="subheader">Cellar</h2>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Picture 1'); $a->display($c); ?>
                                        <!--<img src="<?php echo FAIRE_IMAGE_PATH; ?>bottle_closeup.jpg" />-->
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Product Description</h3>
                                        <h4>Taste</h4>
                                        <?php $a = new Area('Product Taste 1'); $a->display($c); ?>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Pairing</h4>
                                        <?php $a = new Area('Product Pairing 1'); $a->display($c); ?>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid product-desc m-1020">
                                <h2 class="subheader">Cellar</h2>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Picture 2'); $a->display($c); ?>
                                        <!--<img src="<?php echo FAIRE_IMAGE_PATH; ?>bottle_closeup.jpg" />-->
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Production Technique</h3>
                                        <?php $a = new Area('Product Taste 2'); $a->display($c); ?>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
                                    </div>
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Pairing 2'); $a->display($c); ?>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid product-desc m-1020">
                                <h2 class="subheader">Cellar</h2>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Picture 3'); $a->display($c); ?>
                                        <!--<img src="<?php echo FAIRE_IMAGE_PATH; ?>bottle_closeup.jpg" />-->
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Unrivaled Quality</h3>
                                        <?php $a = new Area('Product Taste 3'); $a->display($c); ?>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
                                    </div>
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Pairing 3'); $a->display($c); ?>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid markers">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <a class="active"><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></a>
                                    <a><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></a>
                                    <a><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i></a>
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

                <!--<section class="experience">
                    <div class="container">
                        <h2 class="subheader">Experience</h2>
                        <div class="row">
                            <div class="col-sm-12 grid">
                                <div class="node purchase">
                                    <div class="tabular">
                                        <div class="cellular">
                                            <h3>Purchase</h3>
                                        </div>
                                    </div>
                                    <div class="tabular hoverd">
                                        <div class="cellular">
                                            <h3><span>Purchase</span></h3>
                                            <p>We ship anywhere in the U.S.<br/>Currently on shelves in Colorado and California.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="node recipes">
                                    <div class="tabular">
                                        <div class="cellular">
                                            <h3>Recipes</h3>
                                        </div>
                                    </div>
                                    <div class="tabular hoverd">
                                        <div class="cellular">
                                            <h3><span>Recipes</span></h3>
                                            <p>Pair food with our sparkling wine like a pro.<br/>Explore our top recipes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="node press">
                                    <div class="tabular">
                                        <div class="cellular">
                                            <h3>Press</h3>
                                        </div>
                                    </div>
                                    <div class="tabular hoverd">
                                        <div class="cellular">
                                            <h3><span>Press</span></h3>
                                            <p>We do not stand still.<br/>See what we have been up to.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="node events">
                                    <div class="tabular">
                                        <div class="cellular">
                                            <h3>Press</h3>
                                        </div>
                                    </div>
                                    <div class="tabular hoverd">
                                        <div class="cellular">
                                            <h3><span>Events</span></h3>
                                            <p>Join the party.<br/>Checkout our scheduled events.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->

                <section id="pg-contact" class="contact tabular">
                    <div class="cellular">
                        <div class="container-fluid m-800">
                            <h2 class="subheader">Contact</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Interested in distributing, selling, or purchasing Faire la F&ecirc;te? Visit <a>Curious Cork</a> or give us a shout below.</p>
                                </div>
                            </div>
                            <form class="contact-form" action="<?php echo FAIRE_TOOLS_PATH; ?>contact_form">
                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <input type="text" name="name" class="form-control input-lg" placeholder="Your Name" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="text" name="email" class="form-control input-lg" placeholder="Your Email" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <textarea rows="4" name="message" class="form-control input-lg" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-info btn-lg btn-block">Send</button>
                            </form>
                        </div>
                    </div>
                </section>

                <?php Loader::packageElement('theme/footer', FairePackage::PACKAGE_HANDLE); ?>
            </main>
        </div>
    </div>

<?php Loader::element('footer_required'); // REQUIRED BY C5 // ?>
</body>
</html>