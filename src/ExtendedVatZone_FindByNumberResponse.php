<?php

namespace Economic;

class ExtendedVatZone_FindByNumberResponse
{

    /**
     * @var ExtendedVatZoneHandle $ExtendedVatZone_FindByNumberResult
     */
    protected $ExtendedVatZone_FindByNumberResult = null;

    /**
     * @param ExtendedVatZoneHandle $ExtendedVatZone_FindByNumberResult
     */
    public function __construct($ExtendedVatZone_FindByNumberResult)
    {
      $this->ExtendedVatZone_FindByNumberResult = $ExtendedVatZone_FindByNumberResult;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getExtendedVatZone_FindByNumberResult()
    {
      return $this->ExtendedVatZone_FindByNumberResult;
    }

    /**
     * @param ExtendedVatZoneHandle $ExtendedVatZone_FindByNumberResult
     * @return \Economic\ExtendedVatZone_FindByNumberResponse
     */
    public function setExtendedVatZone_FindByNumberResult($ExtendedVatZone_FindByNumberResult)
    {
      $this->ExtendedVatZone_FindByNumberResult = $ExtendedVatZone_FindByNumberResult;
      return $this;
    }

}
