<?php

namespace Economic;

class Creditor_SetRemittanceInformation
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var BankPaymentTypeHandle $defaultPaymentTypeHandle
     */
    protected $defaultPaymentTypeHandle = null;

    /**
     * @var string $defaultPaymentCreditorId
     */
    protected $defaultPaymentCreditorId = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param BankPaymentTypeHandle $defaultPaymentTypeHandle
     * @param string $defaultPaymentCreditorId
     */
    public function __construct($creditorHandle, $defaultPaymentTypeHandle, $defaultPaymentCreditorId)
    {
      $this->creditorHandle = $creditorHandle;
      $this->defaultPaymentTypeHandle = $defaultPaymentTypeHandle;
      $this->defaultPaymentCreditorId = $defaultPaymentCreditorId;
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
     * @return \Economic\Creditor_SetRemittanceInformation
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getDefaultPaymentTypeHandle()
    {
      return $this->defaultPaymentTypeHandle;
    }

    /**
     * @param BankPaymentTypeHandle $defaultPaymentTypeHandle
     * @return \Economic\Creditor_SetRemittanceInformation
     */
    public function setDefaultPaymentTypeHandle($defaultPaymentTypeHandle)
    {
      $this->defaultPaymentTypeHandle = $defaultPaymentTypeHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPaymentCreditorId()
    {
      return $this->defaultPaymentCreditorId;
    }

    /**
     * @param string $defaultPaymentCreditorId
     * @return \Economic\Creditor_SetRemittanceInformation
     */
    public function setDefaultPaymentCreditorId($defaultPaymentCreditorId)
    {
      $this->defaultPaymentCreditorId = $defaultPaymentCreditorId;
      return $this;
    }

}
