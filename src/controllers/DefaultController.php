<?php 

require_once "AppController.php";

class DefaultController extends AppController{
    public function login() {
        // display login.html
        $this->render('login');
    }

    public function projects() {
        // display project.html
        $this->render('projects');
    }

    public function accountcreatedsuccessfully() {
        // display accountcreatedsuccessfully.html
        $this->render('accountcreatedsuccessfully');
    }

    public function accountdeactivated() {
        // display accountdeactivated.html
        $this->render('accountdeactivated');
    }

    public function bookunavailable() {
        // display accountcreatedsuccessfully.html
        $this->render('accountcreatedsuccessfully');
    }

    public function cart() {
        // display accountdeactivated.html
        $this->render('cart');
    }

    public function change_email() {
        // display accountcreatedsuccessfully.html
        $this->render('change_email');
    }

    public function changenumber() {
        // display accountdeactivated.html
        $this->render('changenumber');
    }

    public function changepassword() {
        // display accountcreatedsuccessfully.html
        $this->render('changepassword');
    }

    public function createaccount() {
        // display accountdeactivated.html
        $this->render('createaccount');
    }

    public function deleteaccount() {
        // display accountcreatedsuccessfully.html
        $this->render('deleteaccount');
    }

    public function ebooksent() {
        // display accountdeactivated.html
        $this->render('ebooksent');
    }

    public function ebookunavailable() {
        // display accountcreatedsuccessfully.html
        $this->render('ebookunavailable');
    }

    public function emailchangedsuccessfully() {
        // display accountdeactivated.html
        $this->render('emailchangedsuccessfully');
    }

    public function enteryoushippingaddres() {
        // display accountdeactivated.html
        $this->render('enteryoushippingaddres');
    }

    public function numberchangedsuccessfully() {
        // display accountdeactivated.html
        $this->render('numberchangedsuccessfully');
    }

    public function passwordchangedsuccessfully() {
        // display accountdeactivated.html
        $this->render('passwordchangedsuccessfully');
    }

    public function settings() {
        // display accountdeactivated.html
        $this->render('settings');
    }

    public function thanksforshopping() {
        // display accountdeactivated.html
        $this->render('thanksforshopping');
    }

    public function wetrytosend() {
        // display accountdeactivated.html
        $this->render('wetrytosend');
    }

    public function whathappend() {
        // display accountdeactivated.html
        $this->render('whathappend');
    }

    public function whatyouarelooking() {
        // display accountdeactivated.html
        $this->render('whatyouarelooking');
    }
    public function whatyouarelookingebook() {
        // display accountdeactivated.html
        $this->render('whatyouarelookingebook');
    }

    public function wherecourierneedstogo() {
        // display accountdeactivated.html
        $this->render('wherecourierneedstogo');
    }

    public function yeswehaveitbook() {
        // display accountdeactivated.html
        $this->render('yeswehaveitbook');
    }

    public function yeswehaveitebook() {
        // display accountdeactivated.html
        $this->render('yeswehaveitebook');
    }
}