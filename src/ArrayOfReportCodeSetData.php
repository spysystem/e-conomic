<?php

namespace Economic;

class ArrayOfReportCodeSetData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReportCodeSetData[] $ReportCodeSetData
     */
    protected $ReportCodeSetData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReportCodeSetData[]
     */
    public function getReportCodeSetData()
    {
      return $this->ReportCodeSetData;
    }

    /**
     * @param ReportCodeSetData[] $ReportCodeSetData
     * @return \Economic\ArrayOfReportCodeSetData
     */
    public function setReportCodeSetData(array $ReportCodeSetData = null)
    {
      $this->ReportCodeSetData = $ReportCodeSetData;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ReportCodeSetData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReportCodeSetData
     */
    public function offsetGet($offset)
    {
      return $this->ReportCodeSetData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReportCodeSetData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReportCodeSetData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReportCodeSetData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReportCodeSetData Return the current element
     */
    public function current()
    {
      return current($this->ReportCodeSetData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReportCodeSetData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReportCodeSetData);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ReportCodeSetData);
    }

    /**
     * Countable implementation
     *
     * @return ReportCodeSetData Return count of elements
     */
    public function count()
    {
      return count($this->ReportCodeSetData);
    }

}
