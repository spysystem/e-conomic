<?php

namespace Economic;

class AccountingPeriod_GetData
{

    /**
     * @var AccountingPeriodHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param AccountingPeriodHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return AccountingPeriodHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param AccountingPeriodHandle $entityHandle
     * @return \Economic\AccountingPeriod_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
