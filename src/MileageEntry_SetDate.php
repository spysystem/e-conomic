<?php

namespace Economic;

class MileageEntry_SetDate
{

    /**
     * @var MileageEntryHandle $mileageEntryHandle
     */
    protected $mileageEntryHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param MileageEntryHandle $mileageEntryHandle
     * @param \DateTime $value
     */
    public function __construct($mileageEntryHandle, \DateTime $value)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return MileageEntryHandle
     */
    public function getMileageEntryHandle()
    {
      return $this->mileageEntryHandle;
    }

    /**
     * @param MileageEntryHandle $mileageEntryHandle
     * @return \Economic\MileageEntry_SetDate
     */
    public function setMileageEntryHandle($mileageEntryHandle)
    {
      $this->mileageEntryHandle = $mileageEntryHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $value
     * @return \Economic\MileageEntry_SetDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
