<?php

namespace Economic;

class Debtor_FindByPartialNameResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_FindByPartialNameResult
     */
    protected $Debtor_FindByPartialNameResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByPartialNameResult
     */
    public function __construct($Debtor_FindByPartialNameResult)
    {
      $this->Debtor_FindByPartialNameResult = $Debtor_FindByPartialNameResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_FindByPartialNameResult()
    {
      return $this->Debtor_FindByPartialNameResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByPartialNameResult
     * @return \Economic\Debtor_FindByPartialNameResponse
     */
    public function setDebtor_FindByPartialNameResult($Debtor_FindByPartialNameResult)
    {
      $this->Debtor_FindByPartialNameResult = $Debtor_FindByPartialNameResult;
      return $this;
    }

}
