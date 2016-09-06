<?php

namespace Economic;

class DocumentArchiveCategory_UpdateFromData
{

    /**
     * @var DocumentArchiveCategoryData $data
     */
    protected $data = null;

    /**
     * @param DocumentArchiveCategoryData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return DocumentArchiveCategoryData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param DocumentArchiveCategoryData $data
     * @return \Economic\DocumentArchiveCategory_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
