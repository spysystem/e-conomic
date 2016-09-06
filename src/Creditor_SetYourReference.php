<?php

namespace Economic;

class Creditor_SetYourReference
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var CreditorContactHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param CreditorContactHandle $valueHandle
     */
    public function __construct($creditorHandle, $valueHandle)
    {
      $this->creditorHandle = $creditorHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\Creditor_SetYourReference
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param CreditorContactHandle $valueHandle
     * @return \Economic\Creditor_SetYourReference
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
