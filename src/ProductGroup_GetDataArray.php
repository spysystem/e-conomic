<?php

namespace Economic;

class ProductGroup_GetDataArray
{

    /**
     * @var ArrayOfProductGroupHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfProductGroupHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfProductGroupHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfProductGroupHandle $entityHandles
     * @return \Economic\ProductGroup_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
