<?php

namespace Economic;

class OrderLine_GetData
{

    /**
     * @var OrderLineHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param OrderLineHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return OrderLineHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param OrderLineHandle $entityHandle
     * @return \Economic\OrderLine_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
