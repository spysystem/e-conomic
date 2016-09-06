<?php

namespace Economic;

class ProductPrice_GetData
{

    /**
     * @var ProductPriceHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ProductPriceHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ProductPriceHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ProductPriceHandle $entityHandle
     * @return \Economic\ProductPrice_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
