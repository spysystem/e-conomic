<?php

namespace Economic;

class MileageEntry_SetProject
{

    /**
     * @var MileageEntryHandle $mileageEntryHandle
     */
    protected $mileageEntryHandle = null;

    /**
     * @var ProjectHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param MileageEntryHandle $mileageEntryHandle
     * @param ProjectHandle $valueHandle
     */
    public function __construct($mileageEntryHandle, $valueHandle)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\MileageEntry_SetProject
     */
    public function setMileageEntryHandle($mileageEntryHandle)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
      return $this;
    }

    /**
     * @return ProjectHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProjectHandle $valueHandle
     * @return \Economic\MileageEntry_SetProject
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
