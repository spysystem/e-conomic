<?php

namespace Economic;

class SumInterval_GetData
{

    /**
     * @var SumIntervalHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param SumIntervalHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return SumIntervalHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param SumIntervalHandle $entityHandle
     * @return \Economic\SumInterval_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
