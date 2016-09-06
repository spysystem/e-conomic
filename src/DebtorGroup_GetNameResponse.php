<?php

namespace Economic;

class DebtorGroup_GetNameResponse
{

    /**
     * @var string $DebtorGroup_GetNameResult
     */
    protected $DebtorGroup_GetNameResult = null;

    /**
     * @param string $DebtorGroup_GetNameResult
     */
    public function __construct($DebtorGroup_GetNameResult)
    {
      $this->DebtorGroup_GetNameResult = $DebtorGroup_GetNameResult;
    }

    /**
     * @return string
     */
    public function getDebtorGroup_GetNameResult()
    {
      return $this->DebtorGroup_GetNameResult;
    }

    /**
     * @param string $DebtorGroup_GetNameResult
     * @return \Economic\DebtorGroup_GetNameResponse
     */
    public function setDebtorGroup_GetNameResult($DebtorGroup_GetNameResult)
    {
      $this->DebtorGroup_GetNameResult = $DebtorGroup_GetNameResult;
      return $this;
    }

}
