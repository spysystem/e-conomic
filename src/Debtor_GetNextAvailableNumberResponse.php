<?php

namespace Economic;

class Debtor_GetNextAvailableNumberResponse
{

    /**
     * @var int $Debtor_GetNextAvailableNumberResult
     */
    protected $Debtor_GetNextAvailableNumberResult = null;

    /**
     * @param int $Debtor_GetNextAvailableNumberResult
     */
    public function __construct($Debtor_GetNextAvailableNumberResult)
    {
      $this->Debtor_GetNextAvailableNumberResult = $Debtor_GetNextAvailableNumberResult;
    }

    /**
     * @return int
     */
    public function getDebtor_GetNextAvailableNumberResult()
    {
      return $this->Debtor_GetNextAvailableNumberResult;
    }

    /**
     * @param int $Debtor_GetNextAvailableNumberResult
     * @return \Economic\Debtor_GetNextAvailableNumberResponse
     */
    public function setDebtor_GetNextAvailableNumberResult($Debtor_GetNextAvailableNumberResult)
    {
      $this->Debtor_GetNextAvailableNumberResult = $Debtor_GetNextAvailableNumberResult;
      return $this;
    }

}
