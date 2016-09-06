<?php

namespace Economic;

class MileageEntry_ApproveEntries
{

    /**
     * @var ArrayOfMileageEntryHandle $mileageEntryHandles
     */
    protected $mileageEntryHandles = null;

    /**
     * @param ArrayOfMileageEntryHandle $mileageEntryHandles
     */
    public function __construct($mileageEntryHandles)
    {
      $this->mileageEntryHandles = $mileageEntryHandles;
    }

    /**
     * @return ArrayOfMileageEntryHandle
     */
    public function getMileageEntryHandles()
    {
      return $this->mileageEntryHandles;
    }

    /**
     * @param ArrayOfMileageEntryHandle $mileageEntryHandles
     * @return \Economic\MileageEntry_ApproveEntries
     */
    public function setMileageEntryHandles($mileageEntryHandles)
    {
      $this->mileageEntryHandles = $mileageEntryHandles;
      return $this;
    }

}
