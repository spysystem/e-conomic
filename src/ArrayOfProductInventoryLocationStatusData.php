<?php

namespace Economic;

class ArrayOfProductInventoryLocationStatusData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductInventoryLocationStatusData[] $ProductInventoryLocationStatusData
     */
    protected $ProductInventoryLocationStatusData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductInventoryLocationStatusData[]
     */
    public function getProductInventoryLocationStatusData()
    {
      return $this->ProductInventoryLocationStatusData;
    }

    /**
     * @param ProductInventoryLocationStatusData[] $ProductInventoryLocationStatusData
     * @return \Economic\ArrayOfProductInventoryLocationStatusData
     */
    public function setProductInventoryLocationStatusData(array $ProductInventoryLocationStatusData = null)
    {
      $this->ProductInventoryLocationStatusData = $ProductInventoryLocationStatusData;
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
      return isset($this->ProductInventoryLocationStatusData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductInventoryLocationStatusData
     */
    public function offsetGet($offset)
    {
      return $this->ProductInventoryLocationStatusData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductInventoryLocationStatusData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductInventoryLocationStatusData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductInventoryLocationStatusData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductInventoryLocationStatusData Return the current element
     */
    public function current()
    {
      return current($this->ProductInventoryLocationStatusData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductInventoryLocationStatusData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductInventoryLocationStatusData);
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
      reset($this->ProductInventoryLocationStatusData);
    }

    /**
     * Countable implementation
     *
     * @return ProductInventoryLocationStatusData Return count of elements
     */
    public function count()
    {
      return count($this->ProductInventoryLocationStatusData);
    }

}
