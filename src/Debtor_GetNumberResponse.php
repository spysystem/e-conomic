<?php

namespace Economic;

class Debtor_GetNumberResponse
{

    /**
     * @var string $Debtor_GetNumberResult
     */
    protected $Debtor_GetNumberResult = null;

    /**
     * @param string $Debtor_GetNumberResult
     */
    public function __construct($Debtor_GetNumberResult)
    {
      $this->Debtor_GetNumberResult = $Debtor_GetNumberResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetNumberResult()
    {
      return $this->Debtor_GetNumberResult;
    }

    /**
     * @param string $Debtor_GetNumberResult
     * @return \Economic\Debtor_GetNumberResponse
     */
    public function setDebtor_GetNumberResult($Debtor_GetNumberResult)
    {
      $this->Debtor_GetNumberResult = $Debtor_GetNumberResult;
      return $this;
    }

}
