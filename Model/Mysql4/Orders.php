<?php

class Intelipost_Basic_Model_Mysql4_Orders
extends Mage_Core_Model_Mysql4_Abstract
{

protected function _construct()
{
    $this->_init("basic/orders", "id");
}

}

