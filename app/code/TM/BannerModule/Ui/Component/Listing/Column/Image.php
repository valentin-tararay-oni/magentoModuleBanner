<?php

namespace TM\BannerModule\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;

class Image extends \Magento\Ui\Component\Listing\Columns\Column
{
    /**
     * Url path
     */
    const URL_PATH_EDIT = 'tm_banner_module/banner/edit';

    /**
     * @var \TM\BannerModule\Model\Banner
     */
    protected $banner;

    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param \TM\BannerModule\Model\Banner $banner
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        \TM\BannerModule\Model\Banner $banner,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->urlBuilder = $urlBuilder;
        $this->banner = $banner;
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            $fieldName = $this->getData('name');
            foreach ($dataSource['data']['items'] as & $item) {
                $banner = new \Magento\Framework\DataObject($item);
                $item[$fieldName . '_src'] = $this->banner->getImageUrl($banner['image']);
                $item[$fieldName . '_orig_src'] = $this->banner->getImageUrl($banner['image']);
                $item[$fieldName . '_link'] = $this->urlBuilder->getUrl(
                    self::URL_PATH_EDIT,
                    ['id' => $banner['id']]
                );
                $item[$fieldName . '_alt'] = $banner['name'];
            }
        }
        return $dataSource;
    }
}
