<?php

namespace Economic;

class TermOfPayment_Delete
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
     * @return \Economic\TermOfPayment_Delete
     */
    public function setTermOfPaymentHandle($termOfPaymentHandle)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
      return $this;
    }

}
