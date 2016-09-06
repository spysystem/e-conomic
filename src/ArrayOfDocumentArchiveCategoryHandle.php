<?php

namespace Economic;

class ArrayOfDocumentArchiveCategoryHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DocumentArchiveCategoryHandle[] $DocumentArchiveCategoryHandle
     */
    protected $DocumentArchiveCategoryHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DocumentArchiveCategoryHandle[]
     */
    public function getDocumentArchiveCategoryHandle()
    {
      return $this->DocumentArchiveCategoryHandle;
    }

    /**
     * @param DocumentArchiveCategoryHandle[] $DocumentArchiveCategoryHandle
     * @return \Economic\ArrayOfDocumentArchiveCategoryHandle
     */
    public function setDocumentArchiveCategoryHandle(array $DocumentArchiveCategoryHandle = null)
    {
      $this->DocumentArchiveCategoryHandle = $DocumentArchiveCategoryHandle;
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
      return isset($this->DocumentArchiveCategoryHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DocumentArchiveCategoryHandle
     */
    public function offsetGet($offset)
    {
      return $this->DocumentArchiveCategoryHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DocumentArchiveCategoryHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DocumentArchiveCategoryHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DocumentArchiveCategoryHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DocumentArchiveCategoryHandle Return the current element
     */
    public function current()
    {
      return current($this->DocumentArchiveCategoryHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DocumentArchiveCategoryHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DocumentArchiveCategoryHandle);
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
      reset($this->DocumentArchiveCategoryHandle);
    }

    /**
     * Countable implementation
     *
     * @return DocumentArchiveCategoryHandle Return count of elements
     */
    public function count()
    {
      return count($this->DocumentArchiveCategoryHandle);
    }

}
