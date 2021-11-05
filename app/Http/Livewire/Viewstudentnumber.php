<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\student;
use App\Models\phone_numbers;

class Viewstudentnumber extends Component
{
    public $student_id,$phonenumbers;
    public function render()
    {
        $this->phonenumbers=phone_numbers::where('student_id',$this->student_id)->get();
        $data=Student::all();
        return view('livewire.viewstudentnumber',compact('data'));
    }
}
