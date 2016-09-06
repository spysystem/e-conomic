<?php

namespace Economic;

class CashBookEntry_GetTextResponse
{

    /**
     * @var string $CashBookEntry_GetTextResult
     */
    protected $CashBookEntry_GetTextResult = null;

    /**
     * @param string $CashBookEntry_GetTextResult
     */
    public function __construct($CashBookEntry_GetTextResult)
    {
      $this->CashBookEntry_GetTextResult = $CashBookEntry_GetTextResult;
    }

    /**
     * @return string
     */
    public function getCashBookEntry_GetTextResult()
    {
      return $this->CashBookEntry_GetTextResult;
    }

    /**
     * @param string $CashBookEntry_GetTextResult
     * @return \Economic\CashBookEntry_GetTextResponse
     */
    public function setCashBookEntry_GetTextResult($CashBookEntry_GetTextResult)
    {
      $this->CashBookEntry_GetTextResult = $CashBookEntry_GetTextResult;
      return $this;
    }

}
