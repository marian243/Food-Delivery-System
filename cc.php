<?php

if($_SERVER['REQUEST_METHOD']=="GET"){
	///setting necessary CORS headers
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

		///connecting to database
		try{
			$conn=new PDO("mysql:host=localhost:3306;dbname=easycafe",'root','');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sqlquery="SELECT product_info.Name, product_info.cost, product_info.product_id FROM product_info, restaurant_info
            WHERE product_info.r_id = restaurant_info.id
            AND restaurant_info.id = 2";
			//if($id != "all") $sqlquery.=" where id=$id";

			$pdostmt=$conn->query($sqlquery);
			if($pdostmt->rowCount()>0){
				$table=$pdostmt->fetchAll();

				http_response_code(200);
               // echo json_encode(array("message"=>"Data"));
				echo json_encode($table);
			}
			else{
				///no data found for the given id value
				http_response_code(400);
				
				echo json_encode(array("message"=>"Invalid id"));
			}

		}
		catch(PDOException $ex){
			///database or query error
			http_response_code(503);
				
			echo json_encode(array("message"=>"Service Unavailable"));
		}
	}

///setting header informations for preflighted requests like: POST, PUT, DELETE etc.
if($_SERVER['REQUEST_METHOD']=="OPTIONS"){
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS");
	header("Access-Control-Allow-Headers: Content-Type");
	header("Access-Control-Allow-Max-Age: 86400");
}

?>