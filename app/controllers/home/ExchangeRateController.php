<?php
 require_once 'E:\Downloads\Xamp\htdocs\Dashbord\app\models\ExchangeRateModel.php';
 require_once 'E:\Downloads\Xamp\htdocs\Dashbord\core\Controller.php';
  
 class ExchangeRateController extends Controller{
    public function index(){

    $model = $this->model('ExchangeRateModel');
    $rates = $model->getExchangeRates();

    $this->view("graficos/home_graph", ['rates' => $rates]);
    }
 }