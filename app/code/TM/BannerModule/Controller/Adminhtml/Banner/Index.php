<?php
 namespace TM\BannerModule\Controller\Adminhtml\Banner;
class Index extends \Magento\Backend\App\Action
{
/**
* Authorization level of a basic admin session
*
* @see _isAllowed()
*/
const ADMIN_RESOURCE = 'TM_BannerModule::banners_list';

/**
* @var \Magento\Framework\View\Result\PageFactory
*/
protected $resultPageFactory;

/**
* @param \Magento\Backend\App\Action\Context $context
* @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
*/
public function __construct(
\Magento\Backend\App\Action\Context $context,
\Magento\Framework\View\Result\PageFactory $resultPageFactory
)
{
$this->resultPageFactory = $resultPageFactory;
parent::__construct($context);
}

/**
* Index action
*
* @return \Magento\Framework\Controller\ResultInterface
*/
public function execute()
{
/** @var \Magento\Backend\Model\View\Result\Page $resultPage */
$resultPage = $this->resultPageFactory->create();
$resultPage->setActiveMenu('TM_BannerModule::banners_list')
->addBreadcrumb(
__('Banners-List '), __('Banners-List')
)->getConfig()->getTitle()->prepend(__('All Banners'));

return $resultPage;
}
}
