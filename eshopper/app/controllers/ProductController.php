<?php
namespace App\Controllers;
use App\Models\Product;
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