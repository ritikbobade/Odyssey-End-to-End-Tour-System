<?php
class Enquiry{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "odyssey_tour";     
    private $orders = 'orders'; 
    private $destination = 'destination'; 
    private $hotels = 'hotels'; 
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }

    private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}
 
	 
	public function checkLoggedIn(){
		if(!$_SESSION['userid']) {
			header("Location:index.php");
		}
	}		
 	
	public function getHotelList(){
		$sqlQuery = " SELECT * FROM ".$this->hotels." WHERE 1=1 ORDER BY id DESC ";
		return  $this->getData($sqlQuery);
	}	

	public function getDestinationList(){
		$sqlQuery = " SELECT * FROM ".$this->destination." WHERE 1=1 ORDER BY id DESC ";
		return  $this->getData($sqlQuery);
	}	

	public function getOrderList(){
		$sqlQuery = " SELECT * FROM ".$this->orders." WHERE 1=1 ORDER BY id DESC  ";
		return  $this->getData($sqlQuery);
	}	
	 
}
?>