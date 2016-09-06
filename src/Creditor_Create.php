<?php

namespace Economic;

class Creditor_Create
{

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var CreditorGroupHandle $creditorGroupHandle
     */
    protected $creditorGroupHandle = null;

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
     * @param CreditorGroupHandle $creditorGroupHandle
     * @param string $name
     * @param VatZone $vatZone
     */
    public function __construct($number, $creditorGroupHandle, $name, $vatZone)
    {
      $this->number = $number;
      $this->creditorGroupHandle = $creditorGroupHandle;
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
     * @return \Economic\Creditor_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getCreditorGroupHandle()
    {
      return $this->creditorGroupHandle;
    }

    /**
     * @param CreditorGroupHandle $creditorGroupHandle
     * @return \Economic\Creditor_Create
     */
    public function setCreditorGroupHandle($creditorGroupHandle)
    {
      $this->creditorGroupHandle = $creditorGroupHandle;
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
     * @return \Economic\Creditor_Create
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
     * @return \Economic\Creditor_Create
     */
    public function setVatZone($vatZone)
    {
      $this->vatZone = $vatZone;
      return $this;
    }

}
