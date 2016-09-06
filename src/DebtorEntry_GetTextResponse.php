<?php

namespace Economic;

class DebtorEntry_GetTextResponse
{

    /**
     * @var string $DebtorEntry_GetTextResult
     */
    protected $DebtorEntry_GetTextResult = null;

    /**
     * @param string $DebtorEntry_GetTextResult
     */
    public function __construct($DebtorEntry_GetTextResult)
    {
      $this->DebtorEntry_GetTextResult = $DebtorEntry_GetTextResult;
    }

    /**
     * @return string
     */
    public function getDebtorEntry_GetTextResult()
    {
      return $this->DebtorEntry_GetTextResult;
    }

    /**
     * @param string $DebtorEntry_GetTextResult
     * @return \Economic\DebtorEntry_GetTextResponse
     */
    public function setDebtorEntry_GetTextResult($DebtorEntry_GetTextResult)
    {
      $this->DebtorEntry_GetTextResult = $DebtorEntry_GetTextResult;
      return $this;
    }

}
