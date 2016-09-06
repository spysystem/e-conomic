<?php

namespace Economic;

class QuotationLine_UpdateFromData
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
     * @return \Economic\QuotationLine_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
