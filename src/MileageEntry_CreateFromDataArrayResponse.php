<?php

namespace Economic;

class MileageEntry_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfMileageEntryHandle $MileageEntry_CreateFromDataArrayResult
     */
    protected $MileageEntry_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfMileageEntryHandle $MileageEntry_CreateFromDataArrayResult
     */
    public function __construct($MileageEntry_CreateFromDataArrayResult)
    {
      $this->MileageEntry_CreateFromDataArrayResult = $MileageEntry_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfMileageEntryHandle
     */
    public function getMileageEntry_CreateFromDataArrayResult()
    {
      return $this->MileageEntry_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfMileageEntryHandle $MileageEntry_CreateFromDataArrayResult
     * @return \Economic\MileageEntry_CreateFromDataArrayResponse
     */
    public function setMileageEntry_CreateFromDataArrayResult($MileageEntry_CreateFromDataArrayResult)
    {
      $this->MileageEntry_CreateFromDataArrayResult = $MileageEntry_CreateFromDataArrayResult;
      return $this;
    }

}
