<?php

namespace TM\BannerModule\Block;

use  TM\BannerModule\Model\ResourceModel\Banner\Collection;
class Banner extends \Magento\Framework\View\Element\Template
{
    private $collection;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllBanners() {
        return $this->collection;
    }

}
