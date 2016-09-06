<?php

namespace Economic;

class Account_GetEntriesByDateResponse
{

    /**
     * @var ArrayOfEntryHandle $Account_GetEntriesByDateResult
     */
    protected $Account_GetEntriesByDateResult = null;

    /**
     * @param ArrayOfEntryHandle $Account_GetEntriesByDateResult
     */
    public function __construct($Account_GetEntriesByDateResult)
    {
      $this->Account_GetEntriesByDateResult = $Account_GetEntriesByDateResult;
    }

    /**
     * @return ArrayOfEntryHandle
     */
    public function getAccount_GetEntriesByDateResult()
    {
      return $this->Account_GetEntriesByDateResult;
    }

    /**
     * @param ArrayOfEntryHandle $Account_GetEntriesByDateResult
     * @return \Economic\Account_GetEntriesByDateResponse
     */
    public function setAccount_GetEntriesByDateResult($Account_GetEntriesByDateResult)
    {
      $this->Account_GetEntriesByDateResult = $Account_GetEntriesByDateResult;
      return $this;
    }

}
