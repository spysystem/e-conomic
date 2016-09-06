<?php

namespace Economic;

class Quotation_GetDeliveryCountryResponse
{

    /**
     * @var string $Quotation_GetDeliveryCountryResult
     */
    protected $Quotation_GetDeliveryCountryResult = null;

    /**
     * @param string $Quotation_GetDeliveryCountryResult
     */
    public function __construct($Quotation_GetDeliveryCountryResult)
    {
      $this->Quotation_GetDeliveryCountryResult = $Quotation_GetDeliveryCountryResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDeliveryCountryResult()
    {
      return $this->Quotation_GetDeliveryCountryResult;
    }

    /**
     * @param string $Quotation_GetDeliveryCountryResult
     * @return \Economic\Quotation_GetDeliveryCountryResponse
     */
    public function setQuotation_GetDeliveryCountryResult($Quotation_GetDeliveryCountryResult)
    {
      $this->Quotation_GetDeliveryCountryResult = $Quotation_GetDeliveryCountryResult;
      return $this;
    }

}
