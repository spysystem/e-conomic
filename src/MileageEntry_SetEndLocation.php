<?php

namespace Economic;

class MileageEntry_SetEndLocation
{

    /**
     * @var MileageEntryHandle $mileageEntryHandle
     */
    protected $mileageEntryHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param MileageEntryHandle $mileageEntryHandle
     * @param string $value
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
     * @return \Economic\MileageEntry_SetEndLocation
     */
    public function setMileageEntryHandle($mileageEntryHandle)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
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
     * @return \Economic\MileageEntry_SetEndLocation
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
