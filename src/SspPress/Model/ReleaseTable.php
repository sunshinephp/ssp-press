<?php

namespace SspPress\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;

class ReleaseTable
{
    protected $tableGateway;
    
    public function __construct(Adapter $adapter)
    {
        $this->tableGateway = new TableGateway('releases', $adapter);
    }
    
    public function findAll()
    {
        $rows = $this->tableGateway->select();
        return $rows->toArray();
    }
}
