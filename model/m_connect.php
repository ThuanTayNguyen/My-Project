<?php
	/**
	* 
	*/
	class DB
	{
		protected $db_name = 'blog';
	    protected $db_user = 'root';
	    protected $db_pass = '';
	    protected $db_host = 'localhost';
	    protected $db_conn='';
		function __construct()
		{
		}
		public function db_Conect(){
			$this->db_conn=mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
			mysqli_query($this->db_conn,"SET NAMES 'UTF8'");
		}
		public function m_getAllPost(){
			$this->db_Conect();
			$sql="SELECT * FROM post";
			$result=mysqli_query($this->db_conn,$sql);
			$getAllPost=array();
			if($result->num_rows>0){
				while ($row=mysqli_fetch_assoc($result)) {
					$this->getAllPost[]=$row;
				}
			}
			return $this->getAllPost;
		}
	}
?>