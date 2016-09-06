<?php

namespace Economic;

class Account_SetName
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param AccountHandle $accountHandle
     * @param string $value
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
     * @return \Economic\Account_SetName
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Account_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
