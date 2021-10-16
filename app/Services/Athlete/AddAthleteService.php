<?php
namespace App\Services\Athlete;

use App\Http\Requests\Web\Athlete\AddAthleteRequest;
use App\Models\Athlete;
use App\Services\BasicInjectableService;
use App\Services\Athlete\ServiceResponseObjects\AddAthleteServiceObjectResponse;
class AddAthleteService extends BasicInjectableService {
    
    public function addAthlete(){
        $addAthleteServiceObjectResponse = new AddAthleteServiceObjectResponse();
        if ($this->validate((array)$this->input, (new AddAthleteRequest())->rules())){
            $addAthleteServiceObjectResponse->validationErrors = null;
            $addAthleteServiceObjectResponse->response = Athlete::create([
                'name'=>$this->input['name'],
                'surname'=>$this->input['surname'],
                'dob'=>$this->input['dob'],
            ]);
        }
        else {
            $addAthleteServiceObjectResponse->validationErrors = $this->validator->errors()->getMessages();
            $addAthleteServiceObjectResponse->response = null;
        }
        return $addAthleteServiceObjectResponse;
    }
}
