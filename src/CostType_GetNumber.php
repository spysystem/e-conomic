<?php

namespace Economic;

class CostType_GetNumber
{

    /**
     * @var CostTypeHandle $costTypeHandle
     */
    protected $costTypeHandle = null;

    /**
     * @param CostTypeHandle $costTypeHandle
     */
    public function __construct($costTypeHandle)
    {
      $this->costTypeHandle = $costTypeHandle;
    }

    /**
     * @return CostTypeHandle
     */
    public function getCostTypeHandle()
    {
      return $this->costTypeHandle;
    }

    /**
     * @param CostTypeHandle $costTypeHandle
     * @return \Economic\CostType_GetNumber
     */
    public function setCostTypeHandle($costTypeHandle)
    {
      $this->costTypeHandle = $costTypeHandle;
      return $this;
    }

}
