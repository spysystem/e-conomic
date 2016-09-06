<?php

namespace Economic;

class CreditorGroup_CreateResponse
{

    /**
     * @var CreditorGroupHandle $CreditorGroup_CreateResult
     */
    protected $CreditorGroup_CreateResult = null;

    /**
     * @param CreditorGroupHandle $CreditorGroup_CreateResult
     */
    public function __construct($CreditorGroup_CreateResult)
    {
      $this->CreditorGroup_CreateResult = $CreditorGroup_CreateResult;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getCreditorGroup_CreateResult()
    {
      return $this->CreditorGroup_CreateResult;
    }

    /**
     * @param CreditorGroupHandle $CreditorGroup_CreateResult
     * @return \Economic\CreditorGroup_CreateResponse
     */
    public function setCreditorGroup_CreateResult($CreditorGroup_CreateResult)
    {
      $this->CreditorGroup_CreateResult = $CreditorGroup_CreateResult;
      return $this;
    }

}
