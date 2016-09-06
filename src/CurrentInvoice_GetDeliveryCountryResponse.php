<?php

namespace Economic;

class CurrentInvoice_GetDeliveryCountryResponse
{

    /**
     * @var string $CurrentInvoice_GetDeliveryCountryResult
     */
    protected $CurrentInvoice_GetDeliveryCountryResult = null;

    /**
     * @param string $CurrentInvoice_GetDeliveryCountryResult
     */
    public function __construct($CurrentInvoice_GetDeliveryCountryResult)
    {
      $this->CurrentInvoice_GetDeliveryCountryResult = $CurrentInvoice_GetDeliveryCountryResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDeliveryCountryResult()
    {
      return $this->CurrentInvoice_GetDeliveryCountryResult;
    }

    /**
     * @param string $CurrentInvoice_GetDeliveryCountryResult
     * @return \Economic\CurrentInvoice_GetDeliveryCountryResponse
     */
    public function setCurrentInvoice_GetDeliveryCountryResult($CurrentInvoice_GetDeliveryCountryResult)
    {
      $this->CurrentInvoice_GetDeliveryCountryResult = $CurrentInvoice_GetDeliveryCountryResult;
      return $this;
    }

}
