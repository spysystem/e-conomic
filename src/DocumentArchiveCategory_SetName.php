<?php

namespace Economic;

class DocumentArchiveCategory_SetName
{

    /**
     * @var DocumentArchiveCategoryHandle $documentArchiveCategoryHandle
     */
    protected $documentArchiveCategoryHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param DocumentArchiveCategoryHandle $documentArchiveCategoryHandle
     * @param string $value
     */
    public function __construct($documentArchiveCategoryHandle, $value)
    {
      $this->documentArchiveCategoryHandle = $documentArchiveCategoryHandle;
      $this->value = $value;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategoryHandle()
    {
      return $this->documentArchiveCategoryHandle;
    }

    /**
     * @param DocumentArchiveCategoryHandle $documentArchiveCategoryHandle
     * @return \Economic\DocumentArchiveCategory_SetName
     */
    public function setDocumentArchiveCategoryHandle($documentArchiveCategoryHandle)
    {
      $this->documentArchiveCategoryHandle = $documentArchiveCategoryHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\DocumentArchiveCategory_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
