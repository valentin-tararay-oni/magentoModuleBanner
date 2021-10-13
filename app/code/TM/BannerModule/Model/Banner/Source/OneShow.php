<?php
namespace TM\BannerModule\Model\Banner\Source;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class OneShow
 */
class OneShow implements OptionSourceInterface
{
    /**
     * @var TM\BannerModule\Model\Banner
     */
    protected $Banner;

    /**
     * Constructor
     *
     * @param \TM\BannerModule\Model\Banner $Banner
     */
    public function __construct(\TM\BannerModule\Model\Banner $Banner)
    {
        $this->Banner = $Banner;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->Banner->getAvailableStatuses();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
