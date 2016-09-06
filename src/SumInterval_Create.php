<?php

namespace Economic;

class SumInterval_Create
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var int $fromAccount
     */
    protected $fromAccount = null;

    /**
     * @var int $toAccount
     */
    protected $toAccount = null;

    /**
     * @param AccountHandle $accountHandle
     * @param int $fromAccount
     * @param int $toAccount
     */
    public function __construct($accountHandle, $fromAccount, $toAccount)
    {
      $this->accountHandle = $accountHandle;
      $this->fromAccount = $fromAccount;
      $this->toAccount = $toAccount;
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
     * @return \Economic\SumInterval_Create
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getFromAccount()
    {
      return $this->fromAccount;
    }

    /**
     * @param int $fromAccount
     * @return \Economic\SumInterval_Create
     */
    public function setFromAccount($fromAccount)
    {
      $this->fromAccount = $fromAccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getToAccount()
    {
      return $this->toAccount;
    }

    /**
     * @param int $toAccount
     * @return \Economic\SumInterval_Create
     */
    public function setToAccount($toAccount)
    {
      $this->toAccount = $toAccount;
      return $this;
    }

}
