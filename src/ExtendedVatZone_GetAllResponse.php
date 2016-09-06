<?php

namespace Economic;

class ExtendedVatZone_GetAllResponse
{

    /**
     * @var ArrayOfExtendedVatZoneHandle $ExtendedVatZone_GetAllResult
     */
    protected $ExtendedVatZone_GetAllResult = null;

    /**
     * @param ArrayOfExtendedVatZoneHandle $ExtendedVatZone_GetAllResult
     */
    public function __construct($ExtendedVatZone_GetAllResult)
    {
      $this->ExtendedVatZone_GetAllResult = $ExtendedVatZone_GetAllResult;
    }

    /**
     * @return ArrayOfExtendedVatZoneHandle
     */
    public function getExtendedVatZone_GetAllResult()
    {
      return $this->ExtendedVatZone_GetAllResult;
    }

    /**
     * @param ArrayOfExtendedVatZoneHandle $ExtendedVatZone_GetAllResult
     * @return \Economic\ExtendedVatZone_GetAllResponse
     */
    public function setExtendedVatZone_GetAllResult($ExtendedVatZone_GetAllResult)
    {
      $this->ExtendedVatZone_GetAllResult = $ExtendedVatZone_GetAllResult;
      return $this;
    }

}
