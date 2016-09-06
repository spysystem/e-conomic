<?php

namespace Economic;

class Entry_GetProject
{

    /**
     * @var EntryHandle $entryHandle
     */
    protected $entryHandle = null;

    /**
     * @param EntryHandle $entryHandle
     */
    public function __construct($entryHandle)
    {
      $this->entryHandle = $entryHandle;
    }

    /**
     * @return EntryHandle
     */
    public function getEntryHandle()
    {
      return $this->entryHandle;
    }

    /**
     * @param EntryHandle $entryHandle
     * @return \Economic\Entry_GetProject
     */
    public function setEntryHandle($entryHandle)
    {
      $this->entryHandle = $entryHandle;
      return $this;
    }

}
