<?php
    $url = isset($_GET['url']) == true ? $_GET['url'] :"/" ;

    switch ($url){
        case '/':
            require_once 'controllers/CustomerController.php';
            $index = new CustomerController();
            echo $index->listCustomer();
            break;

        case 'add-customer':
            require_once 'controllers/CustomerController.php';
            $index = new CustomerController();
            echo $index->addCustomer();
            break;

        case 'update-customer':
            require_once 'controllers/CustomerController.php';
            $index = new CustomerController();
            echo $index->updateCustomer();
            break;
            
        case 'remove-customer':
            require_once 'controllers/CustomerController.php';
            $index = new CustomerController();
            echo $index->removeCustomer();
            break;
    }
?>
