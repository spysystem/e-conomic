<?php

namespace Economic;

class Debtor_Create
{

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var DebtorGroupHandle $debtorGroupHandle
     */
    protected $debtorGroupHandle = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var VatZone $vatZone
     */
    protected $vatZone = null;

    /**
     * @param string $number
     * @param DebtorGroupHandle $debtorGroupHandle
     * @param string $name
     * @param VatZone $vatZone
     */
    public function __construct($number, $debtorGroupHandle, $name, $vatZone)
    {
      $this->number = $number;
      $this->debtorGroupHandle = $debtorGroupHandle;
      $this->name = $name;
      $this->vatZone = $vatZone;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \Economic\Debtor_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
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
     * @return \Economic\Debtor_Create
     */
    public function setDebtorGroupHandle($debtorGroupHandle)
    {
      $this->debtorGroupHandle = $debtorGroupHandle;
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
     * @return \Economic\Debtor_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return VatZone
     */
    public function getVatZone()
    {
      return $this->vatZone;
    }

    /**
     * @param VatZone $vatZone
     * @return \Economic\Debtor_Create
     */
    public function setVatZone($vatZone)
    {
      $this->vatZone = $vatZone;
      return $this;
    }

}
