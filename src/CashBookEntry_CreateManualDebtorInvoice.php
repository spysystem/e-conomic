<?php

namespace Economic;

class CashBookEntry_CreateManualDebtorInvoice
{

    /**
     * @var CashBookHandle $cashBookHandle
     */
    protected $cashBookHandle = null;

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var AccountHandle $contraAccountHandle
     */
    protected $contraAccountHandle = null;

    /**
     * @param CashBookHandle $cashBookHandle
     * @param DebtorHandle $debtorHandle
     * @param AccountHandle $contraAccountHandle
     */
    public function __construct($cashBookHandle, $debtorHandle, $contraAccountHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
      $this->debtorHandle = $debtorHandle;
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
     * @return \Economic\CashBookEntry_CreateManualDebtorInvoice
     */
    public function setCashBookHandle($cashBookHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->debtorHandle;
    }

    /**
     * @param DebtorHandle $debtorHandle
     * @return \Economic\CashBookEntry_CreateManualDebtorInvoice
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
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
     * @return \Economic\CashBookEntry_CreateManualDebtorInvoice
     */
    public function setContraAccountHandle($contraAccountHandle)
    {
      $this->contraAccountHandle = $contraAccountHandle;
      return $this;
    }

}
