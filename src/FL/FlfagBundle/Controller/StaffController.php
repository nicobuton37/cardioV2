<?php

namespace FL\FlfagBundle\Controller;


use FL\FlfagBundle\Entity\Post_close;
use FL\FlfagBundle\Entity\Post_imp;
use FL\FlfagBundle\Entity\Staf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StaffController extends Controller
{
    /**
     * @param $codePatient
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $codePatient)
    {
        $date = $request->get('staff_date');
        $staffDate = date_create_from_format('Y-m-d', $date);
        if ($request->isMethod("post")) {
            $staff = new Staf();
            $staff->setCodePatient($codePatient);
            $staff->setStaffDate($staffDate);
            $staff->setClose($request->get('close') == null ? 0 : 1);
            $staff->setExamen($request->get('examen'));
            $staff->setPostOp($request->get('post_op'));
            $this->setPostImpDatas($request, $staff);
            $this->setPostCloseDatas($request, $staff);

            $em = $this->getDoctrine()->getManager();
            $em->persist($staff);
            $em->flush();
            dump($staff);
            return $this->redirectToRoute('toDoctor', array('codePatient' => $codePatient));
        } else {
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

    public function toDoctorAction($codePatient)
    {
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository("FLFlfagBundle:Patient")->findOneBy(array("codePatient" => $codePatient));
        $doctor = $em->getRepository("FLFlfagBundle:Doctor")->findOneBy(array("id" => $patient->getDoctor()));

        $staff = $em->getRepository("FLFlfagBundle:Staf")->findOneBy(array("codePatient" => $codePatient));
        $postClose = $em->getRepository("FLFlfagBundle:Post_close")->findOneBy(array("id" => $staff->getPostClose()));
        $postImp = $em->getRepository("FLFlfagBundle:Post_imp")->findOneBy(array("id" => $staff->getPostImp()));
        return $this->render("FLFlfagBundle:FLFAG/Staff:toDoctor.html.twig",
            array(
                'codePatient' => $codePatient,
                'patient' => $patient,
                'doctor' => $doctor,
                'postClose' => $postClose,
                'postImp' => $postImp,
                'staff' => $staff
            ));
    }

    /**
     * @param $request
     * @param Staf $staff
     */
    public function setPostCloseDatas($request, Staf $staff)
    {
        $postClose = new Post_close();
        $postClose->setAnesthesie($request->get('anesthesie') == null ? 0 : 1);
        $postClose->setEtoClose($request->get('eto_close') == null ? 0 : 1);
        $postClose->setTdmCoeur($request->get('tdm_coeur') == null ? 0 : 1);
        $postClose->setTdmCerebral($request->get('tdm_cerebral') == null ? 0 : 1);
        $postClose->setGeriatrique($request->get('geriatrique') == null ? 0 : 1);
        $staff->setPostClose($postClose);
    }

    /**
     * @param $request
     * @param Staf $staff
     */
    public function setPostImpDatas($request, Staf $staff)
    {
        $postImp = new Post_imp();
        $postImp->setEtoImp($request->get('eto_imp'));
        $postImp->setEttImp($request->get('ett_imp'));
        $postImp->setScanner($request->get("scanner"));
        $postImp->setCsNeuro($request->get('cs_neuro'));
        $postImp->setCsCardio($request->get('cs_cardio'));
        $staff->setPostImp($postImp);
    }


}