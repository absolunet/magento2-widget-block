<?php

namespace Absolunet\WidgetBlock\Model\Plugin\Adminhtml\Wysiwyg\Images;

use\Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content as MageContent;

class Content
{
    public function afterGetOnInsertUrl(MageContent $subject, $result)
    {
        if (strpos($subject->getRequest()->getParam("target_element_id"), "image") !== 0) {
            return $subject->getUrl('cms/*/onInsert', array("is_widget"=>true));
        }
        
        return $subject->getUrl('cms/*/onInsert');
    }
}