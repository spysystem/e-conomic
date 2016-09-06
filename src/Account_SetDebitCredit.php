<?php

namespace Economic;

class Account_SetDebitCredit
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var DebitCredit $value
     */
    protected $value = null;

    /**
     * @param AccountHandle $accountHandle
     * @param DebitCredit $value
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
     * @return \Economic\Account_SetDebitCredit
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return DebitCredit
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param DebitCredit $value
     * @return \Economic\Account_SetDebitCredit
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
