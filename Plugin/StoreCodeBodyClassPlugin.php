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
    protected $helper;
    protected $storeManager;

    public function __construct(
        Config $config,
        Helper $helper,
        StoreManagerInterface $storeManager
    ){
        $this->config = $config;
        $this->helper = $helper;
        $this->storeManager = $storeManager;
    }

    public function execute(Observer $observer){
        if($this->helper->getDirectVal('enable') == true){
            $store = $this->storeManager->getStore();
            $storeCode = $store->getCode();
            $websiteCode = $store->getWebsite()->getCode();
            $newclass = $storeCode.' '.$websiteCode;
            $this->config->addBodyClass($newclass);
            if($this->helper->getDirectVal('custom_class') != ''){
                $this->config->addBodyClass($this->helper->getDirectVal('custom_class'));
            }
        }
    }
}