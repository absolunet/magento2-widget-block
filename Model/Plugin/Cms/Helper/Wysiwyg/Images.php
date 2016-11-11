<?php

namespace Absolunet\WidgetBlock\Model\Plugin\Cms\Helper\Wysiwyg;

use \Magento\Framework\App\ObjectManager as ObjectManager;

class Images
{
    protected $_logger;
    
    public function __construct(
        \Psr\Log\LoggerInterface $logger, //log injection
        array $data = []
    ) {
        $this->_logger = $logger;
    }
    
    public function aroundGetImageHtmlDeclaration($subject, $proceed, $filename, $renderAsTag = false)
    {
        
        $returnValue = $proceed($filename, $renderAsTag);
        $fileurl = $subject->getCurrentUrl() . $filename;
        $objectManager = ObjectManager::getInstance();
        $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
        
        $mediaUrl = $storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $mediaPath = str_replace($mediaUrl, '', $fileurl);
        
        $request = $objectManager->get("\Magento\Framework\App\Request\Http");
        
        if ($request->getParam("is_widget") == 1) {
            return $mediaPath;
        }
        
        return $returnValue;

    }
}