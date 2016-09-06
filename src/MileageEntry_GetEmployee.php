<?php

namespace Economic;

class MileageEntry_GetEmployee
{

    /**
     * @var MileageEntryHandle $mileageEntryHandle
     */
    protected $mileageEntryHandle = null;

    /**
     * @param MileageEntryHandle $mileageEntryHandle
     */
    public function __construct($mileageEntryHandle)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
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
     * @return \Economic\MileageEntry_GetEmployee
     */
    public function setMileageEntryHandle($mileageEntryHandle)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
      return $this;
    }

}
