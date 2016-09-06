<?php

namespace Economic;

class DebtorEntry_GetDataArray
{

    /**
     * @var ArrayOfDebtorEntryHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfDebtorEntryHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfDebtorEntryHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfDebtorEntryHandle $entityHandles
     * @return \Economic\DebtorEntry_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
