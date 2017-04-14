<?php
    /*
*Database connection class
*/

/*
 * Include database credentials
 */
require_once('dbConnect.php');

class dbconnection 
{
    /*
      properties
      constructor
      methods
      connection method_exists
      query method
      fetch method
    */

    public $dbcon;
    public $dbresult;

    /*
     *Database connection method
     *@return return true or false
     */

    public function connect()
    {
        //Store connection to dbcon property
        $this->dbcon = mysqli_connect(DBHOST,DBUSERNAME, DBPASS, DBNAME);
        if(mysqli_connect_errno())
        {
            return false;
        }else
        {
            return true;
        }
    }

    /*
     *Database query method
     *@param sql to be executed
     *@return return true or false
     */
     public function query($sql)
     {
        //check if connection works
        if(!$this->connect())
        {
            return false;
        }
        //run query
        $this->dbresult = mysqli_query($this->dbcon, $sql);

        //check if any record return
        if($this->dbresult == false)
        {
            return false;
        }else
        {
            return true;
        }
     }

     /*
     *Database fetch method
     *@return return true or false
     */

     public function fetch()
     {
        //check if results has contents
        if($this->dbresult == false)
        {
            return false;
        }

        // return result
        return mysqli_fetch_assoc($this->dbresult);
     }

     public function close(){
        mysqli_close($this->dbcon);
     }

}
?>