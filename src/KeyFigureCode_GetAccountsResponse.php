<?php

namespace Economic;

class KeyFigureCode_GetAccountsResponse
{

    /**
     * @var ArrayOfAccountHandle $KeyFigureCode_GetAccountsResult
     */
    protected $KeyFigureCode_GetAccountsResult = null;

    /**
     * @param ArrayOfAccountHandle $KeyFigureCode_GetAccountsResult
     */
    public function __construct($KeyFigureCode_GetAccountsResult)
    {
      $this->KeyFigureCode_GetAccountsResult = $KeyFigureCode_GetAccountsResult;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getKeyFigureCode_GetAccountsResult()
    {
      return $this->KeyFigureCode_GetAccountsResult;
    }

    /**
     * @param ArrayOfAccountHandle $KeyFigureCode_GetAccountsResult
     * @return \Economic\KeyFigureCode_GetAccountsResponse
     */
    public function setKeyFigureCode_GetAccountsResult($KeyFigureCode_GetAccountsResult)
    {
      $this->KeyFigureCode_GetAccountsResult = $KeyFigureCode_GetAccountsResult;
      return $this;
    }

}
