<?php

namespace Economic;

class CurrentInvoice_GetDeliveryPostalCodeResponse
{

    /**
     * @var string $CurrentInvoice_GetDeliveryPostalCodeResult
     */
    protected $CurrentInvoice_GetDeliveryPostalCodeResult = null;

    /**
     * @param string $CurrentInvoice_GetDeliveryPostalCodeResult
     */
    public function __construct($CurrentInvoice_GetDeliveryPostalCodeResult)
    {
      $this->CurrentInvoice_GetDeliveryPostalCodeResult = $CurrentInvoice_GetDeliveryPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDeliveryPostalCodeResult()
    {
      return $this->CurrentInvoice_GetDeliveryPostalCodeResult;
    }

    /**
     * @param string $CurrentInvoice_GetDeliveryPostalCodeResult
     * @return \Economic\CurrentInvoice_GetDeliveryPostalCodeResponse
     */
    public function setCurrentInvoice_GetDeliveryPostalCodeResult($CurrentInvoice_GetDeliveryPostalCodeResult)
    {
      $this->CurrentInvoice_GetDeliveryPostalCodeResult = $CurrentInvoice_GetDeliveryPostalCodeResult;
      return $this;
    }

}
