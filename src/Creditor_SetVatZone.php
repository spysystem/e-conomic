<?php

namespace Economic;

class Creditor_SetVatZone
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var VatZone $value
     */
    protected $value = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param VatZone $value
     */
    public function __construct($creditorHandle, $value)
    {
      $this->creditorHandle = $creditorHandle;
      $this->value = $value;
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
     * @return \Economic\Creditor_SetVatZone
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return VatZone
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param VatZone $value
     * @return \Economic\Creditor_SetVatZone
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
