<?php

namespace Economic;

class CashBookEntry_Create
{

    /**
     * @var CashBookEntryType $type
     */
    protected $type = null;

    /**
     * @var CashBookHandle $cashBookHandle
     */
    protected $cashBookHandle = null;

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var AccountHandle $contraAccountHandle
     */
    protected $contraAccountHandle = null;

    /**
     * @param CashBookEntryType $type
     * @param CashBookHandle $cashBookHandle
     * @param DebtorHandle $debtorHandle
     * @param CreditorHandle $creditorHandle
     * @param AccountHandle $accountHandle
     * @param AccountHandle $contraAccountHandle
     */
    public function __construct($type, $cashBookHandle, $debtorHandle, $creditorHandle, $accountHandle, $contraAccountHandle)
    {
      $this->type = $type;
      $this->cashBookHandle = $cashBookHandle;
      $this->debtorHandle = $debtorHandle;
      $this->creditorHandle = $creditorHandle;
      $this->accountHandle = $accountHandle;
      $this->contraAccountHandle = $contraAccountHandle;
    }

    /**
     * @return CashBookEntryType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param CashBookEntryType $type
     * @return \Economic\CashBookEntry_Create
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
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
     * @return \Economic\CashBookEntry_Create
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
     * @return \Economic\CashBookEntry_Create
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorHandle()
    {
      return $this->creditorHandle;
    }

    /**
     * @param CreditorHandle $creditorHandle
     * @return \Economic\CashBookEntry_Create
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
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
     * @return \Economic\CashBookEntry_Create
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
     * @return \Economic\CashBookEntry_Create
     */
    public function setContraAccountHandle($contraAccountHandle)
    {
      $this->contraAccountHandle = $contraAccountHandle;
      return $this;
    }

}
