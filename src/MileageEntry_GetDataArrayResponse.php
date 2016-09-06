<?php

namespace Economic;

class MileageEntry_GetDataArrayResponse
{

    /**
     * @var ArrayOfMileageEntryData $MileageEntry_GetDataArrayResult
     */
    protected $MileageEntry_GetDataArrayResult = null;

    /**
     * @param ArrayOfMileageEntryData $MileageEntry_GetDataArrayResult
     */
    public function __construct($MileageEntry_GetDataArrayResult)
    {
      $this->MileageEntry_GetDataArrayResult = $MileageEntry_GetDataArrayResult;
    }

    /**
     * @return ArrayOfMileageEntryData
     */
    public function getMileageEntry_GetDataArrayResult()
    {
      return $this->MileageEntry_GetDataArrayResult;
    }

    /**
     * @param ArrayOfMileageEntryData $MileageEntry_GetDataArrayResult
     * @return \Economic\MileageEntry_GetDataArrayResponse
     */
    public function setMileageEntry_GetDataArrayResult($MileageEntry_GetDataArrayResult)
    {
      $this->MileageEntry_GetDataArrayResult = $MileageEntry_GetDataArrayResult;
      return $this;
    }

}
