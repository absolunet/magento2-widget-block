<?php

namespace Absolunet\WidgetBlock\Framework\Data\Form\Element;

class Editor extends \Magento\Framework\Data\Form\Element\Editor
{
    /**
     * Prepare Html buttons for additional WYSIWYG features
     *
     * @param bool $visible Display button or not
     * @return string
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    protected function _getPluginButtonsHtml($visible = true)
    {
        $buttonsHtml = parent::_getPluginButtonsHtml($visible);

        //CLEAN URL
        $buttonsHtml .= $this->_getButtonHtml(
            [
                'title' => $this->translate('Clean Url...'),
                'class' => 'action-add-image plugin',
                'id' => 'clean-url-action',
                'style' => $visible ? '' : 'display:none'
            ]
        );
        
        return $buttonsHtml;
    }
}