<?php

namespace Economic;

class CostType_GetData
{

    /**
     * @var CostTypeHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CostTypeHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CostTypeHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CostTypeHandle $entityHandle
     * @return \Economic\CostType_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
