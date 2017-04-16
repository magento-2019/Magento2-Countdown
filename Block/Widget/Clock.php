<?php
namespace Ethangrant\Flipclock\Block\Widget;

class Clock extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('widget/clock.phtml');
    }
}