<?php

namespace Economic;

class Unit_GetDataResponse
{

    /**
     * @var UnitData $Unit_GetDataResult
     */
    protected $Unit_GetDataResult = null;

    /**
     * @param UnitData $Unit_GetDataResult
     */
    public function __construct($Unit_GetDataResult)
    {
      $this->Unit_GetDataResult = $Unit_GetDataResult;
    }

    /**
     * @return UnitData
     */
    public function getUnit_GetDataResult()
    {
      return $this->Unit_GetDataResult;
    }

    /**
     * @param UnitData $Unit_GetDataResult
     * @return \Economic\Unit_GetDataResponse
     */
    public function setUnit_GetDataResult($Unit_GetDataResult)
    {
      $this->Unit_GetDataResult = $Unit_GetDataResult;
      return $this;
    }

}
