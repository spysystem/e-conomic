<?php

namespace Economic;

class DebtorContact_SetExternalId
{

    /**
     * @var DebtorContactHandle $debtorContactHandle
     */
    protected $debtorContactHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param DebtorContactHandle $debtorContactHandle
     * @param string $value
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
     * @return \Economic\DebtorContact_SetExternalId
     */
    public function setDebtorContactHandle($debtorContactHandle)
    {
      $this->debtorContactHandle = $debtorContactHandle;
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
     * @return \Economic\DebtorContact_SetExternalId
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
