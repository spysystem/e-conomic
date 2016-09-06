<?php

namespace Economic;

class Product_GetDataArray
{

    /**
     * @var ArrayOfProductHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfProductHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfProductHandle $entityHandles
     * @return \Economic\Product_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
