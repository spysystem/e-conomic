<?php

namespace Economic;

class CreditorGroup_GetNumber
{

    /**
     * @var CreditorGroupHandle $creditorGroupHandle
     */
    protected $creditorGroupHandle = null;

    /**
     * @param CreditorGroupHandle $creditorGroupHandle
     */
    public function __construct($creditorGroupHandle)
    {
      $this->creditorGroupHandle = $creditorGroupHandle;
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
     * @return \Economic\CreditorGroup_GetNumber
     */
    public function setCreditorGroupHandle($creditorGroupHandle)
    {
      $this->creditorGroupHandle = $creditorGroupHandle;
      return $this;
    }

}
