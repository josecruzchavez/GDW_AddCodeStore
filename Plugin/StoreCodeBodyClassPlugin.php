<?php
namespace GDW\AddCodeStore\Plugin;

use Magento\Framework\Event\Observer;
use Magento\Framework\View\Page\Config;
use GDW\AddCodeStore\Helper\Data as Helper;
use Magento\Framework\Event\ObserverInterface;
use Magento\Store\Model\StoreManagerInterface;

class StoreCodeBodyClassPlugin implements ObserverInterface
{
    protected Config $config;
    protected Helper $helper;
    protected StoreManagerInterface $storeManager;

    public function __construct(
        Config $config,
        Helper $helper,
        StoreManagerInterface $storeManager
    ){
        $this->config = $config;
        $this->helper = $helper;
        $this->storeManager = $storeManager;
    }

    public function execute(Observer $observer)
    {
        if ($this->helper->isEnabled()) {
            $store = $this->storeManager->getStore();
            $storeCode = $store->getCode();
            $websiteCode = $this->storeManager->getWebsite($store->getWebsiteId())->getCode();
            $newclass = $storeCode . ' ' . $websiteCode;
            $this->config->addBodyClass($newclass);

            $customClass = $this->helper->getCustomClass();
            if ($customClass !== '') {
                $this->config->addBodyClass($customClass);
            }
        }
    }
}