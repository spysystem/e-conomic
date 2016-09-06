<?php

namespace Economic;

class CostTypeGroup_GetDataArray
{

    /**
     * @var ArrayOfCostTypeGroupHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCostTypeGroupHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCostTypeGroupHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCostTypeGroupHandle $entityHandles
     * @return \Economic\CostTypeGroup_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
