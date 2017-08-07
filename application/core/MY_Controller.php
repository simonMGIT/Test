<?php

class MY_controller extends CI_Controller {
    
    public function __contrstruct()
    {
        if(! $this->isAuthorized()) return redirect('home');
    }
    
}
