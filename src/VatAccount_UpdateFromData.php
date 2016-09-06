<?php

namespace Economic;

class VatAccount_UpdateFromData
{

    /**
     * @var VatAccountData $data
     */
    protected $data = null;

    /**
     * @param VatAccountData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return VatAccountData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param VatAccountData $data
     * @return \Economic\VatAccount_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
