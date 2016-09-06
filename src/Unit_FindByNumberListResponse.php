<?php

namespace Economic;

class Unit_FindByNumberListResponse
{

    /**
     * @var ArrayOfUnitHandle $Unit_FindByNumberListResult
     */
    protected $Unit_FindByNumberListResult = null;

    /**
     * @param ArrayOfUnitHandle $Unit_FindByNumberListResult
     */
    public function __construct($Unit_FindByNumberListResult)
    {
      $this->Unit_FindByNumberListResult = $Unit_FindByNumberListResult;
    }

    /**
     * @return ArrayOfUnitHandle
     */
    public function getUnit_FindByNumberListResult()
    {
      return $this->Unit_FindByNumberListResult;
    }

    /**
     * @param ArrayOfUnitHandle $Unit_FindByNumberListResult
     * @return \Economic\Unit_FindByNumberListResponse
     */
    public function setUnit_FindByNumberListResult($Unit_FindByNumberListResult)
    {
      $this->Unit_FindByNumberListResult = $Unit_FindByNumberListResult;
      return $this;
    }

}
