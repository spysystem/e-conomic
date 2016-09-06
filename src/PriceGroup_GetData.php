<?php

namespace Economic;

class PriceGroup_GetData
{

    /**
     * @var PriceGroupHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param PriceGroupHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param PriceGroupHandle $entityHandle
     * @return \Economic\PriceGroup_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
