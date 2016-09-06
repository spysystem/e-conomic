<?php

namespace Economic;

class Unit_FindByNumberResponse
{

    /**
     * @var UnitHandle $Unit_FindByNumberResult
     */
    protected $Unit_FindByNumberResult = null;

    /**
     * @param UnitHandle $Unit_FindByNumberResult
     */
    public function __construct($Unit_FindByNumberResult)
    {
      $this->Unit_FindByNumberResult = $Unit_FindByNumberResult;
    }

    /**
     * @return UnitHandle
     */
    public function getUnit_FindByNumberResult()
    {
      return $this->Unit_FindByNumberResult;
    }

    /**
     * @param UnitHandle $Unit_FindByNumberResult
     * @return \Economic\Unit_FindByNumberResponse
     */
    public function setUnit_FindByNumberResult($Unit_FindByNumberResult)
    {
      $this->Unit_FindByNumberResult = $Unit_FindByNumberResult;
      return $this;
    }

}
