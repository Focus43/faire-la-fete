<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
/** @var FlexryFileList $fileListObj */
$imageList   = $fileListObj->get();
if( strpos(Page::getCurrentPage()->getCollectionTypeHandle(), 'stack') !== false ){
    echo '<p>Preview Unavailable In Stacks</p>';
}else{ ?>

<div class="custom-slider circular-slide" data-controls=".arrows" data-speed="<?php echo (float)$templateHelper->value('transitionSpeed'); ?>">
    <?php foreach($imageList AS $flexryFile): /** @var FlexryFile $flexryFile */ ?>
        <div class="node">
            <div class="full-image" style="background-image:url(<?php echo $flexryFile->fullImgSrc(); ?>);"></div>
        </div>
    <?php endforeach; ?>
    <!-- nav -->
    <a class="arrows left"><span></span></a>
    <a class="arrows right"><span></span></a>
</div>

<?php } ?>