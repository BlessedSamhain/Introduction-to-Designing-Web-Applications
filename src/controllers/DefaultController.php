<?php 

require_once "AppController.php";

class DefaultController extends AppController{
    public function index() {
        // display login.php
        $this->render('login');
    }

    public function projects() {
        // display project.html
        $this->render('projects');
    }

    public function accountcreatedsuccessfully() {
        // display accountcreatedsuccessfully.php
        $this->render('accountcreatedsuccessfully');
    }

    public function accountdeactivated() {
        // display accountdeactivated.php
        $this->render('accountdeactivated');
    }

    public function bookunavailable() {
        // display accountcreatedsuccessfully.php
        $this->render('accountcreatedsuccessfully');
    }

    public function cart() {
        // display accountdeactivated.php
        $this->render('cart');
    }

    public function change_email() {
        // display accountcreatedsuccessfully.php
        $this->render('change_email');
    }

    public function changenumber() {
        // display accountdeactivated.php
        $this->render('changenumber');
    }

    public function changepassword() {
        // display accountcreatedsuccessfully.php
        $this->render('changepassword');
    }

    public function createaccount() {
        // display accountdeactivated.php
        $this->render('createaccount');
    }

    public function deleteaccount() {
        // display accountcreatedsuccessfully.php
        $this->render('deleteaccount');
    }

    public function ebooksent() {
        // display accountdeactivated.php
        $this->render('ebooksent');
    }

    public function ebookunavailable() {
        // display accountcreatedsuccessfully.php
        $this->render('ebookunavailable');
    }

    public function emailchangedsuccessfully() {
        // display accountdeactivated.php
        $this->render('emailchangedsuccessfully');
    }

    public function enteryoushippingaddres() {
        // display accountdeactivated.php
        $this->render('enteryoushippingaddres');
    }

    public function numberchangedsuccessfully() {
        // display accountdeactivated.php
        $this->render('numberchangedsuccessfully');
    }

    public function passwordchangedsuccessfully() {
        // display accountdeactivated.php
        $this->render('passwordchangedsuccessfully');
    }

    public function settings() {
        // display accountdeactivated.php
        $this->render('settings');
    }

    public function thanksforshopping() {
        // display accountdeactivated.php
        $this->render('thanksforshopping');
    }

    public function wetrytosend() {
        // display accountdeactivated.php
        $this->render('wetrytosend');
    }

    public function whathappend() {
        // display accountdeactivated.php
        $this->render('whathappend');
    }

    public function whatyouarelooking() {
        // display accountdeactivated.php
        $this->render('whatyouarelooking');
    }
    public function whatyouarelookingebook() {
        // display accountdeactivated.php
        $this->render('whatyouarelookingebook');
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