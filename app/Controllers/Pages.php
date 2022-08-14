<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // For patient Page 
    public function login(){
        echo view('pages/login');
    }

    // For home page
    public function home(){
        echo view('template/header');
        echo view('pages/home');
        echo view('template/header');
    }

    // For loading dashboard
    public function dashboard(){
        echo view('template/header');
        echo view(('pages/dashboard'));
        echo view('template/footer');
    }

    // For patient Page 
    public function patient(){
        echo view('template/header');
        echo view('pages/patient');
        echo view('template/footer'); 
    }


    // For patient Page 
    public function record(){

        $patientModel = model('App\Models\PatientModel');
        $data['record'] = $patientModel->getPatient();
        
        
        echo view('template/header');
        echo view('pages/record',$data);
        echo view('template/footer'); 
    }

        // For patient Page 
        public function test(){
            
            echo view('pages/test');
             
        }
}