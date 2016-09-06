<?php

namespace Economic;

class ExtendedVatZone_GetDataResponse
{

    /**
     * @var ExtendedVatZoneData $ExtendedVatZone_GetDataResult
     */
    protected $ExtendedVatZone_GetDataResult = null;

    /**
     * @param ExtendedVatZoneData $ExtendedVatZone_GetDataResult
     */
    public function __construct($ExtendedVatZone_GetDataResult)
    {
      $this->ExtendedVatZone_GetDataResult = $ExtendedVatZone_GetDataResult;
    }

    /**
     * @return ExtendedVatZoneData
     */
    public function getExtendedVatZone_GetDataResult()
    {
      return $this->ExtendedVatZone_GetDataResult;
    }

    /**
     * @param ExtendedVatZoneData $ExtendedVatZone_GetDataResult
     * @return \Economic\ExtendedVatZone_GetDataResponse
     */
    public function setExtendedVatZone_GetDataResult($ExtendedVatZone_GetDataResult)
    {
      $this->ExtendedVatZone_GetDataResult = $ExtendedVatZone_GetDataResult;
      return $this;
    }

}
