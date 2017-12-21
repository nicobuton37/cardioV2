<?php
// src/FL/FlfagBundle/Controller/CardioController.php

namespace FL\FlfagBundle\Controller;

use FL\FlfagBundle\Entity\Has;
use FL\FlfagBundle\Entity\Doctor;
use FL\FlfagBundle\Entity\Patient;
use FL\FlfagBundle\Entity\Cha;
use FL\FlfagBundle\Entity\Traitement;
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

  public function transitDoctorAction(Request $request)
  {

    $this->addPatientAction($request);

    return $this->render('FLFlfagBundle:FLFAG:transitDoctor.html.twig');
  }

  public function transitStaffAction()
  {
    return $this->render('FLFlfagBundle:FLFAG:transitStaff.html.twig');
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
  public function addPatientAction($request)
  {
    $em = $this->getDoctrine()->getManager();
    $patient = new Patient();
    // get doctor form
    $firstname_doc = $request->get("firstname_doc");
    $name_doc = $request->get("name_doc");
    $mail = $request->get("mail");
    $cardio = $request->get("cardio");
    $specialite = $request->get("specialite");
    $mail_doc = $request->get("mail_doc");

    $doctor = new Doctor();
    $doctor->setFirstnameDoc($firstname_doc);
    $doctor->setNameDoc($name_doc);
    $doctor->setMail($mail);
    $doctor->setCardio($cardio);
    $doctor->setSpecialite($specialite);
    $doctor->setMailDoc($mail_doc);
    $patient->setDoctor($doctor);
    $em->persist($doctor);

    $aspirine = $request->get("aspirine");
    $thieno = $request->get("thieno");
    $avk = $request->get("avk");
    $naco = $request->get("naco");
    $aucun = $request->get("aucun");
    $contre_eto = $request->get("contre_eto");
    $filtre_cave = $request->get("filtre_cave");

    $traitement = new Traitement();
    $aspirine == null ? $traitement->setAspirine(0) : $traitement->setAspirine(1);
    $thieno == null ? $traitement->setThieno(0) : $traitement->setThieno(1);
    $avk == null ? $traitement->setAvk(0) : $traitement->setAvk(1);
    $naco == null ? $traitement->setNaco(0) : $traitement->setNaco(1);
    $aucun == null ? $traitement->setAucun(0) : $traitement->setAucun(1);
    $contre_eto == null ? $traitement->setContreEto(0) : $traitement->setContreEto(1);
    $filtre_cave == null ? $traitement->setFiltreCave(0) : $traitement->setFiltreCave(1);
    $patient->setTraitement($traitement);
    $em->persist($traitement);

    $cha = new Cha();
    $insu_cardiaque = $request->get("insu_cardiaque");
    $hta = $request->get("hta");
    $age = $request->get("age");
    $diabete = $request->get("diabete");
    $atcd = $request->get("atcd");
    $vasculaire = $request->get("vasculaire");
    $age_tranche = $request->get("age_tranche");
    $femme = $request->get("femme");

    $insu_cardiaque == null ? $cha->setInsuCardiaque(0) : $cha->setInsuCardiaque(1);
    $hta == null ? $cha->setHta(0) : $cha->setHta(1);
    $age == null ? $cha->setAge(0) : $cha->setAge(1);
    $diabete == null ? $cha->setDiabete(0) : $cha->setDiabete(1);
    $atcd == null ? $cha->setAtcd(0) : $cha->setAtcd(1);
    $vasculaire == null ? $cha->setVasculaire(0) : $cha->setVasculaire(1);
    $age_tranche == null ? $cha->setAgeTranche(0) : $cha->setAgeTranche(1);
    $femme == null ? $cha->setFemme(0) : $cha->setFemme(1);
    $patient->setCha($cha);
    $em->persist($cha);

    $has = new Has();
    $hta_has = $request->get("hta_has");
    $insu_hepatique = $request->get("insu-hepatique");
    $insu_renale = $request->get("insu_renale");
    $ait_avc = $request->get("ait_avc");
    $saignement = $request->get("saignement");
    $inr = $request->get("inr");
    $age_has = $request->get("age_has");
    $alcool = $request->get("alcool");
    $ains = $request->get("ains");

    $hta_has == null ? $has->setHtaHas(0) : $has->setHtaHas(1);
    $insu_hepatique == null ? $has->setInsuHepatique(0) : $has->setInsuHepatique(1);
    $insu_renale == null ? $has->setInsuRenale(0) : $has->setInsuRenale(1);
    $ait_avc == null ? $has->setAitAvc(0) : $has->setAitAvc(1);
    $saignement == null ? $has->setSaignement(0) : $has->setSaignement(1);
    $inr == null ? $has->setInr(0) : $has->setInr(1);
    $age_has == null ? $has->setAgeHas(0) : $has->setAgeHas(1);
    $alcool == null ? $has->setAlcool(0) : $has->setAlcool(1);
    $ains == null ? $has->setAins(0) : $has->setAins(1);
    $patient->setHas($has);
    $em->persist($has);

    $firstname = $request->get("firstname");
    $name = $request->get("name");
    $date = $request->get("birthday");
    $birthday = date_create_from_format('Y-m-d', $date);
    $neuro_hemo = $request->get("neuro_hemo");

    $patient->setFirstname($firstname);
    $patient->setName($name);
    $patient->setBirthday($birthday);
    $patient->setNeuroHemo($neuro_hemo);

    $em->persist($patient);
    $this->getPatientId($patient);
    // $em->flush();


  }

  public function getPatientId($patient)
  {
    $patientId = $this->getDoctrine()->getManager();

      dump($patient->getName());
  }
}
