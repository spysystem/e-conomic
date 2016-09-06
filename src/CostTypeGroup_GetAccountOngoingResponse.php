<?php

namespace Economic;

class CostTypeGroup_GetAccountOngoingResponse
{

    /**
     * @var AccountHandle $CostTypeGroup_GetAccountOngoingResult
     */
    protected $CostTypeGroup_GetAccountOngoingResult = null;

    /**
     * @param AccountHandle $CostTypeGroup_GetAccountOngoingResult
     */
    public function __construct($CostTypeGroup_GetAccountOngoingResult)
    {
      $this->CostTypeGroup_GetAccountOngoingResult = $CostTypeGroup_GetAccountOngoingResult;
    }

    /**
     * @return AccountHandle
     */
    public function getCostTypeGroup_GetAccountOngoingResult()
    {
      return $this->CostTypeGroup_GetAccountOngoingResult;
    }

    /**
     * @param AccountHandle $CostTypeGroup_GetAccountOngoingResult
     * @return \Economic\CostTypeGroup_GetAccountOngoingResponse
     */
    public function setCostTypeGroup_GetAccountOngoingResult($CostTypeGroup_GetAccountOngoingResult)
    {
      $this->CostTypeGroup_GetAccountOngoingResult = $CostTypeGroup_GetAccountOngoingResult;
      return $this;
    }

}
