<?php

namespace Economic;

class QuotationLine_CreateFromData
{

    /**
     * @var QuotationLineData $data
     */
    protected $data = null;

    /**
     * @param QuotationLineData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return QuotationLineData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param QuotationLineData $data
     * @return \Economic\QuotationLine_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
