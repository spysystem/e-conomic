<?php

namespace Economic;

class Debtor_UpdateFromData
{

    /**
     * @var DebtorData $data
     */
    protected $data = null;

    /**
     * @param DebtorData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return DebtorData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param DebtorData $data
     * @return \Economic\Debtor_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
