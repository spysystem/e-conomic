<?php

namespace Economic;

class Debtor_FindByEanResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_FindByEanResult
     */
    protected $Debtor_FindByEanResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByEanResult
     */
    public function __construct($Debtor_FindByEanResult)
    {
      $this->Debtor_FindByEanResult = $Debtor_FindByEanResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_FindByEanResult()
    {
      return $this->Debtor_FindByEanResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByEanResult
     * @return \Economic\Debtor_FindByEanResponse
     */
    public function setDebtor_FindByEanResult($Debtor_FindByEanResult)
    {
      $this->Debtor_FindByEanResult = $Debtor_FindByEanResult;
      return $this;
    }

}
