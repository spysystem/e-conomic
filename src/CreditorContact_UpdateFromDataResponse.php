<?php

namespace Economic;

class CreditorContact_UpdateFromDataResponse
{

    /**
     * @var CreditorContactHandle $CreditorContact_UpdateFromDataResult
     */
    protected $CreditorContact_UpdateFromDataResult = null;

    /**
     * @param CreditorContactHandle $CreditorContact_UpdateFromDataResult
     */
    public function __construct($CreditorContact_UpdateFromDataResult)
    {
      $this->CreditorContact_UpdateFromDataResult = $CreditorContact_UpdateFromDataResult;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getCreditorContact_UpdateFromDataResult()
    {
      return $this->CreditorContact_UpdateFromDataResult;
    }

    /**
     * @param CreditorContactHandle $CreditorContact_UpdateFromDataResult
     * @return \Economic\CreditorContact_UpdateFromDataResponse
     */
    public function setCreditorContact_UpdateFromDataResult($CreditorContact_UpdateFromDataResult)
    {
      $this->CreditorContact_UpdateFromDataResult = $CreditorContact_UpdateFromDataResult;
      return $this;
    }

}
