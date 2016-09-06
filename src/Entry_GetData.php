<?php

namespace Economic;

class Entry_GetData
{

    /**
     * @var EntryHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param EntryHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return EntryHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param EntryHandle $entityHandle
     * @return \Economic\Entry_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
