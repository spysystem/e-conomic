<?php

namespace Economic;

class AccountingYear_GetDataArray
{

    /**
     * @var ArrayOfAccountingYearHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfAccountingYearHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfAccountingYearHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfAccountingYearHandle $entityHandles
     * @return \Economic\AccountingYear_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
