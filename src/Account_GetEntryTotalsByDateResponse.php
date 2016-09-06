<?php

namespace Economic;

class Account_GetEntryTotalsByDateResponse
{

    /**
     * @var ArrayOfDecimal $Account_GetEntryTotalsByDateResult
     */
    protected $Account_GetEntryTotalsByDateResult = null;

    /**
     * @param ArrayOfDecimal $Account_GetEntryTotalsByDateResult
     */
    public function __construct($Account_GetEntryTotalsByDateResult)
    {
      $this->Account_GetEntryTotalsByDateResult = $Account_GetEntryTotalsByDateResult;
    }

    /**
     * @return ArrayOfDecimal
     */
    public function getAccount_GetEntryTotalsByDateResult()
    {
      return $this->Account_GetEntryTotalsByDateResult;
    }

    /**
     * @param ArrayOfDecimal $Account_GetEntryTotalsByDateResult
     * @return \Economic\Account_GetEntryTotalsByDateResponse
     */
    public function setAccount_GetEntryTotalsByDateResult($Account_GetEntryTotalsByDateResult)
    {
      $this->Account_GetEntryTotalsByDateResult = $Account_GetEntryTotalsByDateResult;
      return $this;
    }

}
