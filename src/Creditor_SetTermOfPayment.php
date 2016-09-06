<?php

namespace Economic;

class Creditor_SetTermOfPayment
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var TermOfPaymentHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param TermOfPaymentHandle $valueHandle
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
     * @return \Economic\Creditor_SetTermOfPayment
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param TermOfPaymentHandle $valueHandle
     * @return \Economic\Creditor_SetTermOfPayment
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
