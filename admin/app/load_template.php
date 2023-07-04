<?php

$pageName = $_GET['module'] ?? null;
$actionName = $_GET['action'] ?? null;

// if($pageName != 'auth' && empty($_SESSION['user'])) {
//     header('location:index.php?module=auth&action=login');
// }
// if ($actionName == 'login' && !empty($_SESSION['user'])) {
//     header('location:index.php?module=product');
// }



switch ($pageName) {
    case 'product': {
        switch ($actionName) {
            case 'create': {
                require('./products/form.php');
                break;
                
            }

            case 'edit': {
                require('./products/edit.php');
                break;
            }
            default: {
                require('./products/index.php');
            }
        }
        break;
    }
        case 'user': {
            switch ($actionName) {
                case 'add': {
                    require('./users/add.php');
                    break;
                }
                case 'edit': {
                    require('./users/edit.php');
                    break;
                }

                case 'delete': {
                    require('./users/delete.php');
                    break;
                }
                default: {
                    require('./users/list.php');
                    break;
                }
            }
            break;
        }

        case 'auth': {
            if($actionName == 'login') {
                require "./auth/process_login.php";
                require "./auth/login.php";

                if ($actionName == 'logout') {
                    require './auth/logout.php';
                }    
                
            }
            break;
        }
            

}