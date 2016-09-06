<?php

namespace Economic;

class MileageEntry_GetDataResponse
{

    /**
     * @var MileageEntryData $MileageEntry_GetDataResult
     */
    protected $MileageEntry_GetDataResult = null;

    /**
     * @param MileageEntryData $MileageEntry_GetDataResult
     */
    public function __construct($MileageEntry_GetDataResult)
    {
      $this->MileageEntry_GetDataResult = $MileageEntry_GetDataResult;
    }

    /**
     * @return MileageEntryData
     */
    public function getMileageEntry_GetDataResult()
    {
      return $this->MileageEntry_GetDataResult;
    }

    /**
     * @param MileageEntryData $MileageEntry_GetDataResult
     * @return \Economic\MileageEntry_GetDataResponse
     */
    public function setMileageEntry_GetDataResult($MileageEntry_GetDataResult)
    {
      $this->MileageEntry_GetDataResult = $MileageEntry_GetDataResult;
      return $this;
    }

}
