<?php


// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class FacbiosViewDetails extends JViewLegacy
{
	function display($tpl = null)
	{
		
		// Get data from the model
		
		$this->facbio = $this->get('Facbio');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}
 
		// Display the template
		parent::display($tpl);
	}
}