<?php

namespace TM\BannerModule\Api;



interface BannerRepositoryInterface
{
    /**
     * @param \TM\BannerModule\Api\Data\Bannerinterface $banner
     * @return \TM\BannerModule\Api\Data\BannerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\BannerInterface $banner);

    /**
     * @param string $bannerId
     * @return \TM\BannerModule\Api\Data\BannerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($bannerId);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Cms\Api\Data\BannerSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * @param \Data\Bannerinterface $banner
     * @return bool

     */
    public function delete(Data\BannerInterface $banner);

    /**
     * @param string $bannerId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($bannerId);
}
