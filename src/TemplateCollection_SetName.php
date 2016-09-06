<?php

namespace Economic;

class TemplateCollection_SetName
{

    /**
     * @var TemplateCollectionHandle $templateCollectionHandle
     */
    protected $templateCollectionHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param TemplateCollectionHandle $templateCollectionHandle
     * @param string $value
     */
    public function __construct($templateCollectionHandle, $value)
    {
      $this->templateCollectionHandle = $templateCollectionHandle;
      $this->value = $value;
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
     * @return \Economic\TemplateCollection_SetName
     */
    public function setTemplateCollectionHandle($templateCollectionHandle)
    {
      $this->templateCollectionHandle = $templateCollectionHandle;
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
     * @return \Economic\TemplateCollection_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
