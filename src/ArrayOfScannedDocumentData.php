<?php

namespace Economic;

class ArrayOfScannedDocumentData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ScannedDocumentData[] $ScannedDocumentData
     */
    protected $ScannedDocumentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ScannedDocumentData[]
     */
    public function getScannedDocumentData()
    {
      return $this->ScannedDocumentData;
    }

    /**
     * @param ScannedDocumentData[] $ScannedDocumentData
     * @return \Economic\ArrayOfScannedDocumentData
     */
    public function setScannedDocumentData(array $ScannedDocumentData = null)
    {
      $this->ScannedDocumentData = $ScannedDocumentData;
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
      return isset($this->ScannedDocumentData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ScannedDocumentData
     */
    public function offsetGet($offset)
    {
      return $this->ScannedDocumentData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ScannedDocumentData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ScannedDocumentData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ScannedDocumentData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ScannedDocumentData Return the current element
     */
    public function current()
    {
      return current($this->ScannedDocumentData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ScannedDocumentData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ScannedDocumentData);
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
      reset($this->ScannedDocumentData);
    }

    /**
     * Countable implementation
     *
     * @return ScannedDocumentData Return count of elements
     */
    public function count()
    {
      return count($this->ScannedDocumentData);
    }

}
