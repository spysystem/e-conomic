<?php

namespace Economic;

class Creditor_SetIsAccessible
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param boolean $value
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
     * @return \Economic\Creditor_SetIsAccessible
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
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
     * @return \Economic\Creditor_SetIsAccessible
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
