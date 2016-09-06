<?php

namespace Economic;

class Invoice_GetDeliveryAddressResponse
{

    /**
     * @var string $Invoice_GetDeliveryAddressResult
     */
    protected $Invoice_GetDeliveryAddressResult = null;

    /**
     * @param string $Invoice_GetDeliveryAddressResult
     */
    public function __construct($Invoice_GetDeliveryAddressResult)
    {
      $this->Invoice_GetDeliveryAddressResult = $Invoice_GetDeliveryAddressResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDeliveryAddressResult()
    {
      return $this->Invoice_GetDeliveryAddressResult;
    }

    /**
     * @param string $Invoice_GetDeliveryAddressResult
     * @return \Economic\Invoice_GetDeliveryAddressResponse
     */
    public function setInvoice_GetDeliveryAddressResult($Invoice_GetDeliveryAddressResult)
    {
      $this->Invoice_GetDeliveryAddressResult = $Invoice_GetDeliveryAddressResult;
      return $this;
    }

}
