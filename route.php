<?php 
require_once "controller/HomeController.php";
require_once 'controller/usercontroller.php';
$controller = '';
if(isset($_GET["controller"])){
    $controller = $_GET["controller"];
}
$action = isset($_GET["action"]) ? $_GET["action"] : '';


switch($controller){
    case '':
        case 'index' :
            HomeController::Viewhome();
            break;
    case 'user' :
        switch($action) {
            case '':
                UserController::viewuser();
                break;
            default:
                echo "Không có chức năng";
                break;
        }
        break;
    default:
        echo "yêu em";
        break;
}

?>
