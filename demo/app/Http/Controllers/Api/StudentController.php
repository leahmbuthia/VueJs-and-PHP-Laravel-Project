<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // ftech data
    public function index(){
        $students =Student::al();
    if($students->count() >0){
        return response() -> json([
            'status' =>200,
            'students' => $students
        ],200);
    }else{
     return response() ->json([
        'status'=> 404,
        'students' => 'No Records fund'], 404);
    }
}
}
