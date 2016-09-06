<?php

namespace Economic;

class CreditorGroup_SetAccount
{

    /**
     * @var CreditorGroupHandle $creditorGroupHandle
     */
    protected $creditorGroupHandle = null;

    /**
     * @var AccountHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CreditorGroupHandle $creditorGroupHandle
     * @param AccountHandle $valueHandle
     */
    public function __construct($creditorGroupHandle, $valueHandle)
    {
      $this->creditorGroupHandle = $creditorGroupHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\CreditorGroup_SetAccount
     */
    public function setCreditorGroupHandle($creditorGroupHandle)
    {
      $this->creditorGroupHandle = $creditorGroupHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param AccountHandle $valueHandle
     * @return \Economic\CreditorGroup_SetAccount
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
