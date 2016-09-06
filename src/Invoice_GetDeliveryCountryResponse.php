<?php

namespace Economic;

class Invoice_GetDeliveryCountryResponse
{

    /**
     * @var string $Invoice_GetDeliveryCountryResult
     */
    protected $Invoice_GetDeliveryCountryResult = null;

    /**
     * @param string $Invoice_GetDeliveryCountryResult
     */
    public function __construct($Invoice_GetDeliveryCountryResult)
    {
      $this->Invoice_GetDeliveryCountryResult = $Invoice_GetDeliveryCountryResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDeliveryCountryResult()
    {
      return $this->Invoice_GetDeliveryCountryResult;
    }

    /**
     * @param string $Invoice_GetDeliveryCountryResult
     * @return \Economic\Invoice_GetDeliveryCountryResponse
     */
    public function setInvoice_GetDeliveryCountryResult($Invoice_GetDeliveryCountryResult)
    {
      $this->Invoice_GetDeliveryCountryResult = $Invoice_GetDeliveryCountryResult;
      return $this;
    }

}
