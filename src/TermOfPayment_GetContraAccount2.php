<?php

namespace Economic;

class TermOfPayment_GetContraAccount2
{

    /**
     * @var TermOfPaymentHandle $termOfPaymentHandle
     */
    protected $termOfPaymentHandle = null;

    /**
     * @param TermOfPaymentHandle $termOfPaymentHandle
     */
    public function __construct($termOfPaymentHandle)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
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
     * @return \Economic\TermOfPayment_GetContraAccount2
     */
    public function setTermOfPaymentHandle($termOfPaymentHandle)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
      return $this;
    }

}
