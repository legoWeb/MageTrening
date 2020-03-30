<?php

namespace Training\Test\Controller\Block;

/**
 * Class Index
 * @package Training\Test\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\View\LayoutFactory
     */
    private $layoutFactory;

    private $rawFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\LayoutFactory $layoutFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\LayoutFactory $layoutFactory,
        \Magento\Framework\Controller\Result\RawFactory $rawFactory
    ) {
        parent::__construct($context);
        $this->layoutFactory = $layoutFactory;
        $this->rawFactory = $rawFactory;
    }

    public function execute()
    {
        #1
/**        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock('Training\Test\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
        return $layout->generateXml()->generateElements();
**/

        #2
        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock('Training\Test\Block\Test::class');
        $raw = $this->rawFactory->create()->setContents($block->toHtml());
        return $raw;
    }
}
