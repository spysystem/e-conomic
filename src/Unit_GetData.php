<?php

namespace Economic;

class Unit_GetData
{

    /**
     * @var UnitHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param UnitHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return UnitHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param UnitHandle $entityHandle
     * @return \Economic\Unit_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
