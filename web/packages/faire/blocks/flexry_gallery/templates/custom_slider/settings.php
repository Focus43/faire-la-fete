<?php defined('C5_EXECUTE') or die("Access Denied.");
$templateHelper; /** @var BlockTemplateHelper $templateHelper */
$formHelper = Loader::helper('form'); /** @var FormHelper $formHelper */
?>

<style type="text/css">
    .table input {height:auto;}
</style>

<p><strong>Note:</strong> Lightboxes are not supported by this template, even if enabled in the <i>Settings</i> tab.</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="2">Settings</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Transition Speed (in seconds; e.g. 0.65)</td>
            <td><?php echo $formHelper->text($templateHelper->field('transitionSpeed'), FlexryBlockTemplateOptions::valueOrDefault($templateHelper->value('transitionSpeed'), '0.65')); ?></td>
        </tr>
    </tbody>
</table>