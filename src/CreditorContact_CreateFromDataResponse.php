<?php

namespace Economic;

class CreditorContact_CreateFromDataResponse
{

    /**
     * @var CreditorContactHandle $CreditorContact_CreateFromDataResult
     */
    protected $CreditorContact_CreateFromDataResult = null;

    /**
     * @param CreditorContactHandle $CreditorContact_CreateFromDataResult
     */
    public function __construct($CreditorContact_CreateFromDataResult)
    {
      $this->CreditorContact_CreateFromDataResult = $CreditorContact_CreateFromDataResult;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getCreditorContact_CreateFromDataResult()
    {
      return $this->CreditorContact_CreateFromDataResult;
    }

    /**
     * @param CreditorContactHandle $CreditorContact_CreateFromDataResult
     * @return \Economic\CreditorContact_CreateFromDataResponse
     */
    public function setCreditorContact_CreateFromDataResult($CreditorContact_CreateFromDataResult)
    {
      $this->CreditorContact_CreateFromDataResult = $CreditorContact_CreateFromDataResult;
      return $this;
    }

}
