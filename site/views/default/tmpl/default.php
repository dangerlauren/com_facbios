<?php defined('_JEXEC') or die('Restricted access'); ?>


<div id="facbios">
<h1>Senior Design Projects</h1>
<div class="sdprojectslist">

<?php 
foreach($this->items as $row):
?>

<div class="sdp">
	<p class="sdp-title"><a href="<?php echo JRoute::_('index.php?option=com_sdprojects&view=details&id='.$row->id); ?>"><?php echo $row->title ?></a><!-- <?php echo $row->id ?> --></p>
	<p class="sdpstudents"><?php echo $row->students ?></p>
	<p class="sdpsemester"><?php echo $row->semester ?> <?php echo $row->year ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="pagination">
<p class="counter"><?php echo $this->pagination->getPagesCounter(); ?></p>
<?php echo $this->pagination->getPagesLinks(); ?>
</div>
</div>

