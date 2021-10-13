<?php

namespace TM\BannerModule\Model\ResourceModel;

class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('tm_module_banner_table', 'id');
    }
}

