<?php
namespace App\Client\Controllers;
use App\Client\Models\Product;
use App\Shared\BaseController;
class ProductController extends BaseController{
    protected $product;
    public function __construct()
    {
        $this->product=new Product();
    }

    public function list(){
        $products=$this->product->getList();
        $this->render("layout.home", compact('products'));
    }
}