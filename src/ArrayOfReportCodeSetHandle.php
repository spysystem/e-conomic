<?php

namespace Economic;

class ArrayOfReportCodeSetHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReportCodeSetHandle[] $ReportCodeSetHandle
     */
    protected $ReportCodeSetHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReportCodeSetHandle[]
     */
    public function getReportCodeSetHandle()
    {
      return $this->ReportCodeSetHandle;
    }

    /**
     * @param ReportCodeSetHandle[] $ReportCodeSetHandle
     * @return \Economic\ArrayOfReportCodeSetHandle
     */
    public function setReportCodeSetHandle(array $ReportCodeSetHandle = null)
    {
      $this->ReportCodeSetHandle = $ReportCodeSetHandle;
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
      return isset($this->ReportCodeSetHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReportCodeSetHandle
     */
    public function offsetGet($offset)
    {
      return $this->ReportCodeSetHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReportCodeSetHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReportCodeSetHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReportCodeSetHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReportCodeSetHandle Return the current element
     */
    public function current()
    {
      return current($this->ReportCodeSetHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReportCodeSetHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReportCodeSetHandle);
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
      reset($this->ReportCodeSetHandle);
    }

    /**
     * Countable implementation
     *
     * @return ReportCodeSetHandle Return count of elements
     */
    public function count()
    {
      return count($this->ReportCodeSetHandle);
    }

}
