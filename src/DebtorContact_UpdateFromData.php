<?php

namespace Economic;

class DebtorContact_UpdateFromData
{

    /**
     * @var DebtorContactData $data
     */
    protected $data = null;

    /**
     * @param DebtorContactData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return DebtorContactData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param DebtorContactData $data
     * @return \Economic\DebtorContact_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
