<?php

if(!isset($_GET['controller'])){
    require_once('controllers/SiteController.php');
    $SiteController = new SiteController();
    $SiteController-> home();

}else{
    switch ($_REQUEST['controller']) {
        case 'site':
            require_once('controllers/SiteController.php');
            $SiteController = new SiteController();
            if (!isset($_GET['action'])) {
                $SiteController -> home();
            }else {
                switch ($_REQUEST['action']) {
                    case 'home':
                        $SiteController -> home();
                        break;
                    case 'about':
                        $SiteController -> about();
                        break;
                    case 'products':
                        $SiteController -> products();
                        break;
                    case 'contact':
                        $SiteController -> contact();
                        break;
                    
                    default:
                        # code...
                        break;
                }
            }
            break;
        
            
        break;

        case 'client':
            require_once('controllers/ClientController.php');
            $ClientController = new ClientController();
            if (!isset($_GET['action'])) {
                //ação
            }else {
                switch ($_REQUEST['action']) {
                    case 'register':
                        $ClientController -> register();
                        break;
                    case 'registerView':
                        $ClientController -> registerView();
                        break;
                    case 'listClients':
                        $ClientController -> listClients();
                        break;

                    default:
                        # code...
                        break;
                }
            }
        break;
        case 'products':
            require_once('controllers/ProductsController.php');
            $ProductsController = new ProductsController();
            if (!isset($_GET['action'])){

            }else{
                switch ($_REQUEST['action']){
                    case 'listProducts':
                        $ProductsController -> listProducts();
                    break;
                }
            }
        break;
         
    }
}