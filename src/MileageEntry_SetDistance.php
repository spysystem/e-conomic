<?php

namespace Economic;

class MileageEntry_SetDistance
{

    /**
     * @var MileageEntryHandle $mileageEntryHandle
     */
    protected $mileageEntryHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param MileageEntryHandle $mileageEntryHandle
     * @param float $value
     */
    public function __construct($mileageEntryHandle, $value)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
      $this->value = $value;
    }

    /**
     * @return MileageEntryHandle
     */
    public function getMileageEntryHandle()
    {
      return $this->mileageEntryHandle;
    }

    /**
     * @param MileageEntryHandle $mileageEntryHandle
     * @return \Economic\MileageEntry_SetDistance
     */
    public function setMileageEntryHandle($mileageEntryHandle)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\MileageEntry_SetDistance
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
