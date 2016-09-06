<?php

namespace Economic;

class Debtor_GetTelephoneAndFaxNumberResponse
{

    /**
     * @var string $Debtor_GetTelephoneAndFaxNumberResult
     */
    protected $Debtor_GetTelephoneAndFaxNumberResult = null;

    /**
     * @param string $Debtor_GetTelephoneAndFaxNumberResult
     */
    public function __construct($Debtor_GetTelephoneAndFaxNumberResult)
    {
      $this->Debtor_GetTelephoneAndFaxNumberResult = $Debtor_GetTelephoneAndFaxNumberResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetTelephoneAndFaxNumberResult()
    {
      return $this->Debtor_GetTelephoneAndFaxNumberResult;
    }

    /**
     * @param string $Debtor_GetTelephoneAndFaxNumberResult
     * @return \Economic\Debtor_GetTelephoneAndFaxNumberResponse
     */
    public function setDebtor_GetTelephoneAndFaxNumberResult($Debtor_GetTelephoneAndFaxNumberResult)
    {
      $this->Debtor_GetTelephoneAndFaxNumberResult = $Debtor_GetTelephoneAndFaxNumberResult;
      return $this;
    }

}
