<?php

namespace Economic;

class Unit_CreateFromDataResponse
{

    /**
     * @var UnitHandle $Unit_CreateFromDataResult
     */
    protected $Unit_CreateFromDataResult = null;

    /**
     * @param UnitHandle $Unit_CreateFromDataResult
     */
    public function __construct($Unit_CreateFromDataResult)
    {
      $this->Unit_CreateFromDataResult = $Unit_CreateFromDataResult;
    }

    /**
     * @return UnitHandle
     */
    public function getUnit_CreateFromDataResult()
    {
      return $this->Unit_CreateFromDataResult;
    }

    /**
     * @param UnitHandle $Unit_CreateFromDataResult
     * @return \Economic\Unit_CreateFromDataResponse
     */
    public function setUnit_CreateFromDataResult($Unit_CreateFromDataResult)
    {
      $this->Unit_CreateFromDataResult = $Unit_CreateFromDataResult;
      return $this;
    }

}
