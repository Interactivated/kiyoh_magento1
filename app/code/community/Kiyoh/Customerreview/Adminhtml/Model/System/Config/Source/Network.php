<?php
/**
 * My own options
 *
 */
class Kiyoh_Customerreview_Adminhtml_Model_System_Config_Source_Network
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'kiyoh', 'label'=>Mage::helper('adminhtml')->__('Kiyoh')),
            array('value' => 'klantenvertellen', 'label'=>Mage::helper('adminhtml')->__('Klantenvertellen')),
        );
    }

}