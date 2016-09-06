<?php

namespace Economic;

class ProductPrice_GetDataArray
{

    /**
     * @var ArrayOfProductPriceHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfProductPriceHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfProductPriceHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfProductPriceHandle $entityHandles
     * @return \Economic\ProductPrice_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
