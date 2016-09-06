<?php

namespace Economic;

class DeliveryLocation_GetData
{

    /**
     * @var DeliveryLocationHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param DeliveryLocationHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param DeliveryLocationHandle $entityHandle
     * @return \Economic\DeliveryLocation_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
