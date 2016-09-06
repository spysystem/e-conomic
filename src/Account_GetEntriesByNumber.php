<?php

namespace Economic;

class Account_GetEntriesByNumber
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var int $minNumber
     */
    protected $minNumber = null;

    /**
     * @var int $maxNumber
     */
    protected $maxNumber = null;

    /**
     * @param AccountHandle $accountHandle
     * @param int $minNumber
     * @param int $maxNumber
     */
    public function __construct($accountHandle, $minNumber, $maxNumber)
    {
      $this->accountHandle = $accountHandle;
      $this->minNumber = $minNumber;
      $this->maxNumber = $maxNumber;
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
     * @return \Economic\Account_GetEntriesByNumber
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinNumber()
    {
      return $this->minNumber;
    }

    /**
     * @param int $minNumber
     * @return \Economic\Account_GetEntriesByNumber
     */
    public function setMinNumber($minNumber)
    {
      $this->minNumber = $minNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumber()
    {
      return $this->maxNumber;
    }

    /**
     * @param int $maxNumber
     * @return \Economic\Account_GetEntriesByNumber
     */
    public function setMaxNumber($maxNumber)
    {
      $this->maxNumber = $maxNumber;
      return $this;
    }

}
