<?php

namespace Economic;

class DebtorContact_Create
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param string $name
     */
    public function __construct($debtorHandle, $name)
    {
      $this->debtorHandle = $debtorHandle;
      $this->name = $name;
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
     * @return \Economic\DebtorContact_Create
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Economic\DebtorContact_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
