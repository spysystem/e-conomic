<?php

namespace Economic;

class DebtorGroup_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfDebtorGroupHandle $DebtorGroup_UpdateFromDataArrayResult
     */
    protected $DebtorGroup_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_UpdateFromDataArrayResult
     */
    public function __construct($DebtorGroup_UpdateFromDataArrayResult)
    {
      $this->DebtorGroup_UpdateFromDataArrayResult = $DebtorGroup_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorGroupHandle
     */
    public function getDebtorGroup_UpdateFromDataArrayResult()
    {
      return $this->DebtorGroup_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_UpdateFromDataArrayResult
     * @return \Economic\DebtorGroup_UpdateFromDataArrayResponse
     */
    public function setDebtorGroup_UpdateFromDataArrayResult($DebtorGroup_UpdateFromDataArrayResult)
    {
      $this->DebtorGroup_UpdateFromDataArrayResult = $DebtorGroup_UpdateFromDataArrayResult;
      return $this;
    }

}
