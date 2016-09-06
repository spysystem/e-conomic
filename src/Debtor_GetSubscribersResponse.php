<?php

namespace Economic;

class Debtor_GetSubscribersResponse
{

    /**
     * @var ArrayOfSubscriberHandle $Debtor_GetSubscribersResult
     */
    protected $Debtor_GetSubscribersResult = null;

    /**
     * @param ArrayOfSubscriberHandle $Debtor_GetSubscribersResult
     */
    public function __construct($Debtor_GetSubscribersResult)
    {
      $this->Debtor_GetSubscribersResult = $Debtor_GetSubscribersResult;
    }

    /**
     * @return ArrayOfSubscriberHandle
     */
    public function getDebtor_GetSubscribersResult()
    {
      return $this->Debtor_GetSubscribersResult;
    }

    /**
     * @param ArrayOfSubscriberHandle $Debtor_GetSubscribersResult
     * @return \Economic\Debtor_GetSubscribersResponse
     */
    public function setDebtor_GetSubscribersResult($Debtor_GetSubscribersResult)
    {
      $this->Debtor_GetSubscribersResult = $Debtor_GetSubscribersResult;
      return $this;
    }

}
