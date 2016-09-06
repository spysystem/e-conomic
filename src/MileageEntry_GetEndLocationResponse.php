<?php

namespace Economic;

class MileageEntry_GetEndLocationResponse
{

    /**
     * @var string $MileageEntry_GetEndLocationResult
     */
    protected $MileageEntry_GetEndLocationResult = null;

    /**
     * @param string $MileageEntry_GetEndLocationResult
     */
    public function __construct($MileageEntry_GetEndLocationResult)
    {
      $this->MileageEntry_GetEndLocationResult = $MileageEntry_GetEndLocationResult;
    }

    /**
     * @return string
     */
    public function getMileageEntry_GetEndLocationResult()
    {
      return $this->MileageEntry_GetEndLocationResult;
    }

    /**
     * @param string $MileageEntry_GetEndLocationResult
     * @return \Economic\MileageEntry_GetEndLocationResponse
     */
    public function setMileageEntry_GetEndLocationResult($MileageEntry_GetEndLocationResult)
    {
      $this->MileageEntry_GetEndLocationResult = $MileageEntry_GetEndLocationResult;
      return $this;
    }

}
