<?php
namespace App\Controller;
use App\Model\BillModel;

class BillController
{
  protected  $billModel;
  public function __construct()
  {
      $this->billModel =new BillModel();
  }
  public function index()
  {
      $bills = $this->billModel->getALl();
      include "src/View/list.php";
  }
  public function show($id)
  {
      $bill = $this->billModel->getALl();
      include "src/View/detail.php";
  }
}