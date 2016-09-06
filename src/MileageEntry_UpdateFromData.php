<?php

namespace Economic;

class MileageEntry_UpdateFromData
{

    /**
     * @var MileageEntryData $data
     */
    protected $data = null;

    /**
     * @param MileageEntryData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return MileageEntryData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param MileageEntryData $data
     * @return \Economic\MileageEntry_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
