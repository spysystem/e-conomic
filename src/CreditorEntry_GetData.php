<?php

namespace Economic;

class CreditorEntry_GetData
{

    /**
     * @var CreditorEntryHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CreditorEntryHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CreditorEntryHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CreditorEntryHandle $entityHandle
     * @return \Economic\CreditorEntry_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
