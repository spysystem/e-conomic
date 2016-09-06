<?php

namespace Economic;

class Unit_GetName
{

    /**
     * @var UnitHandle $unitHandle
     */
    protected $unitHandle = null;

    /**
     * @param UnitHandle $unitHandle
     */
    public function __construct($unitHandle)
    {
      $this->unitHandle = $unitHandle;
    }

    /**
     * @return UnitHandle
     */
    public function getUnitHandle()
    {
      return $this->unitHandle;
    }

    /**
     * @param UnitHandle $unitHandle
     * @return \Economic\Unit_GetName
     */
    public function setUnitHandle($unitHandle)
    {
      $this->unitHandle = $unitHandle;
      return $this;
    }

}
