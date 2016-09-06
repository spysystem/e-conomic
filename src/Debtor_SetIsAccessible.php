<?php

namespace Economic;

class Debtor_SetIsAccessible
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param boolean $value
     */
    public function __construct($debtorHandle, $value)
    {
      $this->debtorHandle = $debtorHandle;
      $this->value = $value;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->debtorHandle;
    }

    /**
     * @param DebtorHandle $debtorHandle
     * @return \Economic\Debtor_SetIsAccessible
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
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
     * @return \Economic\Debtor_SetIsAccessible
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
