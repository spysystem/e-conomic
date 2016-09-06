<?php

namespace Economic;

class DebtorContact_SetIsToReceiveEmailCopyOfOrder
{

    /**
     * @var DebtorContactHandle $debtorContactHandle
     */
    protected $debtorContactHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param DebtorContactHandle $debtorContactHandle
     * @param boolean $value
     */
    public function __construct($debtorContactHandle, $value)
    {
      $this->debtorContactHandle = $debtorContactHandle;
      $this->value = $value;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getDebtorContactHandle()
    {
      return $this->debtorContactHandle;
    }

    /**
     * @param DebtorContactHandle $debtorContactHandle
     * @return \Economic\DebtorContact_SetIsToReceiveEmailCopyOfOrder
     */
    public function setDebtorContactHandle($debtorContactHandle)
    {
      $this->debtorContactHandle = $debtorContactHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\DebtorContact_SetIsToReceiveEmailCopyOfOrder
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
