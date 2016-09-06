<?php

namespace Economic;

class DebtorContact_FindByNameResponse
{

    /**
     * @var ArrayOfDebtorContactHandle $DebtorContact_FindByNameResult
     */
    protected $DebtorContact_FindByNameResult = null;

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_FindByNameResult
     */
    public function __construct($DebtorContact_FindByNameResult)
    {
      $this->DebtorContact_FindByNameResult = $DebtorContact_FindByNameResult;
    }

    /**
     * @return ArrayOfDebtorContactHandle
     */
    public function getDebtorContact_FindByNameResult()
    {
      return $this->DebtorContact_FindByNameResult;
    }

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_FindByNameResult
     * @return \Economic\DebtorContact_FindByNameResponse
     */
    public function setDebtorContact_FindByNameResult($DebtorContact_FindByNameResult)
    {
      $this->DebtorContact_FindByNameResult = $DebtorContact_FindByNameResult;
      return $this;
    }

}
