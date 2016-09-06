<?php

namespace Economic;

class OrderLine_GetDataArray
{

    /**
     * @var ArrayOfOrderLineHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfOrderLineHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfOrderLineHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfOrderLineHandle $entityHandles
     * @return \Economic\OrderLine_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
