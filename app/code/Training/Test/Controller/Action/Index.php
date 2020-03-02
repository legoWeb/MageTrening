<?php

namespace Training\Test\Controller\Action;


class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    private $resultRawFactory;

    /**
     * @var \Magento\Framework\View\LayoutFactory
     */
    private $layoutFactory;

    private $resultJsonFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
     * @param \Magento\Framework\View\LayoutFactory $layoutFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory,
        \Magento\Framework\View\LayoutFactory $layoutFactory,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory

    ) {
        parent::__construct($context);
        $this->resultRawFactory = $resultRawFactory;
        $this->layoutFactory = $layoutFactory;
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        $layout = $this->layoutFactory->create();
//        $block = $layout->createBlock(\Training\Test\Block\Test::class);
        $block = $layout->createBlock(\Magento\Framework\View\Element\Template::class, 'test_action_index');
        $block->setTemplate('Training_Test::test.phtml');
        $html = $block->toHtml();
        return $this->resultJsonFactory->create()->setData(['html' => $html]);

//        $resultRaw = $this->resultRawFactory->create();
//        return $resultRaw->setContents($block->toHtml());

    }
}
