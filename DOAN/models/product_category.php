<?php
    class Product_category{
        private $product_category_id;
        private $product_category_name	;
       

        public function getproduct_category_id(){return $this->product_category_id; }
        public function getproduct_category_name(){return $this->product_category_name	; }
     

        public function __construct($product_category_id, $product_category_name){
            $this->product_category_id = $product_category_id;
            $this->product_category_name=$product_category_name;
        }   
    }
?>