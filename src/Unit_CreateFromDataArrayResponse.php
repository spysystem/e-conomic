<?php

namespace Economic;

class Unit_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfUnitHandle $Unit_CreateFromDataArrayResult
     */
    protected $Unit_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfUnitHandle $Unit_CreateFromDataArrayResult
     */
    public function __construct($Unit_CreateFromDataArrayResult)
    {
      $this->Unit_CreateFromDataArrayResult = $Unit_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfUnitHandle
     */
    public function getUnit_CreateFromDataArrayResult()
    {
      return $this->Unit_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfUnitHandle $Unit_CreateFromDataArrayResult
     * @return \Economic\Unit_CreateFromDataArrayResponse
     */
    public function setUnit_CreateFromDataArrayResult($Unit_CreateFromDataArrayResult)
    {
      $this->Unit_CreateFromDataArrayResult = $Unit_CreateFromDataArrayResult;
      return $this;
    }

}
