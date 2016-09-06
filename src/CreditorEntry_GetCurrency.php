<?php

namespace Economic;

class CreditorEntry_GetCurrency
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
     * @return \Economic\CreditorEntry_GetCurrency
     */
    public function setCreditorEntryHandle($creditorEntryHandle)
    {
      $this->creditorEntryHandle = $creditorEntryHandle;
      return $this;
    }

}
