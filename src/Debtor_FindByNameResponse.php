<?php

namespace Economic;

class Debtor_FindByNameResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_FindByNameResult
     */
    protected $Debtor_FindByNameResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByNameResult
     */
    public function __construct($Debtor_FindByNameResult)
    {
      $this->Debtor_FindByNameResult = $Debtor_FindByNameResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_FindByNameResult()
    {
      return $this->Debtor_FindByNameResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByNameResult
     * @return \Economic\Debtor_FindByNameResponse
     */
    public function setDebtor_FindByNameResult($Debtor_FindByNameResult)
    {
      $this->Debtor_FindByNameResult = $Debtor_FindByNameResult;
      return $this;
    }

}
