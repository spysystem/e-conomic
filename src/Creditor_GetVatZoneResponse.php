<?php

namespace Economic;

class Creditor_GetVatZoneResponse
{

    /**
     * @var VatZone $Creditor_GetVatZoneResult
     */
    protected $Creditor_GetVatZoneResult = null;

    /**
     * @param VatZone $Creditor_GetVatZoneResult
     */
    public function __construct($Creditor_GetVatZoneResult)
    {
      $this->Creditor_GetVatZoneResult = $Creditor_GetVatZoneResult;
    }

    /**
     * @return VatZone
     */
    public function getCreditor_GetVatZoneResult()
    {
      return $this->Creditor_GetVatZoneResult;
    }

    /**
     * @param VatZone $Creditor_GetVatZoneResult
     * @return \Economic\Creditor_GetVatZoneResponse
     */
    public function setCreditor_GetVatZoneResult($Creditor_GetVatZoneResult)
    {
      $this->Creditor_GetVatZoneResult = $Creditor_GetVatZoneResult;
      return $this;
    }

}
