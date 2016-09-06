<?php

namespace Economic;

class Quotation_CreateFromData
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
     * @return \Economic\Quotation_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
