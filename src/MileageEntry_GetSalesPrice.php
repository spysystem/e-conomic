<?php

namespace Economic;

class MileageEntry_GetSalesPrice
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
     * @return \Economic\MileageEntry_GetSalesPrice
     */
    public function setMileageEntryHandle($mileageEntryHandle)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
      return $this;
    }

}
