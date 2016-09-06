<?php

namespace Economic;

class Creditor_SetCreditorGroup
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var CreditorGroupHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param CreditorGroupHandle $valueHandle
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
     * @return \Economic\Creditor_SetCreditorGroup
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param CreditorGroupHandle $valueHandle
     * @return \Economic\Creditor_SetCreditorGroup
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
