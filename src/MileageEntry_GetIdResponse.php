<?php

namespace Economic;

class MileageEntry_GetIdResponse
{

    /**
     * @var int $MileageEntry_GetIdResult
     */
    protected $MileageEntry_GetIdResult = null;

    /**
     * @param int $MileageEntry_GetIdResult
     */
    public function __construct($MileageEntry_GetIdResult)
    {
      $this->MileageEntry_GetIdResult = $MileageEntry_GetIdResult;
    }

    /**
     * @return int
     */
    public function getMileageEntry_GetIdResult()
    {
      return $this->MileageEntry_GetIdResult;
    }

    /**
     * @param int $MileageEntry_GetIdResult
     * @return \Economic\MileageEntry_GetIdResponse
     */
    public function setMileageEntry_GetIdResult($MileageEntry_GetIdResult)
    {
      $this->MileageEntry_GetIdResult = $MileageEntry_GetIdResult;
      return $this;
    }

}
