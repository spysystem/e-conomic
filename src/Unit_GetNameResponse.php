<?php

namespace Economic;

class Unit_GetNameResponse
{

    /**
     * @var string $Unit_GetNameResult
     */
    protected $Unit_GetNameResult = null;

    /**
     * @param string $Unit_GetNameResult
     */
    public function __construct($Unit_GetNameResult)
    {
      $this->Unit_GetNameResult = $Unit_GetNameResult;
    }

    /**
     * @return string
     */
    public function getUnit_GetNameResult()
    {
      return $this->Unit_GetNameResult;
    }

    /**
     * @param string $Unit_GetNameResult
     * @return \Economic\Unit_GetNameResponse
     */
    public function setUnit_GetNameResult($Unit_GetNameResult)
    {
      $this->Unit_GetNameResult = $Unit_GetNameResult;
      return $this;
    }

}
