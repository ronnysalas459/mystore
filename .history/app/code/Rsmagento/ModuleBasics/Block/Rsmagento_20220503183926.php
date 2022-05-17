<?php


namespace Rsmagento\ModuloBasics\Block;

use Magento\Framework\View\Element\Template;

class Rsmagento extends Template
{
    public function __cosntruct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
}
