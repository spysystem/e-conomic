<?php

namespace Economic;

class ArrayOfActivityData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ActivityData[] $ActivityData
     */
    protected $ActivityData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ActivityData[]
     */
    public function getActivityData()
    {
      return $this->ActivityData;
    }

    /**
     * @param ActivityData[] $ActivityData
     * @return \Economic\ArrayOfActivityData
     */
    public function setActivityData(array $ActivityData = null)
    {
      $this->ActivityData = $ActivityData;
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
      return isset($this->ActivityData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ActivityData
     */
    public function offsetGet($offset)
    {
      return $this->ActivityData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ActivityData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ActivityData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ActivityData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ActivityData Return the current element
     */
    public function current()
    {
      return current($this->ActivityData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ActivityData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ActivityData);
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
      reset($this->ActivityData);
    }

    /**
     * Countable implementation
     *
     * @return ActivityData Return count of elements
     */
    public function count()
    {
      return count($this->ActivityData);
    }

}
