<?php

namespace Economic;

class Debtor_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_GetAllUpdatedResult
     */
    protected $Debtor_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_GetAllUpdatedResult
     */
    public function __construct($Debtor_GetAllUpdatedResult)
    {
      $this->Debtor_GetAllUpdatedResult = $Debtor_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_GetAllUpdatedResult()
    {
      return $this->Debtor_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_GetAllUpdatedResult
     * @return \Economic\Debtor_GetAllUpdatedResponse
     */
    public function setDebtor_GetAllUpdatedResult($Debtor_GetAllUpdatedResult)
    {
      $this->Debtor_GetAllUpdatedResult = $Debtor_GetAllUpdatedResult;
      return $this;
    }

}
