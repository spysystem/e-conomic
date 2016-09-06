<?php

namespace Economic;

class CashBookEntry_CreateFromData
{

    /**
     * @var CashBookEntryData $data
     */
    protected $data = null;

    /**
     * @param CashBookEntryData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CashBookEntryData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CashBookEntryData $data
     * @return \Economic\CashBookEntry_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
