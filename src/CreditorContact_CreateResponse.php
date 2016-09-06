<?php

namespace Economic;

class CreditorContact_CreateResponse
{

    /**
     * @var CreditorContactHandle $CreditorContact_CreateResult
     */
    protected $CreditorContact_CreateResult = null;

    /**
     * @param CreditorContactHandle $CreditorContact_CreateResult
     */
    public function __construct($CreditorContact_CreateResult)
    {
      $this->CreditorContact_CreateResult = $CreditorContact_CreateResult;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getCreditorContact_CreateResult()
    {
      return $this->CreditorContact_CreateResult;
    }

    /**
     * @param CreditorContactHandle $CreditorContact_CreateResult
     * @return \Economic\CreditorContact_CreateResponse
     */
    public function setCreditorContact_CreateResult($CreditorContact_CreateResult)
    {
      $this->CreditorContact_CreateResult = $CreditorContact_CreateResult;
      return $this;
    }

}
