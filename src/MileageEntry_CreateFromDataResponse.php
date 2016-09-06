<?php

namespace Economic;

class MileageEntry_CreateFromDataResponse
{

    /**
     * @var MileageEntryHandle $MileageEntry_CreateFromDataResult
     */
    protected $MileageEntry_CreateFromDataResult = null;

    /**
     * @param MileageEntryHandle $MileageEntry_CreateFromDataResult
     */
    public function __construct($MileageEntry_CreateFromDataResult)
    {
      $this->MileageEntry_CreateFromDataResult = $MileageEntry_CreateFromDataResult;
    }

    /**
     * @return MileageEntryHandle
     */
    public function getMileageEntry_CreateFromDataResult()
    {
      return $this->MileageEntry_CreateFromDataResult;
    }

    /**
     * @param MileageEntryHandle $MileageEntry_CreateFromDataResult
     * @return \Economic\MileageEntry_CreateFromDataResponse
     */
    public function setMileageEntry_CreateFromDataResult($MileageEntry_CreateFromDataResult)
    {
      $this->MileageEntry_CreateFromDataResult = $MileageEntry_CreateFromDataResult;
      return $this;
    }

}
