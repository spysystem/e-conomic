<?php

namespace Economic;

class CashBook_GetNameResponse
{

    /**
     * @var string $CashBook_GetNameResult
     */
    protected $CashBook_GetNameResult = null;

    /**
     * @param string $CashBook_GetNameResult
     */
    public function __construct($CashBook_GetNameResult)
    {
      $this->CashBook_GetNameResult = $CashBook_GetNameResult;
    }

    /**
     * @return string
     */
    public function getCashBook_GetNameResult()
    {
      return $this->CashBook_GetNameResult;
    }

    /**
     * @param string $CashBook_GetNameResult
     * @return \Economic\CashBook_GetNameResponse
     */
    public function setCashBook_GetNameResult($CashBook_GetNameResult)
    {
      $this->CashBook_GetNameResult = $CashBook_GetNameResult;
      return $this;
    }

}
