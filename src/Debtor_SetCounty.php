<?php

namespace Economic;

class Debtor_SetCounty
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param string $value
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
     * @return \Economic\Debtor_SetCounty
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
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
     * @return \Economic\Debtor_SetCounty
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
