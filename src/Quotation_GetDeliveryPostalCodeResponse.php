<?php

namespace Economic;

class Quotation_GetDeliveryPostalCodeResponse
{

    /**
     * @var string $Quotation_GetDeliveryPostalCodeResult
     */
    protected $Quotation_GetDeliveryPostalCodeResult = null;

    /**
     * @param string $Quotation_GetDeliveryPostalCodeResult
     */
    public function __construct($Quotation_GetDeliveryPostalCodeResult)
    {
      $this->Quotation_GetDeliveryPostalCodeResult = $Quotation_GetDeliveryPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDeliveryPostalCodeResult()
    {
      return $this->Quotation_GetDeliveryPostalCodeResult;
    }

    /**
     * @param string $Quotation_GetDeliveryPostalCodeResult
     * @return \Economic\Quotation_GetDeliveryPostalCodeResponse
     */
    public function setQuotation_GetDeliveryPostalCodeResult($Quotation_GetDeliveryPostalCodeResult)
    {
      $this->Quotation_GetDeliveryPostalCodeResult = $Quotation_GetDeliveryPostalCodeResult;
      return $this;
    }

}
