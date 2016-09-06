<?php

namespace Economic;

class Debtor_CreateFromData
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
     * @return \Economic\Debtor_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
