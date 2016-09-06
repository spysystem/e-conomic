<?php

namespace Economic;

class CostTypeGroup_GetData
{

    /**
     * @var CostTypeGroupHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CostTypeGroupHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CostTypeGroupHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CostTypeGroupHandle $entityHandle
     * @return \Economic\CostTypeGroup_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
