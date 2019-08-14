<?php

class Jowens_JobQueue_Model_Order_Job extends Jowens_JobQueue_Model_Job_Abstract 
{
  private $productData;

  public function perform() {
    Mage::log("Hello world!");
    Mage::log($this->getProductData());
    //Mage::log("DATA: " . implode(unserialize(base64_decode($this->getProductData()))));

  }

  public function setProductData($data) {
    $this->productData = $data;
  }

  public function getProductData() {
    return $this->productData;
  }
}
