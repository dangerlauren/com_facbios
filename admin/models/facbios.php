<?php
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class FacbiosModelFacbios extends JModelList
{
	protected function populateState($ordering = null, $direction = null) {
		parent::populateState('lastname', 'DESC');
	}

	public function __construct($config = array()) 
	{
		$config['filter_fields'] = array(
			'lastname',
			'eid',
			'department'
		);
		parent::__construct($config);
	}

	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		
		$query->select(array('a.*'))
		->select($db->quoteName('b.id', 'coid'))
		->select($db->quoteName('b.name', 'coname'))
		->select($db->quoteName('b.url', 'courl'))
				->from($db->quoteName('#__projects', 'a'))
				->join('LEFT', $db->quoteName('#__sponsors', 'b') .' ON (' . $db->quoteName('a.company') . ' = ' . $db->quoteName('b.id') . ')')
				->where($db->quoteName('a.company') . ' = ' . ('b.id'));
 		$query->order($db->escape($this->getState('list.ordering', 'a.year')).' '.
 				$db->escape($this->getState('list.direction', 'DESC')));
 		$query->order('a.title ASC');		
		return $query;

	}

}