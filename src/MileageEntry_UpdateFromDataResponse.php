<?php

namespace Economic;

class MileageEntry_UpdateFromDataResponse
{

    /**
     * @var MileageEntryHandle $MileageEntry_UpdateFromDataResult
     */
    protected $MileageEntry_UpdateFromDataResult = null;

    /**
     * @param MileageEntryHandle $MileageEntry_UpdateFromDataResult
     */
    public function __construct($MileageEntry_UpdateFromDataResult)
    {
      $this->MileageEntry_UpdateFromDataResult = $MileageEntry_UpdateFromDataResult;
    }

    /**
     * @return MileageEntryHandle
     */
    public function getMileageEntry_UpdateFromDataResult()
    {
      return $this->MileageEntry_UpdateFromDataResult;
    }

    /**
     * @param MileageEntryHandle $MileageEntry_UpdateFromDataResult
     * @return \Economic\MileageEntry_UpdateFromDataResponse
     */
    public function setMileageEntry_UpdateFromDataResult($MileageEntry_UpdateFromDataResult)
    {
      $this->MileageEntry_UpdateFromDataResult = $MileageEntry_UpdateFromDataResult;
      return $this;
    }

}
