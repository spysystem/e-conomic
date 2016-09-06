<?php

namespace Economic;

class Unit_UpdateFromDataResponse
{

    /**
     * @var UnitHandle $Unit_UpdateFromDataResult
     */
    protected $Unit_UpdateFromDataResult = null;

    /**
     * @param UnitHandle $Unit_UpdateFromDataResult
     */
    public function __construct($Unit_UpdateFromDataResult)
    {
      $this->Unit_UpdateFromDataResult = $Unit_UpdateFromDataResult;
    }

    /**
     * @return UnitHandle
     */
    public function getUnit_UpdateFromDataResult()
    {
      return $this->Unit_UpdateFromDataResult;
    }

    /**
     * @param UnitHandle $Unit_UpdateFromDataResult
     * @return \Economic\Unit_UpdateFromDataResponse
     */
    public function setUnit_UpdateFromDataResult($Unit_UpdateFromDataResult)
    {
      $this->Unit_UpdateFromDataResult = $Unit_UpdateFromDataResult;
      return $this;
    }

}
