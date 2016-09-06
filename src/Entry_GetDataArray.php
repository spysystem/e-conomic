<?php

namespace Economic;

class Entry_GetDataArray
{

    /**
     * @var ArrayOfEntryHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfEntryHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfEntryHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfEntryHandle $entityHandles
     * @return \Economic\Entry_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
