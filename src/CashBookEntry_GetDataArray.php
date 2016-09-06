<?php

namespace Economic;

class CashBookEntry_GetDataArray
{

    /**
     * @var ArrayOfCashBookEntryHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCashBookEntryHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCashBookEntryHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCashBookEntryHandle $entityHandles
     * @return \Economic\CashBookEntry_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
