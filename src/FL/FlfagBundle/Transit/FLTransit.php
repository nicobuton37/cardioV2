<?php
// src/FL/FlfagBundle/Transit/FLTransit.php

namespace FL\FlfagBundle\Transit;


use FL\FlfagBundle\Entity\Cha;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FLTransit
{

    /**
     * @param Cha $cha
     * @return int
     */
    public function getScoreCha(Cha $cha)
    {




        return new JsonResponse($output);
    }

   /* public function getScoreHas(Has $has)
    {
        foreach ($has as $values) {
            if ($values == true)
        }
    }*/

}
