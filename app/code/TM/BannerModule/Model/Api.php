<?php

namespace TM\BannerModule\Model;

use TM\BannerModule\Api\ApiInterface;
use Magento\Customer\Model\Customer;

class Api implements ApiInterface
{

    private $objectManager;
    private $resource;
    private $connection;
    private $table;
    private $customerRegistry;

    public function __construct(Customer $customerRegistry){
        $this->objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $this->resource = $this-> objectManager->get('Magento\Framework\App\ResourceConnection');
        $this->connection = $this->resource->getConnection();
        $this->table = $this->connection ->getTableName('tm_module_banner_table');
        $this->customerRegistry = $customerRegistry;
    }

    public function getById($id)
    {
       $select = $this->connection->select()->from($this->table)->where("id = $id");
       return $this->connection->fetchAll($select);
    }
    public function getData(){
        $select = $this->connection->select()->from($this->table);
        return $this->connection->fetchAll($select);
    }
    public function deleteItem($id){
        $this->connection->delete($this->table,["id = $id"]);
        return 'The element with id '.$id.' has been successfully deleted';
    }

}
