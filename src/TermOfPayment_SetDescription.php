<?php

namespace Economic;

class TermOfPayment_SetDescription
{

    /**
     * @var TermOfPaymentHandle $termOfPaymentHandle
     */
    protected $termOfPaymentHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param TermOfPaymentHandle $termOfPaymentHandle
     * @param string $value
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
     * @return \Economic\TermOfPayment_SetDescription
     */
    public function setTermOfPaymentHandle($termOfPaymentHandle)
    {
      $this->termOfPaymentHandle = $termOfPaymentHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\TermOfPayment_SetDescription
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
