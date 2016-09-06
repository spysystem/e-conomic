<?php

namespace Economic;

class Company_SetCustomFields
{

    /**
     * @var ArrayOfCustomField $customFields
     */
    protected $customFields = null;

    /**
     * @param ArrayOfCustomField $customFields
     */
    public function __construct($customFields)
    {
      $this->customFields = $customFields;
    }

    /**
     * @return ArrayOfCustomField
     */
    public function getCustomFields()
    {
      return $this->customFields;
    }

    /**
     * @param ArrayOfCustomField $customFields
     * @return \Economic\Company_SetCustomFields
     */
    public function setCustomFields($customFields)
    {
      $this->customFields = $customFields;
      return $this;
    }

}
