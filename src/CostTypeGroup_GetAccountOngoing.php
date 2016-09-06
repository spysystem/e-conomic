<?php

namespace Economic;

class CostTypeGroup_GetAccountOngoing
{

    /**
     * @var CostTypeGroupHandle $costTypeGroupHandle
     */
    protected $costTypeGroupHandle = null;

    /**
     * @param CostTypeGroupHandle $costTypeGroupHandle
     */
    public function __construct($costTypeGroupHandle)
    {
      $this->costTypeGroupHandle = $costTypeGroupHandle;
    }

    /**
     * @return CostTypeGroupHandle
     */
    public function getCostTypeGroupHandle()
    {
      return $this->costTypeGroupHandle;
    }

    /**
     * @param CostTypeGroupHandle $costTypeGroupHandle
     * @return \Economic\CostTypeGroup_GetAccountOngoing
     */
    public function setCostTypeGroupHandle($costTypeGroupHandle)
    {
      $this->costTypeGroupHandle = $costTypeGroupHandle;
      return $this;
    }

}
