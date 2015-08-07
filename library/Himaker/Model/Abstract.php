<?php
abstract class Himaker_Model_Abstract {
	
  protected $_dbObject; 
  protected $_dbName;
  
  public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            $method = str_replace("_","", $method);
            
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
	
    /**
     * @return Zend_Db_Table_Abstract
     */
    public function getDb(){
    	
    	 if ($this->_dbObject == null)
            $this->_dbObject = new $this->_dbName();
           
        return $this->_dbObject;
    }
}