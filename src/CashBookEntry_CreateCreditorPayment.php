<?php

namespace Economic;

class CashBookEntry_CreateCreditorPayment
{

    /**
     * @var CashBookHandle $cashBookHandle
     */
    protected $cashBookHandle = null;

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var AccountHandle $contraAccountHandle
     */
    protected $contraAccountHandle = null;

    /**
     * @param CashBookHandle $cashBookHandle
     * @param CreditorHandle $creditorHandle
     * @param AccountHandle $contraAccountHandle
     */
    public function __construct($cashBookHandle, $creditorHandle, $contraAccountHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
      $this->creditorHandle = $creditorHandle;
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
     * @return \Economic\CashBookEntry_CreateCreditorPayment
     */
    public function setCashBookHandle($cashBookHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
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
     * @return \Economic\CashBookEntry_CreateCreditorPayment
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
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
     * @return \Economic\CashBookEntry_CreateCreditorPayment
     */
    public function setContraAccountHandle($contraAccountHandle)
    {
      $this->contraAccountHandle = $contraAccountHandle;
      return $this;
    }

}
