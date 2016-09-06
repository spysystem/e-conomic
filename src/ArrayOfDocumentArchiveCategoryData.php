<?php

namespace Economic;

class ArrayOfDocumentArchiveCategoryData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DocumentArchiveCategoryData[] $DocumentArchiveCategoryData
     */
    protected $DocumentArchiveCategoryData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DocumentArchiveCategoryData[]
     */
    public function getDocumentArchiveCategoryData()
    {
      return $this->DocumentArchiveCategoryData;
    }

    /**
     * @param DocumentArchiveCategoryData[] $DocumentArchiveCategoryData
     * @return \Economic\ArrayOfDocumentArchiveCategoryData
     */
    public function setDocumentArchiveCategoryData(array $DocumentArchiveCategoryData = null)
    {
      $this->DocumentArchiveCategoryData = $DocumentArchiveCategoryData;
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
      return isset($this->DocumentArchiveCategoryData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DocumentArchiveCategoryData
     */
    public function offsetGet($offset)
    {
      return $this->DocumentArchiveCategoryData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DocumentArchiveCategoryData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DocumentArchiveCategoryData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DocumentArchiveCategoryData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DocumentArchiveCategoryData Return the current element
     */
    public function current()
    {
      return current($this->DocumentArchiveCategoryData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DocumentArchiveCategoryData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DocumentArchiveCategoryData);
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
      reset($this->DocumentArchiveCategoryData);
    }

    /**
     * Countable implementation
     *
     * @return DocumentArchiveCategoryData Return count of elements
     */
    public function count()
    {
      return count($this->DocumentArchiveCategoryData);
    }

}
