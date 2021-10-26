<?php

namespace TM\BannerModule\Model;

/**
 * Factory class for @see \TM\BannerModule\Model\Banner
 */
class BannerFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\TM\\BannerModule\\Model\\Banner')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\Cms\Model\Block
     */
    public function create(array $data = [])
    {
        //print_r($this->_objectManager->create($this->_instanceName, $data));die(' 99007');
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
