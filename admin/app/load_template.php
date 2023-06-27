<?php

$pageName = $_GET['module'] ?? null;
$actionName = $_GET['action'] ?? null;



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
            case 'create': {
                require('./users/form.php');
                break;
            }
            case 'edit': {
                require('./products/edit.php');
                break;
            }
            default: {
                require('./users/index.php');
            }
        }
        break;
    }

}