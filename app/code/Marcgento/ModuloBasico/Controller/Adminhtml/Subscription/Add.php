<?php


namespace Marcgento\ModuloBasico\Controller\Adminhtml\Subscription;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Add extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param \Marcgento\ModuloBasico\Model\Subscription $subscriptionFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ){
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Agregar Nuevo Registro'));
        return $resultPage;
    }
}