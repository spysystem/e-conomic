<?php

namespace Economic;

class ArrayOfReportCodeHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReportCodeHandle[] $ReportCodeHandle
     */
    protected $ReportCodeHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReportCodeHandle[]
     */
    public function getReportCodeHandle()
    {
      return $this->ReportCodeHandle;
    }

    /**
     * @param ReportCodeHandle[] $ReportCodeHandle
     * @return \Economic\ArrayOfReportCodeHandle
     */
    public function setReportCodeHandle(array $ReportCodeHandle = null)
    {
      $this->ReportCodeHandle = $ReportCodeHandle;
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
      return isset($this->ReportCodeHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReportCodeHandle
     */
    public function offsetGet($offset)
    {
      return $this->ReportCodeHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReportCodeHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReportCodeHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReportCodeHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReportCodeHandle Return the current element
     */
    public function current()
    {
      return current($this->ReportCodeHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReportCodeHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReportCodeHandle);
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
      reset($this->ReportCodeHandle);
    }

    /**
     * Countable implementation
     *
     * @return ReportCodeHandle Return count of elements
     */
    public function count()
    {
      return count($this->ReportCodeHandle);
    }

}
