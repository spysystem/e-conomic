<?php

namespace Economic;

class DebtorContact_GetTelephoneNumberResponse
{

    /**
     * @var string $DebtorContact_GetTelephoneNumberResult
     */
    protected $DebtorContact_GetTelephoneNumberResult = null;

    /**
     * @param string $DebtorContact_GetTelephoneNumberResult
     */
    public function __construct($DebtorContact_GetTelephoneNumberResult)
    {
      $this->DebtorContact_GetTelephoneNumberResult = $DebtorContact_GetTelephoneNumberResult;
    }

    /**
     * @return string
     */
    public function getDebtorContact_GetTelephoneNumberResult()
    {
      return $this->DebtorContact_GetTelephoneNumberResult;
    }

    /**
     * @param string $DebtorContact_GetTelephoneNumberResult
     * @return \Economic\DebtorContact_GetTelephoneNumberResponse
     */
    public function setDebtorContact_GetTelephoneNumberResult($DebtorContact_GetTelephoneNumberResult)
    {
      $this->DebtorContact_GetTelephoneNumberResult = $DebtorContact_GetTelephoneNumberResult;
      return $this;
    }

}
