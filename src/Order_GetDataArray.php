<?php

namespace Economic;

class Order_GetDataArray
{

    /**
     * @var ArrayOfOrderHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfOrderHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfOrderHandle $entityHandles
     * @return \Economic\Order_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
