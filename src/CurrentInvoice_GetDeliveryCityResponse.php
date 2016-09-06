<?php

namespace Economic;

class CurrentInvoice_GetDeliveryCityResponse
{

    /**
     * @var string $CurrentInvoice_GetDeliveryCityResult
     */
    protected $CurrentInvoice_GetDeliveryCityResult = null;

    /**
     * @param string $CurrentInvoice_GetDeliveryCityResult
     */
    public function __construct($CurrentInvoice_GetDeliveryCityResult)
    {
      $this->CurrentInvoice_GetDeliveryCityResult = $CurrentInvoice_GetDeliveryCityResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDeliveryCityResult()
    {
      return $this->CurrentInvoice_GetDeliveryCityResult;
    }

    /**
     * @param string $CurrentInvoice_GetDeliveryCityResult
     * @return \Economic\CurrentInvoice_GetDeliveryCityResponse
     */
    public function setCurrentInvoice_GetDeliveryCityResult($CurrentInvoice_GetDeliveryCityResult)
    {
      $this->CurrentInvoice_GetDeliveryCityResult = $CurrentInvoice_GetDeliveryCityResult;
      return $this;
    }

}
