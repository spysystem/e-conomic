<?php

namespace Economic;

class Product_GetData
{

    /**
     * @var ProductHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ProductHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ProductHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ProductHandle $entityHandle
     * @return \Economic\Product_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
