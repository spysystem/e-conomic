<?php

namespace Economic;

class Quotation_UpdateFromData
{

    /**
     * @var QuotationData $data
     */
    protected $data = null;

    /**
     * @param QuotationData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return QuotationData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param QuotationData $data
     * @return \Economic\Quotation_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
