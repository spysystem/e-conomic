<?php

namespace Economic;

class Creditor_SetAddress
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param string $value
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
     * @return \Economic\Creditor_SetAddress
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
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
     * @return \Economic\Creditor_SetAddress
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
