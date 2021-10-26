<?php

namespace TM\BannerModule\Api\Data;



interface BannerInterface
{
    const ID = 'id';
    const NAME = 'name';
    const IMAGE = 'image';
    const TEXT_ON_BANNER = 'text_on_banner';
    const TEXT_ON_POPUP = 'text_on_popup';
    const DATE_FROM = 'date_from';
    const DATE_TO = 'date_to';
    const ONE_SHOW = 'one_show';

    /**
     * @return int|null
     */
    public function getId();

    /**
     * @return string|null
     */
    public function getName();

    /**
     * @return string|null
     */
    public function getImage();

    /**
     * @return string|null
     */
    public function getTextOnBanner();

    /**
     * @return string|null
     */
    public function getTextOnPopup();

    /**
     * @return string|null
     */
    public function getDateFrom();

    /**
     * @return string|null
     */
    public function getDateTo();

    /**
     * @return bool|null
     */
    public function oneShow();

    /**
     * @param $id
     * @return BannerInterface
     */
    public function setId($id);

    /**
     * @param string $name
     * @return BannerInterface
     */
    public function setName($name);

    /**
     * @param string $url
     * @return BannerInterface
     */
    public function setImage($url);

    /**
     * @param string $text
     * @return BannerInterface
     */
    public function setTextOnBanner($text);

    /**
     * @param string $text
     * @return BannerInterface
     */
    public function setTextOnPopup($text);

    /**
     * @param string $date_from
     * @return BannerInterface
     */
    public function setDateFrom($date_from);

    /**
     * @param string $date_to
     * @return BannerInterface
     */
    public function setDateTo($date_to);

    /**
     * @param bool|int $one_show
     * @return BannerInterface
     */
    public function setOneShow($one_show);
}
