<?php
namespace TM\BannerModule\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    protected $date;

    public function __construct(
        \Magento\Framework\Stdlib\DateTime\DateTime $date
    ) {
        $this->date = $date;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $dataNewsRows = [
            [   'id' =>1,
                'name' => 'Banner 1',
                'image' => null,
                'one_show' => true,
                'date_from' => $this->date->date(),
                'date_to' => $this->date->date(),
                'text_on_banner'=> 'test text on banner',
                'text_on_popup' => 'test text on popup'
            ],
            [   'id' => 2,
                'name' => 'Banner 2',
                'image' => null,
                'one_show' => false,
                'date_from' => $this->date->date(),
                'date_to' => $this->date->date(),
                'text_on_banner'=> 'test text on banner 2',
                'text_on_popup' => 'test text on popup 2'
            ]
        ];

        foreach($dataNewsRows as $data) {
            $setup->getConnection()->insert($setup->getTable('tm_module_banner_table'), $data);
        }
    }
}
