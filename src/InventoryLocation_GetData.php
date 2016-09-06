<?php

namespace Economic;

class InventoryLocation_GetData
{

    /**
     * @var InventoryLocationHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param InventoryLocationHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param InventoryLocationHandle $entityHandle
     * @return \Economic\InventoryLocation_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
