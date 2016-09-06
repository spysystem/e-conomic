<?php

namespace Economic;

class CashBookEntry_CreateFinanceVoucher
{

    /**
     * @var CashBookHandle $cashBookHandle
     */
    protected $cashBookHandle = null;

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var AccountHandle $contraAccountHandle
     */
    protected $contraAccountHandle = null;

    /**
     * @param CashBookHandle $cashBookHandle
     * @param AccountHandle $accountHandle
     * @param AccountHandle $contraAccountHandle
     */
    public function __construct($cashBookHandle, $accountHandle, $contraAccountHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
      $this->accountHandle = $accountHandle;
      $this->contraAccountHandle = $contraAccountHandle;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBookHandle()
    {
      return $this->cashBookHandle;
    }

    /**
     * @param CashBookHandle $cashBookHandle
     * @return \Economic\CashBookEntry_CreateFinanceVoucher
     */
    public function setCashBookHandle($cashBookHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
      return $this;
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
     * @return \Economic\CashBookEntry_CreateFinanceVoucher
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getContraAccountHandle()
    {
      return $this->contraAccountHandle;
    }

    /**
     * @param AccountHandle $contraAccountHandle
     * @return \Economic\CashBookEntry_CreateFinanceVoucher
     */
    public function setContraAccountHandle($contraAccountHandle)
    {
      $this->contraAccountHandle = $contraAccountHandle;
      return $this;
    }

}
