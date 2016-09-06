<?php

namespace Economic;

class Quotation_GetVatZoneResponse
{

    /**
     * @var ExtendedVatZoneHandle $Quotation_GetVatZoneResult
     */
    protected $Quotation_GetVatZoneResult = null;

    /**
     * @param ExtendedVatZoneHandle $Quotation_GetVatZoneResult
     */
    public function __construct($Quotation_GetVatZoneResult)
    {
      $this->Quotation_GetVatZoneResult = $Quotation_GetVatZoneResult;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getQuotation_GetVatZoneResult()
    {
      return $this->Quotation_GetVatZoneResult;
    }

    /**
     * @param ExtendedVatZoneHandle $Quotation_GetVatZoneResult
     * @return \Economic\Quotation_GetVatZoneResponse
     */
    public function setQuotation_GetVatZoneResult($Quotation_GetVatZoneResult)
    {
      $this->Quotation_GetVatZoneResult = $Quotation_GetVatZoneResult;
      return $this;
    }

}
