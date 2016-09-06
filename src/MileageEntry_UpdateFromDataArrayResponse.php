<?php

namespace Economic;

class MileageEntry_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfMileageEntryHandle $MileageEntry_UpdateFromDataArrayResult
     */
    protected $MileageEntry_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfMileageEntryHandle $MileageEntry_UpdateFromDataArrayResult
     */
    public function __construct($MileageEntry_UpdateFromDataArrayResult)
    {
      $this->MileageEntry_UpdateFromDataArrayResult = $MileageEntry_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfMileageEntryHandle
     */
    public function getMileageEntry_UpdateFromDataArrayResult()
    {
      return $this->MileageEntry_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfMileageEntryHandle $MileageEntry_UpdateFromDataArrayResult
     * @return \Economic\MileageEntry_UpdateFromDataArrayResponse
     */
    public function setMileageEntry_UpdateFromDataArrayResult($MileageEntry_UpdateFromDataArrayResult)
    {
      $this->MileageEntry_UpdateFromDataArrayResult = $MileageEntry_UpdateFromDataArrayResult;
      return $this;
    }

}
