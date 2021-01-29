<?php
namespace GDW\AddCodeStore\Plugin;

use Magento\Framework\Event\Observer;
use Magento\Framework\View\Page\Config;
use GDW\AddCodeStore\Helper\Data as Helper;
use Magento\Framework\Event\ObserverInterface;
use Magento\Store\Model\StoreManagerInterface;

class StoreCodeBodyClassPlugin implements ObserverInterface
{
    protected $config;
    protected $_helper;
    protected $storeManager;

    public function __construct(
        Config $config,
        Helper $helper,
        StoreManagerInterface $storeManager
    ){
        $this->config = $config;
        $this->_helper = $helper;
        $this->storeManager = $storeManager;
    }

    public function execute(Observer $observer){
        if($this->_helper->getVal('general','enable') == true){
            $store = $this->storeManager->getStore();
            $storeCode = $store->getCode();
            $websiteCode = $store->getWebsite()->getCode();
            $newclass = $storeCode.' '.$websiteCode;
            $this->config->addBodyClass($newclass);
            if($this->_helper->getVal('general','custom_class') != ''){
                $this->config->addBodyClass($this->_helper->getVal('general','custom_class'));
            }
        }
    }
}