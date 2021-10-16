<?php
namespace App\Services;

class BasicInjectableService{
    public $input;
    public $validator;
    public function __construct($input = null)
    {
        $this->input = $input->all();
    }
    
    public function validate($data,$rules){
        $this->validator = validator($data,$rules);
        return !$this->validator->fails();
    }
    
    
}
