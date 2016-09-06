<?php

namespace Economic;

class MileageEntry_GetAllResponse
{

    /**
     * @var ArrayOfMileageEntryHandle $MileageEntry_GetAllResult
     */
    protected $MileageEntry_GetAllResult = null;

    /**
     * @param ArrayOfMileageEntryHandle $MileageEntry_GetAllResult
     */
    public function __construct($MileageEntry_GetAllResult)
    {
      $this->MileageEntry_GetAllResult = $MileageEntry_GetAllResult;
    }

    /**
     * @return ArrayOfMileageEntryHandle
     */
    public function getMileageEntry_GetAllResult()
    {
      return $this->MileageEntry_GetAllResult;
    }

    /**
     * @param ArrayOfMileageEntryHandle $MileageEntry_GetAllResult
     * @return \Economic\MileageEntry_GetAllResponse
     */
    public function setMileageEntry_GetAllResult($MileageEntry_GetAllResult)
    {
      $this->MileageEntry_GetAllResult = $MileageEntry_GetAllResult;
      return $this;
    }

}
