<?php

namespace Economic;

class ArrayOfProductGroupData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductGroupData[] $ProductGroupData
     */
    protected $ProductGroupData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductGroupData[]
     */
    public function getProductGroupData()
    {
      return $this->ProductGroupData;
    }

    /**
     * @param ProductGroupData[] $ProductGroupData
     * @return \Economic\ArrayOfProductGroupData
     */
    public function setProductGroupData(array $ProductGroupData = null)
    {
      $this->ProductGroupData = $ProductGroupData;
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
      return isset($this->ProductGroupData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductGroupData
     */
    public function offsetGet($offset)
    {
      return $this->ProductGroupData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductGroupData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductGroupData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductGroupData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductGroupData Return the current element
     */
    public function current()
    {
      return current($this->ProductGroupData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductGroupData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductGroupData);
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
      reset($this->ProductGroupData);
    }

    /**
     * Countable implementation
     *
     * @return ProductGroupData Return count of elements
     */
    public function count()
    {
      return count($this->ProductGroupData);
    }

}
