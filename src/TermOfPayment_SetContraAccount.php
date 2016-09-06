<?php

namespace Economic;

class TermOfPayment_SetContraAccount
{

    /**
     * @var TermOfPaymentHandle $termOfPaymentHandle
     */
    protected $termOfPaymentHandle = null;

    /**
     * @var AccountHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param TermOfPaymentHandle $termOfPaymentHandle
     * @param AccountHandle $valueHandle
     */
    public function __construct($termOfPaymentHandle, $valueHandle)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getTermOfPaymentHandle()
    {
      return $this->termOfPaymentHandle;
    }

    /**
     * @param TermOfPaymentHandle $termOfPaymentHandle
     * @return \Economic\TermOfPayment_SetContraAccount
     */
    public function setTermOfPaymentHandle($termOfPaymentHandle)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param AccountHandle $valueHandle
     * @return \Economic\TermOfPayment_SetContraAccount
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
