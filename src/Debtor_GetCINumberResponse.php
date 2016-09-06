<?php

namespace Economic;

class Debtor_GetCINumberResponse
{

    /**
     * @var string $Debtor_GetCINumberResult
     */
    protected $Debtor_GetCINumberResult = null;

    /**
     * @param string $Debtor_GetCINumberResult
     */
    public function __construct($Debtor_GetCINumberResult)
    {
      $this->Debtor_GetCINumberResult = $Debtor_GetCINumberResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetCINumberResult()
    {
      return $this->Debtor_GetCINumberResult;
    }

    /**
     * @param string $Debtor_GetCINumberResult
     * @return \Economic\Debtor_GetCINumberResponse
     */
    public function setDebtor_GetCINumberResult($Debtor_GetCINumberResult)
    {
      $this->Debtor_GetCINumberResult = $Debtor_GetCINumberResult;
      return $this;
    }

}
