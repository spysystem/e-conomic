<?php

namespace Economic;

class MileageEntry_GetDataArray
{

    /**
     * @var ArrayOfMileageEntryHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfMileageEntryHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfMileageEntryHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfMileageEntryHandle $entityHandles
     * @return \Economic\MileageEntry_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
