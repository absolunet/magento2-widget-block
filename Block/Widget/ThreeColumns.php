<?php

namespace Absolunet\WidgetBlock\Block\Widget;

class ThreeColumns extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('widget/three-columns.phtml');
    }
}
