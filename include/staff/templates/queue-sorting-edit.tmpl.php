<?php
/**
 * Calling conventions
 *
 * $column - <QueueColumn> instance for this column
 */
$sortid = $sort->getId();
?>
<h3 class="drag-handle"><?php echo __('Manage Sort Options'); ?> &mdash;
    <?php echo $sort->get('name') ?></h3>
<a class="close" href=""><i class="icon-remove-circle"></i></a>
<hr/>

<form method="post" action="#tickets/search/sort/edit/<?php
    echo $sortid; ?>">

<?php
include 'queue-sorting.tmpl.php';
?>

<hr>
<p class="full-width">
    <span class="buttons pull-left">
        <input type="reset" value="<?php echo __('Reset'); ?>">
        <input type="button" value="<?php echo __('Cancel'); ?>" class="close">
    </span>
    <span class="buttons pull-right">
        <input type="submit" value="<?php echo __('Save'); ?>">
    </span>
 </p>

 </form>
