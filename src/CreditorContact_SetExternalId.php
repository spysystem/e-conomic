<?php

namespace Economic;

class CreditorContact_SetExternalId
{

    /**
     * @var CreditorContactHandle $creditorContactHandle
     */
    protected $creditorContactHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CreditorContactHandle $creditorContactHandle
     * @param string $value
     */
    public function __construct($creditorContactHandle, $value)
    {
      $this->creditorContactHandle = $creditorContactHandle;
      $this->value = $value;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getCreditorContactHandle()
    {
      return $this->creditorContactHandle;
    }

    /**
     * @param CreditorContactHandle $creditorContactHandle
     * @return \Economic\CreditorContact_SetExternalId
     */
    public function setCreditorContactHandle($creditorContactHandle)
    {
      $this->creditorContactHandle = $creditorContactHandle;
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
     * @return \Economic\CreditorContact_SetExternalId
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
