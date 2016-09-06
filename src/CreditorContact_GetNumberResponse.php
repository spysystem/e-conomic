<?php

namespace Economic;

class CreditorContact_GetNumberResponse
{

    /**
     * @var int $CreditorContact_GetNumberResult
     */
    protected $CreditorContact_GetNumberResult = null;

    /**
     * @param int $CreditorContact_GetNumberResult
     */
    public function __construct($CreditorContact_GetNumberResult)
    {
      $this->CreditorContact_GetNumberResult = $CreditorContact_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getCreditorContact_GetNumberResult()
    {
      return $this->CreditorContact_GetNumberResult;
    }

    /**
     * @param int $CreditorContact_GetNumberResult
     * @return \Economic\CreditorContact_GetNumberResponse
     */
    public function setCreditorContact_GetNumberResult($CreditorContact_GetNumberResult)
    {
      $this->CreditorContact_GetNumberResult = $CreditorContact_GetNumberResult;
      return $this;
    }

}
