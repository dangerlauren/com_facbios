<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php?option=com_facbios&view=facbios" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('#'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'EID', 'eid', $this->sortDirection, $this->sortColumn); ?>
			</th>
			<th width="50%">
				<?php echo JHtml::_('grid.sort', 'Last Name', 'lastname', $this->sortDirection, $this->sortColumn); ?>
			</th>
			<th width="40%">
				<?php echo JHtml::_('grid.sort', 'Department', 'deptid', $this->sortDirection, $this->sortColumn); ?>
			</th>
			<th width="2%">
				<?php echo JHtml::_('grid.sort', 'ID', 'id', $this->sortDirection, $this->sortColumn); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) : 
				$link = JRoute::_('index.php?option=com_facbios&task=facbio.edit&id=' . $row->id);
				?>
 
					<tr>
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
								<?php echo $row->eid; ?>
						</td>
						<td align="center">
								<a href="<?php echo $link ?>"><?php echo $row->lastname; ?></a>
						</td>
						<td align="center">
								<?php echo $row->deptid; ?>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<input type="hidden" name="filter_order" value="<?php echo $this->sortColumn; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->sortDirection; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>