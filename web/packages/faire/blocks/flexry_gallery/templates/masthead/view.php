<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
/** @var FlexryFileList $fileListObj */
$imageList   = $fileListObj->get();
if( strpos(Page::getCurrentPage()->getCollectionTypeHandle(), 'stack') !== false ){
    echo '<p>Preview Unavailable In Stacks</p>';
}else{ ?>

<div class="custom-slider fade" data-delay="<?php echo (float)$templateHelper->value('delay') * 1000; ?>" data-speed="<?php echo (float)$templateHelper->value('transitionSpeed'); ?>">
    <?php foreach($imageList AS $flexryFile): /** @var FlexryFile $flexryFile */ ?>
        <div class="node" style="background-image:url(<?php echo $flexryFile->fullImgSrc(); ?>);"></div>
    <?php endforeach; ?>
    <div class="tagline tabular">
        <div class="cellular">
            <img src="<?php echo FAIRE_IMAGE_PATH; ?>cantstopwontstop.png" />
        </div>
    </div>
</div>

<?php } ?>