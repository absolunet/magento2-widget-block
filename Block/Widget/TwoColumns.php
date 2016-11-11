<?php

namespace Absolunet\WidgetBlock\Block\Widget;

class TwoColumns extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('widget/two-columns.phtml');
    }
}
