<?php
 
namespace Emipro\Custompayment\Model;

class PaymentMethod extends \Magento\Payment\Model\Method\AbstractMethod
{
 
    /**
     * Payment code
     *
     * @var string
     */
    
    protected $_code = 'custompayment';
    
    protected $_scopeConfig
    
    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig) {
        $this->_scopeConfig = $scopeConfig;
    }
}
