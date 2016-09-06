<?php

namespace Economic;

class AccountingPeriod_GetDataArray
{

    /**
     * @var ArrayOfAccountingPeriodHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfAccountingPeriodHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfAccountingPeriodHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfAccountingPeriodHandle $entityHandles
     * @return \Economic\AccountingPeriod_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
