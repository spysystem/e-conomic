<?php

namespace Economic;

class Account_SetType
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var AccountType $value
     */
    protected $value = null;

    /**
     * @param AccountHandle $accountHandle
     * @param AccountType $value
     */
    public function __construct($accountHandle, $value)
    {
      $this->accountHandle = $accountHandle;
      $this->value = $value;
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
     * @return \Economic\Account_SetType
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return AccountType
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param AccountType $value
     * @return \Economic\Account_SetType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
