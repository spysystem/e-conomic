<?php

namespace Economic;

class Subscriber_GetExtraTextForInvoiceResponse
{

    /**
     * @var string $Subscriber_GetExtraTextForInvoiceResult
     */
    protected $Subscriber_GetExtraTextForInvoiceResult = null;

    /**
     * @param string $Subscriber_GetExtraTextForInvoiceResult
     */
    public function __construct($Subscriber_GetExtraTextForInvoiceResult)
    {
      $this->Subscriber_GetExtraTextForInvoiceResult = $Subscriber_GetExtraTextForInvoiceResult;
    }

    /**
     * @return string
     */
    public function getSubscriber_GetExtraTextForInvoiceResult()
    {
      return $this->Subscriber_GetExtraTextForInvoiceResult;
    }

    /**
     * @param string $Subscriber_GetExtraTextForInvoiceResult
     * @return \Economic\Subscriber_GetExtraTextForInvoiceResponse
     */
    public function setSubscriber_GetExtraTextForInvoiceResult($Subscriber_GetExtraTextForInvoiceResult)
    {
      $this->Subscriber_GetExtraTextForInvoiceResult = $Subscriber_GetExtraTextForInvoiceResult;
      return $this;
    }

}
