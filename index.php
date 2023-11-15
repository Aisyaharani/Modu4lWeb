<?php
include "Controller/ProductController.php";

use Controller\ProductController;

// Deklarasi objek class
$productContyroller = new ProductController;

//Tampilkan hasil kembalian dari method getAllProduct menggunakan echo
echo $productContyroller->getAllProduct();
