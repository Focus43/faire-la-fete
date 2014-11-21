<a class="logo" href="/"><img src="<?php echo FAIRE_IMAGE_PATH; ?>logo.png" /></a>

<div class="tabular">
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
                    <?php echo $formHelper->select('countries', $countries, 'US', array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-inline">
                <div class="col-sm-6 col-sm-offset-3">
                    <select name="month" class="form-control">
                        <option>Month</option>
                        <?php foreach(range(1,12) as $month): ?>
                            <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select name="day" class="form-control">
                        <option>Day</option>
                        <?php foreach(range(1,31) as $day): ?>
                            <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select name="year" class="form-control">
                        <option>Year</option>
                        <?php $y = (int)date('Y'); foreach(range($y-21,$y-100) as $year): ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row remember">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="checkbox"> Remember Me For Future Browsing
                </div>
            </div>
            <div class="row remember">
                <div class="col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-default">Send</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3>We make our wine carefully. Please enjoy it that way too.</h3>
                    <p>Please choose your country and enter your date of birth.</p>
                </div>
            </div>
            <input type="hidden" name="fwd_to" value="<?php echo $fwdUrl; ?>" />
        </form>
    </div>
</div>