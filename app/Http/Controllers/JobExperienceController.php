<?php

namespace App\Http\Controllers;

use App\Entities\JobExperience;
use Illuminate\Http\Request;
use App\Repositories\MainRepository;

class JobExperienceController extends Controller
{
    private $mainRepo;

    public function __construct(MainRepository $mainRepository)
    {
        $this->mainRepo = $mainRepository;
    }

    public function store(Request $request)
    {
        $content = json_decode($request['params']);

        $data = [
            'user_id' => $content->user_id,
            'job_title' => $content->title,
            'company_name' => $content->companyName,
            'start_date' => $content->start_date,
            'end_date' => $content->end_date,
        ];
        $this->mainRepo->addJob($data);
    }

    public function destroy($id)
    {
        $this->mainRepo->removeJob($id);
    }
}