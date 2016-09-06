<?php

namespace Economic;

class DebtorGroup_FindByNameResponse
{

    /**
     * @var ArrayOfDebtorGroupHandle $DebtorGroup_FindByNameResult
     */
    protected $DebtorGroup_FindByNameResult = null;

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_FindByNameResult
     */
    public function __construct($DebtorGroup_FindByNameResult)
    {
      $this->DebtorGroup_FindByNameResult = $DebtorGroup_FindByNameResult;
    }

    /**
     * @return ArrayOfDebtorGroupHandle
     */
    public function getDebtorGroup_FindByNameResult()
    {
      return $this->DebtorGroup_FindByNameResult;
    }

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_FindByNameResult
     * @return \Economic\DebtorGroup_FindByNameResponse
     */
    public function setDebtorGroup_FindByNameResult($DebtorGroup_FindByNameResult)
    {
      $this->DebtorGroup_FindByNameResult = $DebtorGroup_FindByNameResult;
      return $this;
    }

}
