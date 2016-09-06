<?php

namespace Economic;

class DebtorGroup_UpdateFromData
{

    /**
     * @var DebtorGroupData $data
     */
    protected $data = null;

    /**
     * @param DebtorGroupData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return DebtorGroupData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param DebtorGroupData $data
     * @return \Economic\DebtorGroup_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
