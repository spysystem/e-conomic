<?php

namespace Economic;

class Debtor_GetExtendedVatZoneResponse
{

    /**
     * @var ExtendedVatZoneHandle $Debtor_GetExtendedVatZoneResult
     */
    protected $Debtor_GetExtendedVatZoneResult = null;

    /**
     * @param ExtendedVatZoneHandle $Debtor_GetExtendedVatZoneResult
     */
    public function __construct($Debtor_GetExtendedVatZoneResult)
    {
      $this->Debtor_GetExtendedVatZoneResult = $Debtor_GetExtendedVatZoneResult;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getDebtor_GetExtendedVatZoneResult()
    {
      return $this->Debtor_GetExtendedVatZoneResult;
    }

    /**
     * @param ExtendedVatZoneHandle $Debtor_GetExtendedVatZoneResult
     * @return \Economic\Debtor_GetExtendedVatZoneResponse
     */
    public function setDebtor_GetExtendedVatZoneResult($Debtor_GetExtendedVatZoneResult)
    {
      $this->Debtor_GetExtendedVatZoneResult = $Debtor_GetExtendedVatZoneResult;
      return $this;
    }

}
