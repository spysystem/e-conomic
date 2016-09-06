<?php

namespace Economic;

class Unit_FindByNameResponse
{

    /**
     * @var ArrayOfUnitHandle $Unit_FindByNameResult
     */
    protected $Unit_FindByNameResult = null;

    /**
     * @param ArrayOfUnitHandle $Unit_FindByNameResult
     */
    public function __construct($Unit_FindByNameResult)
    {
      $this->Unit_FindByNameResult = $Unit_FindByNameResult;
    }

    /**
     * @return ArrayOfUnitHandle
     */
    public function getUnit_FindByNameResult()
    {
      return $this->Unit_FindByNameResult;
    }

    /**
     * @param ArrayOfUnitHandle $Unit_FindByNameResult
     * @return \Economic\Unit_FindByNameResponse
     */
    public function setUnit_FindByNameResult($Unit_FindByNameResult)
    {
      $this->Unit_FindByNameResult = $Unit_FindByNameResult;
      return $this;
    }

}
