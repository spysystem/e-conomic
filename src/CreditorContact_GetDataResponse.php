<?php

namespace Economic;

class CreditorContact_GetDataResponse
{

    /**
     * @var CreditorContactData $CreditorContact_GetDataResult
     */
    protected $CreditorContact_GetDataResult = null;

    /**
     * @param CreditorContactData $CreditorContact_GetDataResult
     */
    public function __construct($CreditorContact_GetDataResult)
    {
      $this->CreditorContact_GetDataResult = $CreditorContact_GetDataResult;
    }

    /**
     * @return CreditorContactData
     */
    public function getCreditorContact_GetDataResult()
    {
      return $this->CreditorContact_GetDataResult;
    }

    /**
     * @param CreditorContactData $CreditorContact_GetDataResult
     * @return \Economic\CreditorContact_GetDataResponse
     */
    public function setCreditorContact_GetDataResult($CreditorContact_GetDataResult)
    {
      $this->CreditorContact_GetDataResult = $CreditorContact_GetDataResult;
      return $this;
    }

}
