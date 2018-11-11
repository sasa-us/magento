<?php
class MasteringMagento_Example_HelloController extends Mage_Core_Controller_Front_Action {
    public function worldAction() {
        $this->loadLayout();
        return $this->renderLayout();
    }
}
?>