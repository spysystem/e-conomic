<?php

namespace Economic;

class CashBookEntry_GetData
{

    /**
     * @var CashBookEntryHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CashBookEntryHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CashBookEntryHandle $entityHandle
     * @return \Economic\CashBookEntry_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
