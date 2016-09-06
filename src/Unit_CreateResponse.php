<?php

namespace Economic;

class Unit_CreateResponse
{

    /**
     * @var UnitHandle $Unit_CreateResult
     */
    protected $Unit_CreateResult = null;

    /**
     * @param UnitHandle $Unit_CreateResult
     */
    public function __construct($Unit_CreateResult)
    {
      $this->Unit_CreateResult = $Unit_CreateResult;
    }

    /**
     * @return UnitHandle
     */
    public function getUnit_CreateResult()
    {
      return $this->Unit_CreateResult;
    }

    /**
     * @param UnitHandle $Unit_CreateResult
     * @return \Economic\Unit_CreateResponse
     */
    public function setUnit_CreateResult($Unit_CreateResult)
    {
      $this->Unit_CreateResult = $Unit_CreateResult;
      return $this;
    }

}
