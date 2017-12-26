<?php
// src/FL/FlfagBundle/Controller/CardioController.php

namespace FL\FlfagBundle\Controller;


use FL\FlfagBundle\Entity\Cha;
use FL\FlfagBundle\Entity\Doctor;
use FL\FlfagBundle\Entity\Has;
use FL\FlfagBundle\Entity\Patient;
use FL\FlfagBundle\Entity\Traitement;
use FL\FlfagBundle\Repository\PatientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CardioController extends Controller
{

// views
  public function indexAction(Request $request)
  {
    if($request->isMethod('POST')){
        $patient = new Patient();
        $firstname = $request->get('firstname');
        $name = $request->get('name');
        $date = $request->get('birthday');
        $birthday = date_create_from_format('Y-m-d', $date);
        $neuro_hemo = $request->get('neuro_hemo');
        $codePatient = $this->randomCodePatient();

        $em = $this->getDoctrine()->getManager();

        $patient->setFirstname($firstname);
        $patient->setName($name);
        $patient->setBirthday($birthday);
        $patient->setNeuroHemo($neuro_hemo);
        $patient->setCodePatient($codePatient);

        $this->setDoctorDatas($request, $patient);
        $this->setTraitementDatas($request, $patient);
        $this->setChaDatas($request, $patient);
        $this->setHasDatas($request, $patient);

//        $em->persist($patient);
//        $em->flush();
//        dump($patient);
        return $this->redirectToRoute("toStaff", array('codePatient' => $codePatient));
    }
    return $this->render("FLFlfagBundle:FLFAG:index.html.twig");
  }

  public function toStaffAction($codePatient)
  {
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository("FLFlfagBundle:Patient")->findOneBy(array("codePatient" => $codePatient));
        $doctor = $em->getRepository("FLFlfagBundle:Doctor")->findOneBy(array("id" => $patient->getDoctor()));
        $traitement = $em->getRepository("FLFlfagBundle:Traitement")->findOneBy(array("id" => $patient->getTraitement()));
        $cha = $em->getRepository("FLFlfagBundle:Cha")->findOneBy(array('id' => $patient->getCha()));
        $has = $em->getRepository("FLFlfagBundle:Has")->findOneBy(array('id' => $patient->getHas()));
        return $this->render('FLFlfagBundle:FLFAG:toStaff.html.twig', array(
            'patient' => $patient,
            'doctor'  => $doctor,
            'traitement' => $traitement,
            'cha'   => $cha,
            'has' => $has
        ));
  }

  public function setDoctorDatas($request, Patient $patient)
  {
       $doctor = new Doctor();

       $doctor->setFirstnameDoc($request->get('firstname_doc'));
       $doctor->setNameDoc($request->get('name_doc'));
       $doctor->setMailDoc($request->get('mail_doc'));
       $doctor->setSpecialite($request->get('specialite'));
       $doctor->setCardio($request->get('cardio'));
       $doctor->setMail($request->get('mail'));

       $patient->setDoctor($doctor);

  }

  public function setTraitementDatas($request, Patient $patient)
  {
    $traitement = new Traitement();

      $traitement->setAspirine($request->get('aspirine') == null ? 0 : 1);
      $traitement->setThieno($request->get('thieno') == null ? 0 : 1);
      $traitement->setAvk($request->get('avk') == null ? 0 : 1);
      $traitement->setNaco($request->get('naco') == null ? 0 : 1);
      $traitement->setAucun($request->get('aucun') == null ? 0 : 1);
      $traitement->setContreEto($request->get('contre_eto') == null ? 0 : 1);
      $traitement->setFiltreCave($request->get('filtre_cave') == null ? 0 : 1);

      $patient->setTraitement($traitement);
  }

  public function setChaDatas(Request $request, Patient $patient)
  {
      $cha = new Cha();

      $cha->setInsuCardiaque($request->get('insu_cardiaque') == null ? 0 : 1);
      $cha->setHta($request->get('hta') == null ? 0 : 1);
      $cha->setAge($request->get('age') == null ? 0 : 1);
      $cha->setDiabete($request->get('diabete') == null ? 0 : 1);
      $cha->setAtcd($request->get('atcd') == null ? 0 : 1);
      $cha->setVasculaire($request->get('vasculaire') == null ? 0 : 1);
      $cha->setAgeTranche($request->get('age_tranche') == null ? 0 : 1);
      $cha->setFemme($request->get('femme') == null ? 0 : 1);

      $patient->setCha($cha);
  }

  public function setHasDatas(Request $request, Patient $patient)
  {
      $has = new Has();

      $has->setHtaHas($request->get('hta_has') == null ? 0 : 1);
      $has->setInsuHepatique($request->get('insu_hepatique') == null ? 0 : 1);
      $has->setInsuRenale($request->get('insu_renale') == null ? 0 : 1);
      $has->setAitAvc($request->get('ait_avc') == null ? 0 : 1);
      $has->setSaignement($request->get('saignement') == null ? 0 : 1);
      $has->setInr($request->get('inr') == null ? 0 : 1);
      $has->setAgeHas($request->get('age_has') == null ? 0 : 1);
      $has->setAlcool($request->get('alcool') == null ? 0 : 1);
      $has->setAins($request->get('ains') == null ? 0 : 1);

      $patient->setHas($has);

  }

  public function randomCodePatient($length = 10)
  {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }



}
