<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

// Class controller product
class ProductController extends Controller
{

  //gunakan trait ang sudah dibuat
  use ResponseFormatter;

  //method yang diakses pada saat pembuatan object
  public function __construct()
  {
    //set atribut controllername 
    $this->controllerName = "Get all product";

    //set atribut controllermethod
    $this->controllerMethod = "GET";
  }

  //method untuk get product dara
  public function getAllProduct()
  {
    $dummyData = [
      "Air Mineral",
      "Kebab",
      "Spaghetti",
      "Jus jambu"
    ];

    $response = [
      "controller_attribute" => $this->getControllerAttribute(),
      "product" => $dummyData
    ];

    //method trait dari trait sudah dibuat
    return $this->responseFormatter(200, "Succes", $response);
  }
}
