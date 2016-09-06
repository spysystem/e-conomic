<?php

namespace Economic;

class CostType_GetDataArray
{

    /**
     * @var ArrayOfCostTypeHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCostTypeHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCostTypeHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCostTypeHandle $entityHandles
     * @return \Economic\CostType_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
