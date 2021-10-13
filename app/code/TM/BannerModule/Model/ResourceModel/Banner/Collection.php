<?php

namespace TM\BannerModule\Model\ResourceModel\Banner;
use TM\BannerModule\Model\Banner as ModelBanner;
use TM\BannerModule\Model\ResourceModel\Banner as ResourceBanner;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ModelBanner::class,
            ResourceBanner::class);

    }
}
