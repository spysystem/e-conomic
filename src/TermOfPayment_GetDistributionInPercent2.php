<?php

namespace Economic;

class TermOfPayment_GetDistributionInPercent2
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
     * @return \Economic\TermOfPayment_GetDistributionInPercent2
     */
    public function setTermOfPaymentHandle($termOfPaymentHandle)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
      return $this;
    }

}
