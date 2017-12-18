<?php
// src/FL/FlfagBundle/Controller/CardioController.php

namespace FL\FlfagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CardioController extends Controller
{

  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();

    return $this->render('FLFlfagBundle:FLFAG:index.html.twig');
  }

  public function transitAction()
  {
    return $this->render('FLFlfagBundle:FLFAG:transit.html.twig');
  }

  public function toDoctorAction($patientId, $staffId)
  {
    return $this->render('FLFlfagBundle:FLFAG:doctor.html.twig',
      array(
        'patientId' => $patientId,
        'staffId' => $staffId
      ));
  }

  public function toStaffAction($patientId)
  {
    return $this->render('FLFlfagBundle:FLFAG:staff.html.twig');
  }
}
