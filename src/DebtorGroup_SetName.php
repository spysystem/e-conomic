<?php

namespace Economic;

class DebtorGroup_SetName
{

    /**
     * @var DebtorGroupHandle $debtorGroupHandle
     */
    protected $debtorGroupHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param DebtorGroupHandle $debtorGroupHandle
     * @param string $value
     */
    public function __construct($debtorGroupHandle, $value)
    {
      $this->debtorGroupHandle = $debtorGroupHandle;
      $this->value = $value;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtorGroupHandle()
    {
      return $this->debtorGroupHandle;
    }

    /**
     * @param DebtorGroupHandle $debtorGroupHandle
     * @return \Economic\DebtorGroup_SetName
     */
    public function setDebtorGroupHandle($debtorGroupHandle)
    {
      $this->debtorGroupHandle = $debtorGroupHandle;
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
     * @return \Economic\DebtorGroup_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
