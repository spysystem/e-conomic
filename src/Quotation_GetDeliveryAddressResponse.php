<?php

namespace Economic;

class Quotation_GetDeliveryAddressResponse
{

    /**
     * @var string $Quotation_GetDeliveryAddressResult
     */
    protected $Quotation_GetDeliveryAddressResult = null;

    /**
     * @param string $Quotation_GetDeliveryAddressResult
     */
    public function __construct($Quotation_GetDeliveryAddressResult)
    {
      $this->Quotation_GetDeliveryAddressResult = $Quotation_GetDeliveryAddressResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDeliveryAddressResult()
    {
      return $this->Quotation_GetDeliveryAddressResult;
    }

    /**
     * @param string $Quotation_GetDeliveryAddressResult
     * @return \Economic\Quotation_GetDeliveryAddressResponse
     */
    public function setQuotation_GetDeliveryAddressResult($Quotation_GetDeliveryAddressResult)
    {
      $this->Quotation_GetDeliveryAddressResult = $Quotation_GetDeliveryAddressResult;
      return $this;
    }

}
