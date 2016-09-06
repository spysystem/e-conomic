<?php

namespace Economic;

class Order_GetData
{

    /**
     * @var OrderHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param OrderHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return OrderHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param OrderHandle $entityHandle
     * @return \Economic\Order_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
