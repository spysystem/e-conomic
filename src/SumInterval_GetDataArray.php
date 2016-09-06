<?php

namespace Economic;

class SumInterval_GetDataArray
{

    /**
     * @var ArrayOfSumIntervalHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfSumIntervalHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfSumIntervalHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfSumIntervalHandle $entityHandles
     * @return \Economic\SumInterval_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
