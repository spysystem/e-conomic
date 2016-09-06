<?php

namespace Economic;

class Debtor_FindByNumberListResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_FindByNumberListResult
     */
    protected $Debtor_FindByNumberListResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByNumberListResult
     */
    public function __construct($Debtor_FindByNumberListResult)
    {
      $this->Debtor_FindByNumberListResult = $Debtor_FindByNumberListResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_FindByNumberListResult()
    {
      return $this->Debtor_FindByNumberListResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByNumberListResult
     * @return \Economic\Debtor_FindByNumberListResponse
     */
    public function setDebtor_FindByNumberListResult($Debtor_FindByNumberListResult)
    {
      $this->Debtor_FindByNumberListResult = $Debtor_FindByNumberListResult;
      return $this;
    }

}
