<?php

namespace Economic;

class Account_SetDistributionKey
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var DistributionKeyHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param AccountHandle $accountHandle
     * @param DistributionKeyHandle $valueHandle
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
     * @return \Economic\Account_SetDistributionKey
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DistributionKeyHandle $valueHandle
     * @return \Economic\Account_SetDistributionKey
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
