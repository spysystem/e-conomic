<?php

namespace Economic;

class ExtendedVatZone_GetDataArrayResponse
{

    /**
     * @var ArrayOfExtendedVatZoneData $ExtendedVatZone_GetDataArrayResult
     */
    protected $ExtendedVatZone_GetDataArrayResult = null;

    /**
     * @param ArrayOfExtendedVatZoneData $ExtendedVatZone_GetDataArrayResult
     */
    public function __construct($ExtendedVatZone_GetDataArrayResult)
    {
      $this->ExtendedVatZone_GetDataArrayResult = $ExtendedVatZone_GetDataArrayResult;
    }

    /**
     * @return ArrayOfExtendedVatZoneData
     */
    public function getExtendedVatZone_GetDataArrayResult()
    {
      return $this->ExtendedVatZone_GetDataArrayResult;
    }

    /**
     * @param ArrayOfExtendedVatZoneData $ExtendedVatZone_GetDataArrayResult
     * @return \Economic\ExtendedVatZone_GetDataArrayResponse
     */
    public function setExtendedVatZone_GetDataArrayResult($ExtendedVatZone_GetDataArrayResult)
    {
      $this->ExtendedVatZone_GetDataArrayResult = $ExtendedVatZone_GetDataArrayResult;
      return $this;
    }

}
