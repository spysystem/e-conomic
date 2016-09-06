<?php

namespace Economic;

class MileageEntry_GetData
{

    /**
     * @var MileageEntryHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param MileageEntryHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return MileageEntryHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param MileageEntryHandle $entityHandle
     * @return \Economic\MileageEntry_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
