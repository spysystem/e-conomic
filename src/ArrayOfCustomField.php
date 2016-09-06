<?php

namespace Economic;

class ArrayOfCustomField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomField[] $CustomField
     */
    protected $CustomField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomField[]
     */
    public function getCustomField()
    {
      return $this->CustomField;
    }

    /**
     * @param CustomField[] $CustomField
     * @return \Economic\ArrayOfCustomField
     */
    public function setCustomField(array $CustomField = null)
    {
      $this->CustomField = $CustomField;
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
      return isset($this->CustomField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomField
     */
    public function offsetGet($offset)
    {
      return $this->CustomField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CustomField[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CustomField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomField Return the current element
     */
    public function current()
    {
      return current($this->CustomField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomField);
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
      reset($this->CustomField);
    }

    /**
     * Countable implementation
     *
     * @return CustomField Return count of elements
     */
    public function count()
    {
      return count($this->CustomField);
    }

}
