<?php

namespace Economic;

class CashBook_UpdateFromData
{

    /**
     * @var CashBookData $data
     */
    protected $data = null;

    /**
     * @param CashBookData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CashBookData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CashBookData $data
     * @return \Economic\CashBook_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
