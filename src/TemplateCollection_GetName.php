<?php

namespace Economic;

class TemplateCollection_GetName
{

    /**
     * @var TemplateCollectionHandle $templateCollectionHandle
     */
    protected $templateCollectionHandle = null;

    /**
     * @param TemplateCollectionHandle $templateCollectionHandle
     */
    public function __construct($templateCollectionHandle)
    {
      $this->templateCollectionHandle = $templateCollectionHandle;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getTemplateCollectionHandle()
    {
      return $this->templateCollectionHandle;
    }

    /**
     * @param TemplateCollectionHandle $templateCollectionHandle
     * @return \Economic\TemplateCollection_GetName
     */
    public function setTemplateCollectionHandle($templateCollectionHandle)
    {
      $this->templateCollectionHandle = $templateCollectionHandle;
      return $this;
    }

}
