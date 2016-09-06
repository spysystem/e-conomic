<?php

namespace Economic;

class Account_SetVatAccount
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var VatAccountHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param AccountHandle $accountHandle
     * @param VatAccountHandle $valueHandle
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
     * @return \Economic\Account_SetVatAccount
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return VatAccountHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param VatAccountHandle $valueHandle
     * @return \Economic\Account_SetVatAccount
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
