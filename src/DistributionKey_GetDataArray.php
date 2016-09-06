<?php

namespace Economic;

class DistributionKey_GetDataArray
{

    /**
     * @var ArrayOfDistributionKeyHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfDistributionKeyHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfDistributionKeyHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfDistributionKeyHandle $entityHandles
     * @return \Economic\DistributionKey_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
