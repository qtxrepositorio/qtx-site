<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Areas Controller
 *
 *
 * @method \App\Model\Entity\Area[] paginate($object = null, array $settings = [])
 */
class AreasController extends AppController
{
    //analises industriais e ambientais
    public function waterAndEffluent(){}
    public function airQualityAndGasEmissions(){}
    public function foodAndSwabs(){}
    public function automotiveFuels(){}
    public function solidWaste(){}
    public function occupationalHealth(){}



    //operacoes industriais e ambientais
    public function wasteTransportation(){}
    public function wasteManagement(){}
    public function wastewaterTreatment(){}
    public function cleaningAndPredialAndGreenAreaConservation(){}
    public function industrialCleaning(){}

}
