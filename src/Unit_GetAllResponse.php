<?php

namespace Economic;

class Unit_GetAllResponse
{

    /**
     * @var ArrayOfUnitHandle $Unit_GetAllResult
     */
    protected $Unit_GetAllResult = null;

    /**
     * @param ArrayOfUnitHandle $Unit_GetAllResult
     */
    public function __construct($Unit_GetAllResult)
    {
      $this->Unit_GetAllResult = $Unit_GetAllResult;
    }

    /**
     * @return ArrayOfUnitHandle
     */
    public function getUnit_GetAllResult()
    {
      return $this->Unit_GetAllResult;
    }

    /**
     * @param ArrayOfUnitHandle $Unit_GetAllResult
     * @return \Economic\Unit_GetAllResponse
     */
    public function setUnit_GetAllResult($Unit_GetAllResult)
    {
      $this->Unit_GetAllResult = $Unit_GetAllResult;
      return $this;
    }

}
