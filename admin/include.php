<?php 
		if(!isset ($_GET['s'])){$s = 1;}
		else {$s = $_GET['s'];}
	// Start switch	
		switch($s) {
			        case "":
					include("welcome.php");
					break;
					
					case 1:
					include("../view/admin/body.php");
					break;
					
	//Users 
					
					
					case 3:
					include("user/add_user.php");
					break;
					
					case 4:
					include_once("user/user_list.php");
					break;
					
					case 5:
					include_once("user/edit_user.php");
					break;
					
	//Site Settings 
					case 6:
					include_once("setting/site_settings.php");
					break;
					
	//Pages
					case 7:
					include_once("page/add_page.php");
					break;
					
					case 8:
					include_once("page/page_list.php");
					break;
					
					case 9:
					include_once("page/edit_page.php");
					break;
	
	//Categorys
					case 10:
					include_once("category/add_category.php");
					break;
					
					case 11:
					include_once("category/category_list.php");
					break;
					
					case 12:
					include_once("category/edit_category.php");
					break;
	//Products
					case 13:
					include_once("product/add_product.php");
					break;
					
					case 14:
					include_once("product/product_list.php");
					break;
					
					case 15:
					include_once("product/edit_product.php");
					break;
					
	//Messages
					case 16:
					include_once("messages/messages.php");
					break;

	//Slider
					case 17:
					include_once("slider/add_slider.php");
					break;

					case 18:
					include_once("slider/edit_slider.php");
					break;

	//Menu
					case 19:
					include_once("menu/add_menu.php");
					break;

					case 20:
					include_once("menu/edit_menu.php");
					break;

					default:
					include_once("welcome/welcome.php");
					break;
					
					
		          }
	//End of switch	


	
?>	