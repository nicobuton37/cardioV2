<?php
// src/FL/FlfagBundle/Transit/FLTransit.php

namespace FL\FlfagBundle\Transit;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FLTransit
{
  public function controlDoctor($request)
  {
    $message = "";
    $firstname_doc = $request->get("firstname_doc");
    $name_doc = $request->get("name_doc");
    $mail = $request->get("mail");
    $cardio = $request->get("cardio");
    $specialite = $request->get("specialite");
    $mail_doc = $request->get("mail_doc");

    if ($firstname_doc == null || $name_doc == null || $mail == null || $cardio == null || $specialite == null || $mail_doc == null) {
      
    }
  }

}
