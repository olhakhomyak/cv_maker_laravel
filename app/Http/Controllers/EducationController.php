<?php

namespace App\Http\Controllers;

use App\Entities\Education;
use Illuminate\Http\Request;
use App\Repositories\MainRepository;

class EducationController extends Controller
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
            'school_name' => $content->name,
            'course_name' => $content->course_name,
            'start_date' => $content->start_date,
            'end_date' => $content->end_date,
        ];
        $this->mainRepo->create($data);
    }

    public function destroy($id)
    {
        $this->mainRepo->removeSchool($id);
    }

}
