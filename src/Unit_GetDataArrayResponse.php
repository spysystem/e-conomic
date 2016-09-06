<?php

namespace Economic;

class Unit_GetDataArrayResponse
{

    /**
     * @var ArrayOfUnitData $Unit_GetDataArrayResult
     */
    protected $Unit_GetDataArrayResult = null;

    /**
     * @param ArrayOfUnitData $Unit_GetDataArrayResult
     */
    public function __construct($Unit_GetDataArrayResult)
    {
      $this->Unit_GetDataArrayResult = $Unit_GetDataArrayResult;
    }

    /**
     * @return ArrayOfUnitData
     */
    public function getUnit_GetDataArrayResult()
    {
      return $this->Unit_GetDataArrayResult;
    }

    /**
     * @param ArrayOfUnitData $Unit_GetDataArrayResult
     * @return \Economic\Unit_GetDataArrayResponse
     */
    public function setUnit_GetDataArrayResult($Unit_GetDataArrayResult)
    {
      $this->Unit_GetDataArrayResult = $Unit_GetDataArrayResult;
      return $this;
    }

}
