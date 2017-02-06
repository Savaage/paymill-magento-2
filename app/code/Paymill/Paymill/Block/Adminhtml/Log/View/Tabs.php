<?php
namespace Paymill\Paymill\Block\Adminhtml\Log\View;

/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category Paymill
 * @package Paymill_Paymill
 * @copyright Copyright (c) 2013 PAYMILL GmbH (https://paymill.com/en-gb/)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License
 *          (OSL 3.0)
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{

    /**
     * Construct
     */
    public function __construct (
            \Magento\Backend\Block\Template\Context $context, 
            \Magento\Framework\Json\EncoderInterface $jsonEncoder, 
            \Magento\Backend\Model\Auth\Session $authSession, array $data = [])
    {
        parent::__construct($context, $jsonEncoder, $authSession, $data);
    }

    public function _construct ()
    {
        parent::_construct();
        $this->setId('log_view_tabs');
        $this->setDestElementId('log_view');
        $this->setTitle(__('Log Information View'));
    }
}
