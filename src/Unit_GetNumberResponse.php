<?php

namespace Economic;

class Unit_GetNumberResponse
{

    /**
     * @var int $Unit_GetNumberResult
     */
    protected $Unit_GetNumberResult = null;

    /**
     * @param int $Unit_GetNumberResult
     */
    public function __construct($Unit_GetNumberResult)
    {
      $this->Unit_GetNumberResult = $Unit_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getUnit_GetNumberResult()
    {
      return $this->Unit_GetNumberResult;
    }

    /**
     * @param int $Unit_GetNumberResult
     * @return \Economic\Unit_GetNumberResponse
     */
    public function setUnit_GetNumberResult($Unit_GetNumberResult)
    {
      $this->Unit_GetNumberResult = $Unit_GetNumberResult;
      return $this;
    }

}
