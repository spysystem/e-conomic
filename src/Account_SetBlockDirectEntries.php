<?php

namespace Economic;

class Account_SetBlockDirectEntries
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param AccountHandle $accountHandle
     * @param boolean $value
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
     * @return \Economic\Account_SetBlockDirectEntries
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\Account_SetBlockDirectEntries
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
