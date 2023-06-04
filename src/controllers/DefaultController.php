<?php

require_once "AppController.php";

class DefaultController extends AppController{
    public function index() {
        $this->render('login');
    }

    public function projects() {
        $this->render('projects');
    }

    public function accountcreatedsuccessfully() {
        $this->render('accountcreatedsuccessfully');
    }

    public function bookunavailable() {
        $this->render('bookunavailable');
    }

    public function cart() {
        $this->render('cart');
    }

    public function changepassword() {
        $this->render('changepassword');
    }

    public function createaccount() {
        $this->render('createaccount');
    }

    public function enteryoushippingaddres() {
        $this->render('enteryoushippingaddres');
    }

    public function passwordchangedsuccessfully() {
        $this->render('passwordchangedsuccessfully');
    }

    public function settings() {
        $this->render('settings');
    }

    public function thanksforshopping() {
        $this->render('thanksforshopping');
    }

    public function wetrytosend() {
        $this->render('wetrytosend');
    }

    public function whathappend() {
        $this->render('whathappend');
    }

    public function whatyouarelooking() {
        $this->render('whatyouarelooking');
    }

    public function wherecourierneedstogo() {
        // display accountdeactivated.php
        $this->render('wherecourierneedstogo');
    }

    public function yeswehaveitbook() {
        // display accountdeactivated.php
        $this->render('yeswehaveitbook');
    }

    public function yeswehaveitebook() {
        // display accountdeactivated.php
        $this->render('yeswehaveitebook');
    }
}
