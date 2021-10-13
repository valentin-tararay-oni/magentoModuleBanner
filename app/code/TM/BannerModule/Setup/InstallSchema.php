<?php
namespace TM\BannerModule\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;
use Magento\Framework\DB\Ddl\Table;
class InstallSchema implements InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $tableName = $installer->getTable('tm_module_banner_table');

        if ($installer->getConnection()->isTableExists($tableName) != true) {
            /**
             * Create table 'tm_module_banner_table'
             */
            $table = $installer->getConnection()->newTable(
                $tableName
            )->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true],
                'Banner ID'
            )->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Banner Name'
            )->addColumn(
                'image',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Banner Image'
            )->addColumn(
                'one_show',
                \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
                null,
                ['nullable' => true, 'default' => false],
                'Banner Show'
            )->addColumn(
                'date_from',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                'Banner date from'
            )->addColumn(
                'date_to',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                'Banner date_to'
            )->addColumn(
                'text_on_banner',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                500,
                ['nullable' => true],
                'Banner Text'
            )->addColumn(
                'text_on_popup',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                500,
                ['nullable' => true],
                'Banner Text Popup'
            )->setComment(
                'Banners Table'
            );
            $installer->getConnection()->createTable($table);


        }
    }
}
