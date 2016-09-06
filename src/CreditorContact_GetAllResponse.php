<?php

namespace Economic;

class CreditorContact_GetAllResponse
{

    /**
     * @var ArrayOfCreditorContactHandle $CreditorContact_GetAllResult
     */
    protected $CreditorContact_GetAllResult = null;

    /**
     * @param ArrayOfCreditorContactHandle $CreditorContact_GetAllResult
     */
    public function __construct($CreditorContact_GetAllResult)
    {
      $this->CreditorContact_GetAllResult = $CreditorContact_GetAllResult;
    }

    /**
     * @return ArrayOfCreditorContactHandle
     */
    public function getCreditorContact_GetAllResult()
    {
      return $this->CreditorContact_GetAllResult;
    }

    /**
     * @param ArrayOfCreditorContactHandle $CreditorContact_GetAllResult
     * @return \Economic\CreditorContact_GetAllResponse
     */
    public function setCreditorContact_GetAllResult($CreditorContact_GetAllResult)
    {
      $this->CreditorContact_GetAllResult = $CreditorContact_GetAllResult;
      return $this;
    }

}
