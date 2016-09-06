<?php

namespace Economic;

class MileageEntry_CreateFromData
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
     * @return \Economic\MileageEntry_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
