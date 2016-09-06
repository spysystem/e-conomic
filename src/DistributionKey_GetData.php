<?php

namespace Economic;

class DistributionKey_GetData
{

    /**
     * @var DistributionKeyHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param DistributionKeyHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param DistributionKeyHandle $entityHandle
     * @return \Economic\DistributionKey_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
