<?php

namespace Economic;

class CurrentInvoice_GetVatZoneResponse
{

    /**
     * @var ExtendedVatZoneHandle $CurrentInvoice_GetVatZoneResult
     */
    protected $CurrentInvoice_GetVatZoneResult = null;

    /**
     * @param ExtendedVatZoneHandle $CurrentInvoice_GetVatZoneResult
     */
    public function __construct($CurrentInvoice_GetVatZoneResult)
    {
      $this->CurrentInvoice_GetVatZoneResult = $CurrentInvoice_GetVatZoneResult;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getCurrentInvoice_GetVatZoneResult()
    {
      return $this->CurrentInvoice_GetVatZoneResult;
    }

    /**
     * @param ExtendedVatZoneHandle $CurrentInvoice_GetVatZoneResult
     * @return \Economic\CurrentInvoice_GetVatZoneResponse
     */
    public function setCurrentInvoice_GetVatZoneResult($CurrentInvoice_GetVatZoneResult)
    {
      $this->CurrentInvoice_GetVatZoneResult = $CurrentInvoice_GetVatZoneResult;
      return $this;
    }

}
