<?php
// src/FL/FlfagBundle/Controller/CardioController.php

namespace FL\FlfagBundle\Controller;

use FL\FlfagBundle\Entity\Patient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CardioController extends Controller
{

// views
  public function indexAction()
  {

    return $this->render('FLFlfagBundle:FLFAG:index.html.twig');
  }

  public function transitAction(Request $request)
  {
    // patientDatas
    $firstname = $request->get("firstname");
    $name = $request->get("name");
    $birthday = $request->get("birthday");
    $neuro_hemo = $request->get("neuro_hemo");

    // docDatas
    $firstname_doc = $request->get("firstname_doc");
    $name_doc = $request->get("name_doc");
    $mail = $request->get("mail");
    $cardio = $request->get("cardio");
    $specialite = $request->get("specialite");
    $mail_doc = $request->get("mail_doc");

    // traitementDatas
    var_dump($request->get("firstname"));

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

  public function archiveAction($patientId, $staffId)
  {
    return $this->render('FLFlfagBundle:FLFAG:archive.html.twig');
  }

  // Request
  public function patientDatas($firstname, $name, $birthday, $neuro_hemo)
  {
    $em = $this->getDoctrine()->getManager();
  }

  public function doctorDatas($firstname_doc, $name_doc, $mail, $cardio, $specialite, $mail_doc)
  {
    $em = $this->getDoctrine()->getManager();

  }

  public function traitementDatas($aspirine, $thieno, $avk, $naco, $aucun, $contre_eto, $filtre_cave)
  {
    // $em = $this->getDoctrine()->getManager();


  }

  public function chaDatas($insu_cardiaque, $hta, $age, $diabete, $atcd, $vasculaire, $age_tranche, $femme)
  {
    $em = $this->getDoctrine()->getManager();

  }

  public function hasDatas($hta_has, $insu_hepatique, $insu_renale, $ait_avc, $saignement, $inr, $age_has, $alcool, $ains)
  {
    $em = $this->getDoctrine()->getManager();

  }
}
