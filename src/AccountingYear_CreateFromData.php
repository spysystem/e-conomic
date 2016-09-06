<?php

namespace Economic;

class AccountingYear_CreateFromData
{

    /**
     * @var AccountingYearData $data
     */
    protected $data = null;

    /**
     * @param AccountingYearData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return AccountingYearData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param AccountingYearData $data
     * @return \Economic\AccountingYear_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
