<?php

namespace Economic;

class Entry_GetAccountResponse
{

    /**
     * @var AccountHandle $Entry_GetAccountResult
     */
    protected $Entry_GetAccountResult = null;

    /**
     * @param AccountHandle $Entry_GetAccountResult
     */
    public function __construct($Entry_GetAccountResult)
    {
      $this->Entry_GetAccountResult = $Entry_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getEntry_GetAccountResult()
    {
      return $this->Entry_GetAccountResult;
    }

    /**
     * @param AccountHandle $Entry_GetAccountResult
     * @return \Economic\Entry_GetAccountResponse
     */
    public function setEntry_GetAccountResult($Entry_GetAccountResult)
    {
      $this->Entry_GetAccountResult = $Entry_GetAccountResult;
      return $this;
    }

}
