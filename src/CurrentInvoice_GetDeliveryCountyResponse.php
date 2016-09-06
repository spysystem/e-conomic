<?php

namespace Economic;

class CurrentInvoice_GetDeliveryCountyResponse
{

    /**
     * @var string $CurrentInvoice_GetDeliveryCountyResult
     */
    protected $CurrentInvoice_GetDeliveryCountyResult = null;

    /**
     * @param string $CurrentInvoice_GetDeliveryCountyResult
     */
    public function __construct($CurrentInvoice_GetDeliveryCountyResult)
    {
      $this->CurrentInvoice_GetDeliveryCountyResult = $CurrentInvoice_GetDeliveryCountyResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDeliveryCountyResult()
    {
      return $this->CurrentInvoice_GetDeliveryCountyResult;
    }

    /**
     * @param string $CurrentInvoice_GetDeliveryCountyResult
     * @return \Economic\CurrentInvoice_GetDeliveryCountyResponse
     */
    public function setCurrentInvoice_GetDeliveryCountyResult($CurrentInvoice_GetDeliveryCountyResult)
    {
      $this->CurrentInvoice_GetDeliveryCountyResult = $CurrentInvoice_GetDeliveryCountyResult;
      return $this;
    }

}
