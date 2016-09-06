<?php

namespace Economic;

class ArrayOfSubscriberData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SubscriberData[] $SubscriberData
     */
    protected $SubscriberData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubscriberData[]
     */
    public function getSubscriberData()
    {
      return $this->SubscriberData;
    }

    /**
     * @param SubscriberData[] $SubscriberData
     * @return \Economic\ArrayOfSubscriberData
     */
    public function setSubscriberData(array $SubscriberData = null)
    {
      $this->SubscriberData = $SubscriberData;
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
      return isset($this->SubscriberData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SubscriberData
     */
    public function offsetGet($offset)
    {
      return $this->SubscriberData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SubscriberData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SubscriberData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SubscriberData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SubscriberData Return the current element
     */
    public function current()
    {
      return current($this->SubscriberData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SubscriberData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SubscriberData);
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
      reset($this->SubscriberData);
    }

    /**
     * Countable implementation
     *
     * @return SubscriberData Return count of elements
     */
    public function count()
    {
      return count($this->SubscriberData);
    }

}
