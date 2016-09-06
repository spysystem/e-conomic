<?php

namespace Economic;

class ArrayOfReportCodeData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReportCodeData[] $ReportCodeData
     */
    protected $ReportCodeData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReportCodeData[]
     */
    public function getReportCodeData()
    {
      return $this->ReportCodeData;
    }

    /**
     * @param ReportCodeData[] $ReportCodeData
     * @return \Economic\ArrayOfReportCodeData
     */
    public function setReportCodeData(array $ReportCodeData = null)
    {
      $this->ReportCodeData = $ReportCodeData;
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
      return isset($this->ReportCodeData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReportCodeData
     */
    public function offsetGet($offset)
    {
      return $this->ReportCodeData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReportCodeData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReportCodeData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReportCodeData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReportCodeData Return the current element
     */
    public function current()
    {
      return current($this->ReportCodeData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReportCodeData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReportCodeData);
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
      reset($this->ReportCodeData);
    }

    /**
     * Countable implementation
     *
     * @return ReportCodeData Return count of elements
     */
    public function count()
    {
      return count($this->ReportCodeData);
    }

}
