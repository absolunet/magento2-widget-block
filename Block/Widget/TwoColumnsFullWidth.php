<?php

namespace Absolunet\WidgetBlock\Block\Widget;

class TwoColumnsFullWidth extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('widget/two-columns-fullwidth.phtml');
    }
}
?>