<?php
namespace ZfcDatagrid\Column;

/**
 * Action Column
 * IMPORTANT: Will only be shown on HTML renderer
 * 
 * So Attributes for HTML are valid...
 *
 */
class Action extends AbstractColumn
{

    private $actions = array();

    public function __construct ($uniqueId = 'action')
    {
        $this->setUniqueId($uniqueId);
        $this->setLabel('Actions');
        
        $this->setUserSortDisabled(true);
        $this->setUserFilterDisabled(true);
        
        $this->setRowClickDisabled(true);
    }

    public function addAction (Action\AbstractAction $action)
    {
        $this->actions[] = $action;
    }

    /**
     *
     * @return array
     */
    public function getActions ()
    {
        return $this->actions;
    }
}
