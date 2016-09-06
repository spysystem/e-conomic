<?php

namespace Economic;

class Unit_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfUnitHandle $Unit_UpdateFromDataArrayResult
     */
    protected $Unit_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfUnitHandle $Unit_UpdateFromDataArrayResult
     */
    public function __construct($Unit_UpdateFromDataArrayResult)
    {
      $this->Unit_UpdateFromDataArrayResult = $Unit_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfUnitHandle
     */
    public function getUnit_UpdateFromDataArrayResult()
    {
      return $this->Unit_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfUnitHandle $Unit_UpdateFromDataArrayResult
     * @return \Economic\Unit_UpdateFromDataArrayResponse
     */
    public function setUnit_UpdateFromDataArrayResult($Unit_UpdateFromDataArrayResult)
    {
      $this->Unit_UpdateFromDataArrayResult = $Unit_UpdateFromDataArrayResult;
      return $this;
    }

}
