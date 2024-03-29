<<<<<<< HEAD
<?php

class Escape_test extends CI_TestCase {

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
	public function test_escape_like_percent_sign()
	{
		// Escape the like string
		$string = $this->db->escape_like_str('\%foo');

		if (strpos(DB_DRIVER, 'mysql') !== FALSE)
		{
			$sql = "SELECT `value` FROM `misc` WHERE `key` LIKE '$string%' ESCAPE '!';";
		}
		else
		{
			$sql = 'SELECT "value" FROM "misc" WHERE "key" LIKE \''.$string.'%\' ESCAPE \'!\';';
		}

		$res = $this->db->query($sql)->result_array();

		// Check the result
		$this->assertCount(1, $res);
	}

	// ------------------------------------------------------------------------

	/**
	 * @see ./mocks/schema/skeleton.php
	 */
	public function test_escape_like_backslash_sign()
	{
		// Escape the like string
		$string = $this->db->escape_like_str('\\');

		if (strpos(DB_DRIVER, 'mysql') !== FALSE)
		{
			$sql = "SELECT `value` FROM `misc` WHERE `key` LIKE '$string%' ESCAPE '!';";
		}
		else
		{
			$sql = 'SELECT "value" FROM "misc" WHERE "key" LIKE \''.$string.'%\' ESCAPE \'!\';';
		}

		$res = $this->db->query($sql)->result_array();

		// Check the result
		$this->assertCount(2, $res);
	}

}
=======
<?php

class Escape_test extends CI_TestCase {

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
	public function test_escape_like_percent_sign()
	{
		// Escape the like string
		$string = $this->db->escape_like_str('\%foo');

		if (strpos(DB_DRIVER, 'mysql') !== FALSE)
		{
			$sql = "SELECT `value` FROM `misc` WHERE `key` LIKE '$string%' ESCAPE '!';";
		}
		else
		{
			$sql = 'SELECT "value" FROM "misc" WHERE "key" LIKE \''.$string.'%\' ESCAPE \'!\';';
		}

		$res = $this->db->query($sql)->result_array();

		// Check the result
		$this->assertCount(1, $res);
	}

	// ------------------------------------------------------------------------

	/**
	 * @see ./mocks/schema/skeleton.php
	 */
	public function test_escape_like_backslash_sign()
	{
		// Escape the like string
		$string = $this->db->escape_like_str('\\');

		if (strpos(DB_DRIVER, 'mysql') !== FALSE)
		{
			$sql = "SELECT `value` FROM `misc` WHERE `key` LIKE '$string%' ESCAPE '!';";
		}
		else
		{
			$sql = 'SELECT "value" FROM "misc" WHERE "key" LIKE \''.$string.'%\' ESCAPE \'!\';';
		}

		$res = $this->db->query($sql)->result_array();

		// Check the result
		$this->assertCount(2, $res);
	}

}
>>>>>>> b3f1f4d90d1eabdebbe8975d147371d3590c4858
