<?php

namespace Economic;

class AccountingYear_GetData
{

    /**
     * @var AccountingYearHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param AccountingYearHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return AccountingYearHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param AccountingYearHandle $entityHandle
     * @return \Economic\AccountingYear_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
