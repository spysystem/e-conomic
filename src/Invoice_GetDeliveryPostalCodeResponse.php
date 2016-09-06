<?php

namespace Economic;

class Invoice_GetDeliveryPostalCodeResponse
{

    /**
     * @var string $Invoice_GetDeliveryPostalCodeResult
     */
    protected $Invoice_GetDeliveryPostalCodeResult = null;

    /**
     * @param string $Invoice_GetDeliveryPostalCodeResult
     */
    public function __construct($Invoice_GetDeliveryPostalCodeResult)
    {
      $this->Invoice_GetDeliveryPostalCodeResult = $Invoice_GetDeliveryPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDeliveryPostalCodeResult()
    {
      return $this->Invoice_GetDeliveryPostalCodeResult;
    }

    /**
     * @param string $Invoice_GetDeliveryPostalCodeResult
     * @return \Economic\Invoice_GetDeliveryPostalCodeResponse
     */
    public function setInvoice_GetDeliveryPostalCodeResult($Invoice_GetDeliveryPostalCodeResult)
    {
      $this->Invoice_GetDeliveryPostalCodeResult = $Invoice_GetDeliveryPostalCodeResult;
      return $this;
    }

}
