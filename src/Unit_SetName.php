<?php

namespace Economic;

class Unit_SetName
{

    /**
     * @var UnitHandle $unitHandle
     */
    protected $unitHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param UnitHandle $unitHandle
     * @param string $value
     */
    public function __construct($unitHandle, $value)
    {
      $this->unitHandle = $unitHandle;
      $this->value = $value;
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
     * @return \Economic\Unit_SetName
     */
    public function setUnitHandle($unitHandle)
    {
      $this->unitHandle = $unitHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Unit_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
