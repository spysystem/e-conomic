<?php

namespace Economic;

class Account_SetDepartment
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var DepartmentHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param AccountHandle $accountHandle
     * @param DepartmentHandle $valueHandle
     */
    public function __construct($accountHandle, $valueHandle)
    {
      $this->accountHandle = $accountHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->accountHandle;
    }

    /**
     * @param AccountHandle $accountHandle
     * @return \Economic\Account_SetDepartment
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return DepartmentHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DepartmentHandle $valueHandle
     * @return \Economic\Account_SetDepartment
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
