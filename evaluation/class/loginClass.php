<?php
session_start();

/**
 * @category	H20 Employee Eval System
 * @author		Software Engineering - H20 Project
 * @version		1.0
 * @see			documentation.html
 */

class mainLogin {
	public $currentUser;
	public $users_table;
	public $username_id_field;
	public $username_field;
	public $password_field;
	public $user_role;
	protected $_query;
	protected $_numRows;
	protected $_fetchArray;
	
	public function __construct() {
		// Initialize MySQL Database
		include('./class/config.php');
		mysql_connect(DB_Host, DB_User, DB_Pass);
		mysql_select_db(DB_Name);
		
		$this->users_table = DB_Users_Table;
		$this->username_id_field = DB_Username_Id_Field;
		$this->username_field = DB_Username_Field;
		$this->password_field = DB_Password_Field;
		$this->user_role = DB_User_Role;		

		// Initialize user if logged in
		if(isset($_SESSION['user'])) {
			$query = $this->query("SELECT * FROM `{$this->users_table}` WHERE `{$this->username_field}` = '{$_SESSION['user']}';");
			if($this->_numRows == 1) {
				$this->currentUser = $_SESSION['user'];
			}
		}
	}
	
	/**
	 * Queries the database
	 * 
	 * @param string $sql
	 */
	public function query($sql) {
		$this->_query = mysql_query($sql);
		$this->_numRows = mysql_num_rows($this->_query);
		$this->_fetchArray = mysql_fetch_array($this->_query);
	}
	
	/**
	 * Sanitizes a string to be entered into database
	 * 
	 * @param string $string
	 * @return string after sanitized
	 */
	public function sanitize($string) {
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	/**
	 * Retrieve account information and validate it with passed arguments
	 * 
	 * @param string $user
	 * @param string $pass
	 * @param string $hash specifies the hashing algorithm used; Currently: whirlpool
	 * @return boolean; true if credentials are correct, false if not
	 */
	public function checkCredentials($user, $pass, $hash = "whirlpool") {
		$user = $this->sanitize($user);
		$pass = $this->sanitize($pass);
		if($hash == "no hash") { $hash = ""; }
		if($hash != "") { $pass = hash($hash, $pass); }
		$this->query("SELECT * FROM `{$this->users_table}` WHERE `{$this->username_field}` = '{$user}' AND `{$this->password_field}` = '{$pass}';");
		if($this->_numRows == 1) {
			// Correct Credentials
			return true;
		} else {
			// Incorrect Credentials
			return false;
		}
	}
	
	/**
	 * Set the user as logged in
	 * 
	 * @param string $user 
	 */
	public function setUser($user) {
		$_SESSION['user'] = $user;
	}
	
	/**
	 * Destroy session for the user and log them out
	 */
	public function killSession() {
		session_destroy();
	}
	
	/**
	 * Gets the current user's information from the database
	 * 
	 * @param string $row If specified; will return specific element instead of the entire array
	 * @return array Gets all information from database about current user
	 * @return boolean If no current user, returns false
	 */
	public function getCurrentUser($row = "") {
		if($this->currentUser != "") {
			$this->query("SELECT * FROM `{$this->users_table}` WHERE `{$this->username_field}` = '{$this->currentUser}';");
			if($row == "") {
				// Return full array
				return $this->_fetchArray;
			} else {
				// Return specified row
				return $this->_fetchArray[$row];
			}
		} else {
			return false;
		}
	}
	
	/**
	 * Checks to see if the user is logged in
	 * 
	 * @return boolean
	 */
	public function isLoggedIn() {
		if($this->currentUser != "") {
			// User is logged in
			return true;
		} else {
		    // User is not logged in
			return false;
		}
	}
	
	public function getCount($table) {
		$this->query("SELECT COUNT(*) FROM ".$table);
		return $this->_fetchArray[0];
	}
	
	public function generalQuery($sql) {
		$this->query($sql);
		return $this->_fetchArray;
	}
}
?>
