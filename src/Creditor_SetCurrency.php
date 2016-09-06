<?php

namespace Economic;

class Creditor_SetCurrency
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var CurrencyHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param CurrencyHandle $valueHandle
     */
    public function __construct($creditorHandle, $valueHandle)
    {
      $this->creditorHandle = $creditorHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\Creditor_SetCurrency
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return CurrencyHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param CurrencyHandle $valueHandle
     * @return \Economic\Creditor_SetCurrency
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
