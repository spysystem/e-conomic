<?php

namespace Economic;

class InventoryLocation_GetName
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
     * @return \Economic\InventoryLocation_GetName
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
