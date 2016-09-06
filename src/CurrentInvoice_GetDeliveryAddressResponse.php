<?php

namespace Economic;

class CurrentInvoice_GetDeliveryAddressResponse
{

    /**
     * @var string $CurrentInvoice_GetDeliveryAddressResult
     */
    protected $CurrentInvoice_GetDeliveryAddressResult = null;

    /**
     * @param string $CurrentInvoice_GetDeliveryAddressResult
     */
    public function __construct($CurrentInvoice_GetDeliveryAddressResult)
    {
      $this->CurrentInvoice_GetDeliveryAddressResult = $CurrentInvoice_GetDeliveryAddressResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDeliveryAddressResult()
    {
      return $this->CurrentInvoice_GetDeliveryAddressResult;
    }

    /**
     * @param string $CurrentInvoice_GetDeliveryAddressResult
     * @return \Economic\CurrentInvoice_GetDeliveryAddressResponse
     */
    public function setCurrentInvoice_GetDeliveryAddressResult($CurrentInvoice_GetDeliveryAddressResult)
    {
      $this->CurrentInvoice_GetDeliveryAddressResult = $CurrentInvoice_GetDeliveryAddressResult;
      return $this;
    }

}
