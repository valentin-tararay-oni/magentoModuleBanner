<?php

namespace TM\BannerModule\Setup;

use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class Unistall implements UninstallInterface
{
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement uninstall() method.
        $setup->getConnection()->dropTable($setup->getTable('tm_module_banner_table'));
    }
}
