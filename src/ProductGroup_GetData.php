<?php

namespace Economic;

class ProductGroup_GetData
{

    /**
     * @var ProductGroupHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ProductGroupHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ProductGroupHandle $entityHandle
     * @return \Economic\ProductGroup_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
