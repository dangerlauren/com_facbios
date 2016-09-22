<?php


// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class FacbiosViewFacbios extends JViewLegacy
{
	/**
	 * display method of Hello view
	 * @return void
	 **/
	function display($tpl = null)
	{
		
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
		$state = $this->get('State');

		$this->sortDirection = $state->get('list.direction');
		$this->sortColumn = $state->get('list.ordering');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}
		
		// Set the toolbar
		$this->addToolBar();

 
		// Display the template
		parent::display($tpl);
	}
	
	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		

		JToolBarHelper::title(JText::_('Faculty Bios Manager'));
		JToolBarHelper::addNew('facbio.add');
		JToolBarHelper::editList('facbio.edit');
		JToolBarHelper::deleteList('', 'facbios.delete');
	}
}