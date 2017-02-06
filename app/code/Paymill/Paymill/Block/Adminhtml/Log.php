<?php
namespace Paymill\Paymill\Block\Adminhtml;

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
 *         
 */
class Log extends \Magento\Backend\Block\Widget\Grid\Container
{

    /**
     * Construct
     */
    public function _construct ()
    {
        $this->_blockGroup = 'Paymill_Paymill';
        $this->_controller = 'adminhtml_log';
        $this->_headerText = __('paymill_log');
        parent::_construct();
    }

    /**
     *
     * @see Mage_Adminhtml_Block_Widget_Grid_Container::_prepareLayout()
     */
    protected function _prepareLayout ()
    {
        $this->removeButton('add');
        return parent::_prepareLayout();
    }
}
