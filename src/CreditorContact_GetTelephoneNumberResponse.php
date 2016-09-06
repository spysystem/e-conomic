<?php

namespace Economic;

class CreditorContact_GetTelephoneNumberResponse
{

    /**
     * @var string $CreditorContact_GetTelephoneNumberResult
     */
    protected $CreditorContact_GetTelephoneNumberResult = null;

    /**
     * @param string $CreditorContact_GetTelephoneNumberResult
     */
    public function __construct($CreditorContact_GetTelephoneNumberResult)
    {
      $this->CreditorContact_GetTelephoneNumberResult = $CreditorContact_GetTelephoneNumberResult;
    }

    /**
     * @return string
     */
    public function getCreditorContact_GetTelephoneNumberResult()
    {
      return $this->CreditorContact_GetTelephoneNumberResult;
    }

    /**
     * @param string $CreditorContact_GetTelephoneNumberResult
     * @return \Economic\CreditorContact_GetTelephoneNumberResponse
     */
    public function setCreditorContact_GetTelephoneNumberResult($CreditorContact_GetTelephoneNumberResult)
    {
      $this->CreditorContact_GetTelephoneNumberResult = $CreditorContact_GetTelephoneNumberResult;
      return $this;
    }

}
