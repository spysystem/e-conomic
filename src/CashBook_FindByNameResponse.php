<?php

namespace Economic;

class CashBook_FindByNameResponse
{

    /**
     * @var CashBookHandle $CashBook_FindByNameResult
     */
    protected $CashBook_FindByNameResult = null;

    /**
     * @param CashBookHandle $CashBook_FindByNameResult
     */
    public function __construct($CashBook_FindByNameResult)
    {
      $this->CashBook_FindByNameResult = $CashBook_FindByNameResult;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBook_FindByNameResult()
    {
      return $this->CashBook_FindByNameResult;
    }

    /**
     * @param CashBookHandle $CashBook_FindByNameResult
     * @return \Economic\CashBook_FindByNameResponse
     */
    public function setCashBook_FindByNameResult($CashBook_FindByNameResult)
    {
      $this->CashBook_FindByNameResult = $CashBook_FindByNameResult;
      return $this;
    }

}
