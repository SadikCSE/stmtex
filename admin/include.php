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
					include("add_user.php");
					break;
					
					case 4:
					include_once("user_list.php");
					break;
					
					case 5:
					include_once("edit_user.php");
					break;
					
	//Site Settings 
					case 6:
					include_once("site_settings.php");
					break;
					
	//Pages
					case 7:
					include_once("add_page.php");
					break;
					
					case 8:
					include_once("page_list.php");
					break;
					
					case 9:
					include_once("edit_page.php");
					break;
	
	//Categorys
					case 10:
					include_once("add_category.php");
					break;
					
					case 11:
					include_once("category_list.php");
					break;
					
					case 12:
					include_once("edit_category.php");
					break;
	//Products
					case 13:
					include_once("add_product.php");
					break;
					
					case 14:
					include_once("product_list.php");
					break;
					
					case 15:
					include_once("edit_product.php");
					break;
					
	//Messages
					case 16:
					include_once("messages.php");
					break;
					
					default:
					include_once("welcome.php");
					break;
					
					
		          }
	//End of switch	


	
?>	