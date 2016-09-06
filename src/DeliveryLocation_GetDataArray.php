<?php

namespace Economic;

class DeliveryLocation_GetDataArray
{

    /**
     * @var ArrayOfDeliveryLocationHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfDeliveryLocationHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfDeliveryLocationHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfDeliveryLocationHandle $entityHandles
     * @return \Economic\DeliveryLocation_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
