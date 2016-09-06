<?php

namespace Economic;

class Debtor_GetVatNumberResponse
{

    /**
     * @var string $Debtor_GetVatNumberResult
     */
    protected $Debtor_GetVatNumberResult = null;

    /**
     * @param string $Debtor_GetVatNumberResult
     */
    public function __construct($Debtor_GetVatNumberResult)
    {
      $this->Debtor_GetVatNumberResult = $Debtor_GetVatNumberResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetVatNumberResult()
    {
      return $this->Debtor_GetVatNumberResult;
    }

    /**
     * @param string $Debtor_GetVatNumberResult
     * @return \Economic\Debtor_GetVatNumberResponse
     */
    public function setDebtor_GetVatNumberResult($Debtor_GetVatNumberResult)
    {
      $this->Debtor_GetVatNumberResult = $Debtor_GetVatNumberResult;
      return $this;
    }

}
