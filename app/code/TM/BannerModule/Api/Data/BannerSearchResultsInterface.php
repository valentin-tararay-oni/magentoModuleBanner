<?php

namespace TM\BannerModule\Api\Data;
use Magento\Framework\Api\SearchResultsInterface;

interface BannerSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \TM\BannerModule\Api\Data\BannerInterface[]
     */
    public function getItems();

    /**
     * @param array \TM\BannerModule\Api\Data\BannerInterface[] $items
     * @return $this
     */
    public function setItems(array $items);

}
