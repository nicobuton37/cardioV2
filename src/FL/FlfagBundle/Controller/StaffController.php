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
        return $this->render("FLFlfagBundle:FLFAG/Staff:index.html.twig", array('codePatient' => $codePatient, 'patient' => $patient));
    }
}