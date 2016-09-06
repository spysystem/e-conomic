<?php

namespace Economic;

class DebtorGroup_GetDataArrayResponse
{

    /**
     * @var ArrayOfDebtorGroupData $DebtorGroup_GetDataArrayResult
     */
    protected $DebtorGroup_GetDataArrayResult = null;

    /**
     * @param ArrayOfDebtorGroupData $DebtorGroup_GetDataArrayResult
     */
    public function __construct($DebtorGroup_GetDataArrayResult)
    {
      $this->DebtorGroup_GetDataArrayResult = $DebtorGroup_GetDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorGroupData
     */
    public function getDebtorGroup_GetDataArrayResult()
    {
      return $this->DebtorGroup_GetDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorGroupData $DebtorGroup_GetDataArrayResult
     * @return \Economic\DebtorGroup_GetDataArrayResponse
     */
    public function setDebtorGroup_GetDataArrayResult($DebtorGroup_GetDataArrayResult)
    {
      $this->DebtorGroup_GetDataArrayResult = $DebtorGroup_GetDataArrayResult;
      return $this;
    }

}
