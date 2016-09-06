<?php

namespace Economic;

class PriceGroup_GetDataArray
{

    /**
     * @var ArrayOfPriceGroupHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfPriceGroupHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfPriceGroupHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfPriceGroupHandle $entityHandles
     * @return \Economic\PriceGroup_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
