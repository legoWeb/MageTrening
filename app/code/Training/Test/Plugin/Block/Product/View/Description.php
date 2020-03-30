<?php


namespace Training\Test\Plugin\Block\Product\View;


class Description
{
    public function beforeToHtml(
        \Magento\Catalog\Block\Product\View\Description $subject
    )
    {
        #3.4
//        $subject->getProduct()->setDescription('Test description');

        #3.7
//        $subject->setTemplate('Training_Test::description.phtml');

        #3.8
        if ($subject->getNameInLayout() !== 'product.info.sku') {
            $subject->setTemplate('Training_Test::description.phtml');
        }
    }
}
