<?php

namespace Economic;

class TemplateCollection_GetAllResponse
{

    /**
     * @var ArrayOfTemplateCollectionHandle $TemplateCollection_GetAllResult
     */
    protected $TemplateCollection_GetAllResult = null;

    /**
     * @param ArrayOfTemplateCollectionHandle $TemplateCollection_GetAllResult
     */
    public function __construct($TemplateCollection_GetAllResult)
    {
      $this->TemplateCollection_GetAllResult = $TemplateCollection_GetAllResult;
    }

    /**
     * @return ArrayOfTemplateCollectionHandle
     */
    public function getTemplateCollection_GetAllResult()
    {
      return $this->TemplateCollection_GetAllResult;
    }

    /**
     * @param ArrayOfTemplateCollectionHandle $TemplateCollection_GetAllResult
     * @return \Economic\TemplateCollection_GetAllResponse
     */
    public function setTemplateCollection_GetAllResult($TemplateCollection_GetAllResult)
    {
      $this->TemplateCollection_GetAllResult = $TemplateCollection_GetAllResult;
      return $this;
    }

}
