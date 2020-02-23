<?php


namespace Training\Test\Controller;


class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->getResponse()->appendBody('simple text');
    }
}
