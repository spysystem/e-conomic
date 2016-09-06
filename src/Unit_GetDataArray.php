<?php

namespace Economic;

class Unit_GetDataArray
{

    /**
     * @var ArrayOfUnitHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfUnitHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfUnitHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfUnitHandle $entityHandles
     * @return \Economic\Unit_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
