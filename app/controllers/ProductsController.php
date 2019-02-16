<?php


class ProductsController extends Controller{
    public function index() {
        $this->set("seo_title",'Lista proizvoda');


        $this->set('products',ProductModel::getAll());

    }
    public function detalji(){
        $product_id = filter_input(INPUT_GET,'product_id',FILTER_SANITIZE_NUMBER_INT);


       $product = ProductModel::getById($product_id);

        $this->set('product',$product);



        $this->set('seo_title','Detalji o proizvodu');

    }
}
