<?php
  require_once 'models/Cart.php';
  require_once 'controllers/Controller.php';
    class CartController extends Controller{
        public function store(){
            $productId = $_GET['id'] ?? null;
            echo $productId;
        }

    }
?>