<?php

namespace Economic;

class Creditor_GetOurReference
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @param CreditorHandle $creditorHandle
     */
    public function __construct($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
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
     * @return \Economic\Creditor_GetOurReference
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

}
