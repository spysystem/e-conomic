<?php

namespace Economic;

class TermOfPayment_SetDistributionInPercent
{

    /**
     * @var TermOfPaymentHandle $termOfPaymentHandle
     */
    protected $termOfPaymentHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param TermOfPaymentHandle $termOfPaymentHandle
     * @param float $value
     */
    public function __construct($termOfPaymentHandle, $value)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
      $this->value = $value;
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
     * @return \Economic\TermOfPayment_SetDistributionInPercent
     */
    public function setTermOfPaymentHandle($termOfPaymentHandle)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\TermOfPayment_SetDistributionInPercent
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
