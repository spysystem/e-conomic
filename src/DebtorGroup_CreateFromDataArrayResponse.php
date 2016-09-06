<?php

namespace Economic;

class DebtorGroup_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfDebtorGroupHandle $DebtorGroup_CreateFromDataArrayResult
     */
    protected $DebtorGroup_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_CreateFromDataArrayResult
     */
    public function __construct($DebtorGroup_CreateFromDataArrayResult)
    {
      $this->DebtorGroup_CreateFromDataArrayResult = $DebtorGroup_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorGroupHandle
     */
    public function getDebtorGroup_CreateFromDataArrayResult()
    {
      return $this->DebtorGroup_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_CreateFromDataArrayResult
     * @return \Economic\DebtorGroup_CreateFromDataArrayResponse
     */
    public function setDebtorGroup_CreateFromDataArrayResult($DebtorGroup_CreateFromDataArrayResult)
    {
      $this->DebtorGroup_CreateFromDataArrayResult = $DebtorGroup_CreateFromDataArrayResult;
      return $this;
    }

}
