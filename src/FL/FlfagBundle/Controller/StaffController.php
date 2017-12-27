<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/12/17
 * Time: 12:07
 */

namespace FL\FlfagBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaffController extends Controller
{
    public function indexAction($codePatient)
    {
        $patient = $this->getDoctrine()->getRepository("FLFlfagBundle:Patient")->findOneBy(array('codePatient' => $codePatient));
        $doctor = $this->getDoctrine()->getRepository("FLFlfagBundle:Doctor")->findOneBy(array('id' => $patient->getDoctor()));
        $traitement = $this->getDoctrine()->getRepository("FLFlfagBundle:Traitement")->findOneBy(array('id' => $patient->getTraitement()));
        $cha = $this->getDoctrine()->getRepository("FLFlfagBundle:Cha")->findOneBy(array('id' => $patient->getCha()));
        $has = $this->getDoctrine()->getRepository("FLFlfagBundle:Has")->findOneBy(array('id' => $patient->getHas()));
        return $this->render("FLFlfagBundle:FLFAG/Staff:index.html.twig", array(
            'codePatient' => $codePatient,
            'patient' => $patient,
            'doctor' => $doctor,
            'traitement' => $traitement,
            'cha' => $cha,
            'has' => $has
        ));
    }
}