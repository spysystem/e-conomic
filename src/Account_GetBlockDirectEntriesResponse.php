<?php

namespace Economic;

class Account_GetBlockDirectEntriesResponse
{

    /**
     * @var boolean $Account_GetBlockDirectEntriesResult
     */
    protected $Account_GetBlockDirectEntriesResult = null;

    /**
     * @param boolean $Account_GetBlockDirectEntriesResult
     */
    public function __construct($Account_GetBlockDirectEntriesResult)
    {
      $this->Account_GetBlockDirectEntriesResult = $Account_GetBlockDirectEntriesResult;
    }

    /**
     * @return boolean
     */
    public function getAccount_GetBlockDirectEntriesResult()
    {
      return $this->Account_GetBlockDirectEntriesResult;
    }

    /**
     * @param boolean $Account_GetBlockDirectEntriesResult
     * @return \Economic\Account_GetBlockDirectEntriesResponse
     */
    public function setAccount_GetBlockDirectEntriesResult($Account_GetBlockDirectEntriesResult)
    {
      $this->Account_GetBlockDirectEntriesResult = $Account_GetBlockDirectEntriesResult;
      return $this;
    }

}
