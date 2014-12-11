<!DOCTYPE HTML>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head_tag', FairePackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $bodyClass; ?>">
    <div id="level-1">
        <?php Loader::packageElement('theme/nav', FairePackage::PACKAGE_HANDLE); ?>
        <div id="level-2">
            <main class="page-body">

                <section class="welcome">
                    <?php
                        $stackObj = Stack::getByName(FairePackage::STACK_NAME_MASTHEAD); /** @var Stack $stackObj */
                        if( $stackObj ){
                            $stackObj->display();
                        }
                    ?>
                </section>

                <section id="pg-origin" class="history tabular">
                    <div class="cellular">
                        <div class="container-fluid p-75">
                            <?php $a = new Area('Main 1'); $a->display($c); ?>
                        </div>
                    </div>
                </section>

                <section class="explore">
                    <?php $a = new Area('Explore'); $a->display($c); ?>
                </section>

                <section id="pg-cellar" class="cellar tabular">
                    <div class="cellular">
                        <div class="products">
                            <div class="container-fluid product-desc m-1020">
                                <h2 class="subheader">Cellar</h2>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Picture 1'); $a->display($c); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Product Description</h3>
                                        <h4>Taste</h4>
                                        <?php $a = new Area('Product Taste 1'); $a->display($c); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Pairing</h4>
                                        <?php $a = new Area('Product Pairing 1'); $a->display($c); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid product-desc m-1020">
                                <h2 class="subheader">Cellar</h2>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Picture 2'); $a->display($c); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Production Technique</h3>
                                        <?php $a = new Area('Product Taste 2'); $a->display($c); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Pairing 2'); $a->display($c); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid product-desc m-1020">
                                <h2 class="subheader">Cellar</h2>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Picture 3'); $a->display($c); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Unrivaled Quality</h3>
                                        <?php $a = new Area('Product Taste 3'); $a->display($c); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php $a = new Area('Product Pairing 3'); $a->display($c); ?>
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
                                    <?php $a = new Area('Product Details 1'); $a->display($c); ?>
                                </div>
                                <div class="col-sm-4">
                                    <?php $a = new Area('Product Details 2'); $a->display($c); ?>
                                </div>
                                <div class="col-sm-4">
                                    <?php $a = new Area('Product Details 3'); $a->display($c); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="experience">
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
                </section>

                <section id="pg-contact" class="contact tabular">
                    <div class="cellular">
                        <div class="container-fluid m-800">
                            <h2 class="subheader">Contact</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php $a = new Area('Contact'); $a->display($c); ?>
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