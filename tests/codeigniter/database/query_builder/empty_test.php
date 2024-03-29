<<<<<<< HEAD
<?php

class Empty_test extends CI_TestCase {

	/**
	 * @var object Database/Query Builder holder
	 */
	protected $db;

	public function set_up()
	{
		$this->db = Mock_Database_Schema_Skeleton::init(DB_DRIVER);

		Mock_Database_Schema_Skeleton::create_tables();
		Mock_Database_Schema_Skeleton::create_data();
	}

	// ------------------------------------------------------------------------

	/**
	 * @see ./mocks/schema/skeleton.php
	 */
	public function test_empty_table()
	{
		// Check initial record
		$jobs = $this->db->get('job')->result_array();

		$this->assertCount(4, $jobs);

		// Do the empty
		$this->db->empty_table('job');

		// Check the record
		$jobs = $this->db->get('job');

		$this->assertEmpty($jobs->result_array());
	}

}
=======
<?php

class Empty_test extends CI_TestCase {

	/**
	 * @var object Database/Query Builder holder
	 */
	protected $db;

	public function set_up()
	{
		$this->db = Mock_Database_Schema_Skeleton::init(DB_DRIVER);

		Mock_Database_Schema_Skeleton::create_tables();
		Mock_Database_Schema_Skeleton::create_data();
	}

	// ------------------------------------------------------------------------

	/**
	 * @see ./mocks/schema/skeleton.php
	 */
	public function test_empty_table()
	{
		// Check initial record
		$jobs = $this->db->get('job')->result_array();

		$this->assertCount(4, $jobs);

		// Do the empty
		$this->db->empty_table('job');

		// Check the record
		$jobs = $this->db->get('job');

		$this->assertEmpty($jobs->result_array());
	}

}
>>>>>>> b3f1f4d90d1eabdebbe8975d147371d3590c4858
