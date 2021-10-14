<?php

namespace TM\BannerModule\Controller\Banner;

namespace TM\BannerModule\Controller\Banner;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Controller\Result\JsonFactory;


class Ajax implements HttpGetActionInterface, HttpPostActionInterface
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @var RequestInterface
     */
    private $request;


    protected $resultJsonFactory;
    /**
     * @param PageFactory $pageFactory
     * @param RequestInterface $request
     */
    public function __construct(PageFactory $pageFactory, RequestInterface $request, JsonFactory $resultJsonFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->request = $request;
        $this->resultJsonFactory = $resultJsonFactory;

    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $resultPage = $this->pageFactory->create();

        $oneshow = $this->request->getParam('oneshow');

        $block = $resultPage->getLayout()
            ->createBlock('TM\BannerModule\Block\Banner')
            ->setTemplate('TM_BannerModule::ajax.phtml')
            ->setData('oneshow',$oneshow)
            ->toHtml();


        $result->setData(['output' => $block]);
        return $result;
    }
}
