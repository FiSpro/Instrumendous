<<<<<<< HEAD
<?php

class Mock_Database_DB_Driver extends CI_DB_driver {

	/**
	 * @var object The actual Driver
	 */
	protected $ci_db_driver;

	/**
	 * Instantiate the database driver
	 *
	 * @param  string 	DB Driver class name
	 * @param  array 	DB configuration to set
	 * @return void
	 */
	public function __construct($driver_class, $config = array())
	{
		if (is_string($driver_class))
		{
			$this->ci_db_driver = new $driver_class($config);
		}
	}

	/**
	 * Overloading method, emulate the actual driver method (multiple inheritance workaround)
	 */
	public function __call($method, $arguments)
	{
		if ( ! is_callable(array($this->ci_db_driver, $method)))
		{
			throw new BadMethodCallException($method. ' not exists or not implemented');
		}

		return call_user_func_array(array($this->ci_db_driver, $method), $arguments);
	}

}

=======
<?php

class Mock_Database_DB_Driver extends CI_DB_driver {

	/**
	 * @var object The actual Driver
	 */
	protected $ci_db_driver;

	/**
	 * Instantiate the database driver
	 *
	 * @param  string 	DB Driver class name
	 * @param  array 	DB configuration to set
	 * @return void
	 */
	public function __construct($driver_class, $config = array())
	{
		if (is_string($driver_class))
		{
			$this->ci_db_driver = new $driver_class($config);
		}
	}

	/**
	 * Overloading method, emulate the actual driver method (multiple inheritance workaround)
	 */
	public function __call($method, $arguments)
	{
		if ( ! is_callable(array($this->ci_db_driver, $method)))
		{
			throw new BadMethodCallException($method. ' not exists or not implemented');
		}

		return call_user_func_array(array($this->ci_db_driver, $method), $arguments);
	}

}

>>>>>>> b3f1f4d90d1eabdebbe8975d147371d3590c4858
class CI_DB extends CI_DB_query_builder {}