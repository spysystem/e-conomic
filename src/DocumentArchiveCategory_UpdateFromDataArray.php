<?php

namespace Economic;

class DocumentArchiveCategory_UpdateFromDataArray
{

    /**
     * @var ArrayOfDocumentArchiveCategoryData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfDocumentArchiveCategoryData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfDocumentArchiveCategoryData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfDocumentArchiveCategoryData $dataArray
     * @return \Economic\DocumentArchiveCategory_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
