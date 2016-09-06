<?php

namespace Economic;

class Debtor_GetVatZoneResponse
{

    /**
     * @var VatZone $Debtor_GetVatZoneResult
     */
    protected $Debtor_GetVatZoneResult = null;

    /**
     * @param VatZone $Debtor_GetVatZoneResult
     */
    public function __construct($Debtor_GetVatZoneResult)
    {
      $this->Debtor_GetVatZoneResult = $Debtor_GetVatZoneResult;
    }

    /**
     * @return VatZone
     */
    public function getDebtor_GetVatZoneResult()
    {
      return $this->Debtor_GetVatZoneResult;
    }

    /**
     * @param VatZone $Debtor_GetVatZoneResult
     * @return \Economic\Debtor_GetVatZoneResponse
     */
    public function setDebtor_GetVatZoneResult($Debtor_GetVatZoneResult)
    {
      $this->Debtor_GetVatZoneResult = $Debtor_GetVatZoneResult;
      return $this;
    }

}
