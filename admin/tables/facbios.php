<?php

// No direct access
defined('_JEXEC') or die('Restricted access');
 
class FacbiosTableFacbios extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__facbios_faculty', 'id', $db);
	}
}