<?php
require_once 'models/Order.php';
require_once 'controllers/Controller.php';

    class OrderController extends Controller{
        public function index(){
            // Controller gọi Model
            $order_model = new Order();
            $orders = $order_model->getAll();

            // Controller gọi View
            $this->page_title ='Danh sách hoá đơn';
            $this->content =
                $this->render('views/categories/order.php',[
                    'order' => $orders
                ]);
            require_once 'views/layouts/order.php';
        }
    }
?>