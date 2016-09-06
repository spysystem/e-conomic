<?php

namespace Economic;

class MileageEntry_GetStartLocationResponse
{

    /**
     * @var string $MileageEntry_GetStartLocationResult
     */
    protected $MileageEntry_GetStartLocationResult = null;

    /**
     * @param string $MileageEntry_GetStartLocationResult
     */
    public function __construct($MileageEntry_GetStartLocationResult)
    {
      $this->MileageEntry_GetStartLocationResult = $MileageEntry_GetStartLocationResult;
    }

    /**
     * @return string
     */
    public function getMileageEntry_GetStartLocationResult()
    {
      return $this->MileageEntry_GetStartLocationResult;
    }

    /**
     * @param string $MileageEntry_GetStartLocationResult
     * @return \Economic\MileageEntry_GetStartLocationResponse
     */
    public function setMileageEntry_GetStartLocationResult($MileageEntry_GetStartLocationResult)
    {
      $this->MileageEntry_GetStartLocationResult = $MileageEntry_GetStartLocationResult;
      return $this;
    }

}
