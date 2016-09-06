<?php

namespace Economic;

class CreditorEntry_GetSerialNumber
{

    /**
     * @var CreditorEntryHandle $creditorEntryHandle
     */
    protected $creditorEntryHandle = null;

    /**
     * @param CreditorEntryHandle $creditorEntryHandle
     */
    public function __construct($creditorEntryHandle)
    {
      $this->creditorEntryHandle = $creditorEntryHandle;
    }

    /**
     * @return CreditorEntryHandle
     */
    public function getCreditorEntryHandle()
    {
      return $this->creditorEntryHandle;
    }

    /**
     * @param CreditorEntryHandle $creditorEntryHandle
     * @return \Economic\CreditorEntry_GetSerialNumber
     */
    public function setCreditorEntryHandle($creditorEntryHandle)
    {
      $this->creditorEntryHandle = $creditorEntryHandle;
      return $this;
    }

}
