<?php

namespace Economic;

class Account_SetTotalFrom
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var AccountHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param AccountHandle $accountHandle
     * @param AccountHandle $valueHandle
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
     * @return \Economic\Account_SetTotalFrom
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param AccountHandle $valueHandle
     * @return \Economic\Account_SetTotalFrom
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
