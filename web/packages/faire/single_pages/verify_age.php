<a class="logo" href="/"><img src="<?php echo FAIRE_IMAGE_PATH; ?>logo.png" /></a>

<div id="verify-age-page" class="tabular">
    <div class="cellular">
        <form id="agify" method="post" action="<?php echo $this->action('verify'); ?>">
            <?php if($underage): ?>
                <div class="underage">You are too young to enter the site.</div>
            <?php endif; ?>
            <div class="row">
                <div class="col-sm-12">
                    <h1>Are You Of Legal Drinking Age?</h1>
                    <p>Please choose your country and enter your date of birth.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="select-menus">
                        <div class="list-wrap arrow">
                            <?php echo $formHelper->select('country', $countryList, 'US', array('class' => 'form-control')); ?>
                        </div>
                        <div class="lists-inline">
                            <div class="inner">
                                <div class="list-wrap">
                                    <?php echo $formHelper->select('month', $monthList, '', array('class' => 'form-control')); ?>
                                </div>
                                <div class="list-wrap">
                                    <?php echo $formHelper->select('day', $dayList, '', array('class' => 'form-control')); ?>
                                </div>
                                <div class="list-wrap">
                                    <?php echo $formHelper->select('year', $yearList, '', array('class' => 'form-control')); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row remember">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="checkbox"> Remember Me For Future Browsing
                </div>
            </div>
            <div class="row remember">
                <div class="col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-default">Join The Party</button>
                </div>
            </div>
            <div class="row page-copy">
                <div class="col-sm-12">
                    <?php $a = new Area('Main'); $a->display($c); ?>
                </div>
            </div>
            <input type="hidden" name="fwd_to" value="<?php echo $fwdUrl; ?>" />
        </form>
    </div>
</div>