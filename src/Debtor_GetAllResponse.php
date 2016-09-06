<?php

namespace Economic;

class Debtor_GetAllResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_GetAllResult
     */
    protected $Debtor_GetAllResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_GetAllResult
     */
    public function __construct($Debtor_GetAllResult)
    {
      $this->Debtor_GetAllResult = $Debtor_GetAllResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_GetAllResult()
    {
      return $this->Debtor_GetAllResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_GetAllResult
     * @return \Economic\Debtor_GetAllResponse
     */
    public function setDebtor_GetAllResult($Debtor_GetAllResult)
    {
      $this->Debtor_GetAllResult = $Debtor_GetAllResult;
      return $this;
    }

}
