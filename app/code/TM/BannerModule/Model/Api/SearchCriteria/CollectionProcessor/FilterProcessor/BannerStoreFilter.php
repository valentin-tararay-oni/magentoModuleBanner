<?php

namespace TM\BannerModule\Model\Api\SearchCriteria\CollectionProcessor\FilterProcessor;

use Magento\Framework\Api\Filter;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor\FilterProcessor\CustomFilterInterface;
use Magento\Framework\Data\Collection\AbstractDb;

class BannerStoreFilter implements CustomFilterInterface
{
    public function apply(Filter $filter, AbstractDb $collection)
    {
        /** @var \TM\BannerModule\Model\ResourceModel\Banner\Collection $collection */
        $collection->addStoreFilter($filter->getValue(), false);

        return true;
    }
}
