<?php

namespace Economic;

class ArrayOfTemplateCollectionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TemplateCollectionData[] $TemplateCollectionData
     */
    protected $TemplateCollectionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TemplateCollectionData[]
     */
    public function getTemplateCollectionData()
    {
      return $this->TemplateCollectionData;
    }

    /**
     * @param TemplateCollectionData[] $TemplateCollectionData
     * @return \Economic\ArrayOfTemplateCollectionData
     */
    public function setTemplateCollectionData(array $TemplateCollectionData = null)
    {
      $this->TemplateCollectionData = $TemplateCollectionData;
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
      return isset($this->TemplateCollectionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TemplateCollectionData
     */
    public function offsetGet($offset)
    {
      return $this->TemplateCollectionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TemplateCollectionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->TemplateCollectionData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TemplateCollectionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TemplateCollectionData Return the current element
     */
    public function current()
    {
      return current($this->TemplateCollectionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TemplateCollectionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TemplateCollectionData);
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
      reset($this->TemplateCollectionData);
    }

    /**
     * Countable implementation
     *
     * @return TemplateCollectionData Return count of elements
     */
    public function count()
    {
      return count($this->TemplateCollectionData);
    }

}
