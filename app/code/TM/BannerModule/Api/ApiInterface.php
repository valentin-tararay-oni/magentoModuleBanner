<?php

namespace TM\BannerModule\Api;


/**
 *@api
 */
interface ApiInterface
{
    /**
     * Returns data by id
     *
     * @param int $num
     * @return \TM\BannerModule\Api\ApiInterface
     * @throws \Magento\Framework\Exeption\NoSuchEntityException
     */
    public function getById($num);

    /**
     * Returns all data
     *
     *
     * @return \TM\BannerModule\Api\ApiInterface[]
     */
    public function getData();

    /**
     * Delete item by id
     *
     *@param int $num
     * @return void
     */
    public function deleteItem(int $num);

    /**
     * Set popup text elements
     *
     *@param \TM\BannerModule\Api\ApiInterface[]
     * @return void
     */
    /*public function setPopupText(array $elements);*/

    /**
     * Set popup text elements
     *
     * @api
     * @param string $cust_id
     * @return \Magento\Customer\Api\Data\CustomerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
   /* public function getUserById($cust_id);*/
}
