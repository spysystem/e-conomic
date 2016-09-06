<?php

namespace Economic;

class ArrayOfScannedDocumentHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ScannedDocumentHandle[] $ScannedDocumentHandle
     */
    protected $ScannedDocumentHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ScannedDocumentHandle[]
     */
    public function getScannedDocumentHandle()
    {
      return $this->ScannedDocumentHandle;
    }

    /**
     * @param ScannedDocumentHandle[] $ScannedDocumentHandle
     * @return \Economic\ArrayOfScannedDocumentHandle
     */
    public function setScannedDocumentHandle(array $ScannedDocumentHandle = null)
    {
      $this->ScannedDocumentHandle = $ScannedDocumentHandle;
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
      return isset($this->ScannedDocumentHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ScannedDocumentHandle
     */
    public function offsetGet($offset)
    {
      return $this->ScannedDocumentHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ScannedDocumentHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ScannedDocumentHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ScannedDocumentHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ScannedDocumentHandle Return the current element
     */
    public function current()
    {
      return current($this->ScannedDocumentHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ScannedDocumentHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ScannedDocumentHandle);
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
      reset($this->ScannedDocumentHandle);
    }

    /**
     * Countable implementation
     *
     * @return ScannedDocumentHandle Return count of elements
     */
    public function count()
    {
      return count($this->ScannedDocumentHandle);
    }

}
