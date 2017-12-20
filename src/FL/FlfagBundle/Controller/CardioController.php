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

  public function transitAction(Request $request)
  {

    $this->traitementTransitControl($request);
    $this->chaTransitControl($request);
    $this->hasTransitControl($request);
    $this->doctorTransitControl($request);
    $this->patientTransitControl($request);

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

  public function patientTransitControl($request)
  {
    // patientDatas
    $firstname = $request->get("firstname");
    $name = $request->get("name");
    $birthday = $request->get("birthday");
    $neuro_hemo = $request->get("neuro_hemo");

    // dump($firstname, $name, $birthday, $neuro_hemo);
  }

  public function doctorTransitControl($request)
  {
    $transit = $this->container->get("fl_flfag.transit");
    $transit->controlDoctor($request);
    // docDatas
    $firstname_doc = $request->get("firstname_doc");
    $name_doc = $request->get("name_doc");
    $mail = $request->get("mail");
    $cardio = $request->get("cardio");
    $specialite = $request->get("specialite");
    $mail_doc = $request->get("mail_doc");

    $this->flushDoctorDatas($firstname_doc, $name_doc, $mail, $cardio, $specialite, $mail_doc );

  }

  public function flushDoctorDatas($firstname_doc, $name_doc, $mail, $cardio, $specialite, $mail_doc )
  {
    $doctor = new Doctor();
    $doctor->setFirstnameDoc($firstname_doc);
    $doctor->setNameDoc($name_doc);
    $doctor->setMail($mail);
    $doctor->setCardio($cardio);
    $doctor->setSpecialite($specialite);
    $doctor->setMailDoc($mail_doc);


    dump($doctor);
    // $em = $this->getDoctrine()->getManager();
    //
    // $em->persist($doctor);
    // $em->flush();
  }

  public function flushTraitementDatas($aspirine, $thieno, $avk, $naco, $aucun, $contre_eto, $filtre_cave)
  {

    $traitement = new Traitement();

    if($aspirine == null){
      $aspirine = 0;
    }else {
      $aspirine = 1;
    }
    if ($thieno == null) {
      $thieno = 0;
    }else {
      $thieno = 1;
    }
    if ($avk == null) {
      $avk = 0;
    }else {
      $avk = 1;
    }
    if ($naco == null) {
      $naco = 0;
    }else {
      $naco = 1;
    }
    if ($aucun == null) {
      $aucun = 0;
    }else {
      $aucun = 1;
    }
    if ($contre_eto == null) {
      $contre_eto = 0;
    }else {
      $contre_eto = 1;
    }
    if ($filtre_cave == null) {
      $filtre_cave = 0;
    }else {
      $filtre_cave = 1;
    }

    $traitement->setAspirine($aspirine);
    $traitement->setThieno($thieno);
    $traitement->setAvk($avk);
    $traitement->setNaco($naco);
    $traitement->setAucun($aucun);
    $traitement->setContreEto($contre_eto);
    $traitement->setFiltreCave($filtre_cave);

    // dump($traitement);
    $em = $this->getDoctrine()->getManager();

    // $em->persist($traitement);
    //
    // $em->flush();
  }

  public function traitementTransitControl($request)
  {
    // traitementDatas
    $aspirine = $request->get("aspirine");
    $thieno = $request->get("thieno");
    $avk = $request->get("avk");
    $naco = $request->get("naco");
    $aucun = $request->get("aucun");
    $contre_eto = $request->get("contre_eto");
    $filtre_cave = $request->get("filtre_cave");

    $this->flushTraitementDatas($aspirine, $thieno, $avk, $naco, $aucun, $contre_eto, $filtre_cave);
  }

  public function chaTransitControl($request)
  {
    $insu_cardiaque = $request->get("insu_cardiaque");
    $hta = $request->get("hta");
    $age = $request->get("age");
    $diabete = $request->get("diabete");
    $atcd = $request->get("atcd");
    $vasculaire = $request->get("vasculaire");
    $age_tranche = $request->get("age_tranche");
    $femme = $request->get("femme");

    $this->flushChaDatas($insu_cardiaque, $hta, $age, $diabete, $atcd, $vasculaire, $age_tranche, $femme);
  }

  public function flushChaDatas($insu_cardiaque, $hta, $age, $diabete, $atcd, $vasculaire, $age_tranche, $femme)
  {
    $cha = new Cha();

    if ($insu_cardiaque == null) {
      $insu_cardiaque = 0;
    }else {
      $insu_cardiaque = 1;
    }
    if ($hta == null) {
      $hta = 0;
    }else {
      $hta = 1;
    }
    if ($age == null) {
      $age = 0;
    }else {
      $age = 1;
    }
    if ($diabete == null) {
      $diabete = 0;
    }else {
      $diabete = 1;
    }
    if ($atcd == null) {
      $atcd = 0;
    }else {
      $atcd = 1;
    }
    if ($vasculaire == null) {
      $vasculaire = 0;
    }else {
      $vasculaire = 1;
    }
    if ($age_tranche == null) {
      $age_tranche = 0;
    }else {
      $age_tranche = 1;
    }
    if ($femme == null) {
      $femme = 0;
    }else {
      $femme = 1;
    }

    $cha->setInsuCardiaque($insu_cardiaque);
    $cha->setHta($hta);
    $cha->setAge($age);
    $cha->setDiabete($diabete);
    $cha->setAtcd($atcd);
    $cha->setVasculaire($vasculaire);
    $cha->setAgeTranche($age_tranche);
    $cha->setFemme($femme);

    dump($cha);
    $em = $this->getDoctrine()->getManager();

    // $em->persist($cha);
    // $em->flush();
  }

  public function hasTransitControl($request)
  {
    $hta_has = $request->get("hta_has");
    $insu_hepatique = $request->get("insu_hepatique");
    $insu_renale = $request->get("insu_renale");
    $ait_avc = $request->get("ait_avc");
    $saignement = $request->get("saignement");
    $inr = $request->get("inr");
    $age_has = $request->get("age_has");
    $alcool = $request->get("alcool");
    $ains = $request->get("ains");

    $this->flushHasDatas($hta_has, $insu_hepatique, $insu_renale, $ait_avc, $saignement, $inr, $age_has, $alcool, $ains);
  }

  public function flushHasDatas($hta_has, $insu_hepatique, $insu_renale, $ait_avc, $saignement, $inr, $age_has, $alcool, $ains)
  {
    $has = new Has();

    if ($hta_has == null) {
      $hta_has = 0;
    }else {
      $hta_has = 1;
    }
    if ($insu_hepatique == null) {
      $insu_hepatique = 0;
    }else {
      $insu_hepatique = 1;
    }
    if ($insu_renale == null) {
      $insu_renale = 0;
    }else {
      $insu_renale = 1;
    }
    if ($ait_avc == null) {
      $ait_avc = 0;
    }else {
      $ait_avc = 1;
    }
    if ($saignement == null) {
      $saignement = 0;
    }else {
      $saignement = 1;
    }
    if ($inr == null) {
      $inr = 0;
    }else {
      $inr = 1;
    }
    if ($age_has == null) {
      $age_has = 0;
    }else {
      $age_has = 1;
    }
    if ($alcool == null) {
      $alcool = 0;
    }else {
      $alcool = 1;
    }
    if ($ains == null) {
      $ains = 0;
    }else {
      $ains = 1;
    }

    $has->setHtaHas($hta_has);
    $has->setInsuHepatique($insu_hepatique);
    $has->setInsuRenale($insu_renale);
    $has->setAitAvc($ait_avc);
    $has->setSaignement($saignement);
    $has->setInr($inr);
    $has->setAgeHas($age_has);
    $has->setAlcool($alcool);
    $has->setAins($ains);

    dump($has);

    // $em = $this->getDoctrine()->getManager();
    // $em->persist($has);
    // $em->flush();
  }

  public function flushPatientDatas($firstname, $name, $birthday, $neuro_hemo)
  {
    $em = $this->getDoctrine()->getManager();

  }

}
