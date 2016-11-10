<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['restaurant']))
		{
			// available  restaurant
			$restrnt = $this->model->getRestaurantList();
			include 'view/restaurantList.php';
		}
		else
		{
			// show the requested  restaurant
			$rest = $this->model->getRestaurant($_GET['rest']);
			include 'view/viewrestaurant.php';
		}
	}
}

?>