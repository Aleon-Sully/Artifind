include_once(“/Applications/XAMPP/xamppfiles/htdocs/unit/database/<name of your database connection file>“);

	class dbconnectionTest extends \PHPUnit_Framework_TestCase
	{

		public function testConnectReturnsTrue()
		{
			
			$connect = new <name of your database connection file>;

			$this->assertTrue($connect->connect());
		}

	}