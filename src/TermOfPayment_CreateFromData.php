<?php

namespace Economic;

class TermOfPayment_CreateFromData
{

    /**
     * @var TermOfPaymentData $data
     */
    protected $data = null;

    /**
     * @param TermOfPaymentData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return TermOfPaymentData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param TermOfPaymentData $data
     * @return \Economic\TermOfPayment_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
