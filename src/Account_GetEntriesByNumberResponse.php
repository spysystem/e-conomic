<?php

namespace Economic;

class Account_GetEntriesByNumberResponse
{

    /**
     * @var ArrayOfEntryHandle $Account_GetEntriesByNumberResult
     */
    protected $Account_GetEntriesByNumberResult = null;

    /**
     * @param ArrayOfEntryHandle $Account_GetEntriesByNumberResult
     */
    public function __construct($Account_GetEntriesByNumberResult)
    {
      $this->Account_GetEntriesByNumberResult = $Account_GetEntriesByNumberResult;
    }

    /**
     * @return ArrayOfEntryHandle
     */
    public function getAccount_GetEntriesByNumberResult()
    {
      return $this->Account_GetEntriesByNumberResult;
    }

    /**
     * @param ArrayOfEntryHandle $Account_GetEntriesByNumberResult
     * @return \Economic\Account_GetEntriesByNumberResponse
     */
    public function setAccount_GetEntriesByNumberResult($Account_GetEntriesByNumberResult)
    {
      $this->Account_GetEntriesByNumberResult = $Account_GetEntriesByNumberResult;
      return $this;
    }

}
