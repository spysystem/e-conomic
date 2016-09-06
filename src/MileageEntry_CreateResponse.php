<?php

namespace Economic;

class MileageEntry_CreateResponse
{

    /**
     * @var MileageEntryHandle $MileageEntry_CreateResult
     */
    protected $MileageEntry_CreateResult = null;

    /**
     * @param MileageEntryHandle $MileageEntry_CreateResult
     */
    public function __construct($MileageEntry_CreateResult)
    {
      $this->MileageEntry_CreateResult = $MileageEntry_CreateResult;
    }

    /**
     * @return MileageEntryHandle
     */
    public function getMileageEntry_CreateResult()
    {
      return $this->MileageEntry_CreateResult;
    }

    /**
     * @param MileageEntryHandle $MileageEntry_CreateResult
     * @return \Economic\MileageEntry_CreateResponse
     */
    public function setMileageEntry_CreateResult($MileageEntry_CreateResult)
    {
      $this->MileageEntry_CreateResult = $MileageEntry_CreateResult;
      return $this;
    }

}
