<?php

namespace Economic;

class InventoryLocation_GetDataArray
{

    /**
     * @var ArrayOfInventoryLocationHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfInventoryLocationHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfInventoryLocationHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfInventoryLocationHandle $entityHandles
     * @return \Economic\InventoryLocation_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
