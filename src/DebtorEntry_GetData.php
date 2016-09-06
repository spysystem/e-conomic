<?php

namespace Economic;

class DebtorEntry_GetData
{

    /**
     * @var DebtorEntryHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param DebtorEntryHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return DebtorEntryHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param DebtorEntryHandle $entityHandle
     * @return \Economic\DebtorEntry_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
