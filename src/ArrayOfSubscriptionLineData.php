<?php

namespace Economic;

class ArrayOfSubscriptionLineData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SubscriptionLineData[] $SubscriptionLineData
     */
    protected $SubscriptionLineData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubscriptionLineData[]
     */
    public function getSubscriptionLineData()
    {
      return $this->SubscriptionLineData;
    }

    /**
     * @param SubscriptionLineData[] $SubscriptionLineData
     * @return \Economic\ArrayOfSubscriptionLineData
     */
    public function setSubscriptionLineData(array $SubscriptionLineData = null)
    {
      $this->SubscriptionLineData = $SubscriptionLineData;
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
      return isset($this->SubscriptionLineData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SubscriptionLineData
     */
    public function offsetGet($offset)
    {
      return $this->SubscriptionLineData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SubscriptionLineData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SubscriptionLineData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SubscriptionLineData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SubscriptionLineData Return the current element
     */
    public function current()
    {
      return current($this->SubscriptionLineData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SubscriptionLineData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SubscriptionLineData);
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
      reset($this->SubscriptionLineData);
    }

    /**
     * Countable implementation
     *
     * @return SubscriptionLineData Return count of elements
     */
    public function count()
    {
      return count($this->SubscriptionLineData);
    }

}
