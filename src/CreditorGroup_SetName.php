<?php

namespace Economic;

class CreditorGroup_SetName
{

    /**
     * @var CreditorGroupHandle $creditorGroupHandle
     */
    protected $creditorGroupHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CreditorGroupHandle $creditorGroupHandle
     * @param string $value
     */
    public function __construct($creditorGroupHandle, $value)
    {
      $this->creditorGroupHandle = $creditorGroupHandle;
      $this->value = $value;
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
     * @return \Economic\CreditorGroup_SetName
     */
    public function setCreditorGroupHandle($creditorGroupHandle)
    {
      $this->creditorGroupHandle = $creditorGroupHandle;
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
     * @return \Economic\CreditorGroup_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
