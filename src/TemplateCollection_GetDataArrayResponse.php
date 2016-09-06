<?php

namespace Economic;

class TemplateCollection_GetDataArrayResponse
{

    /**
     * @var ArrayOfTemplateCollectionData $TemplateCollection_GetDataArrayResult
     */
    protected $TemplateCollection_GetDataArrayResult = null;

    /**
     * @param ArrayOfTemplateCollectionData $TemplateCollection_GetDataArrayResult
     */
    public function __construct($TemplateCollection_GetDataArrayResult)
    {
      $this->TemplateCollection_GetDataArrayResult = $TemplateCollection_GetDataArrayResult;
    }

    /**
     * @return ArrayOfTemplateCollectionData
     */
    public function getTemplateCollection_GetDataArrayResult()
    {
      return $this->TemplateCollection_GetDataArrayResult;
    }

    /**
     * @param ArrayOfTemplateCollectionData $TemplateCollection_GetDataArrayResult
     * @return \Economic\TemplateCollection_GetDataArrayResponse
     */
    public function setTemplateCollection_GetDataArrayResult($TemplateCollection_GetDataArrayResult)
    {
      $this->TemplateCollection_GetDataArrayResult = $TemplateCollection_GetDataArrayResult;
      return $this;
    }

}
