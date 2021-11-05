<?php

namespace App\Http\Livewire;
use App\Models\phone_numbers;
use App\Models\student;
use Livewire\Component;

class AddNumber extends Component
{
    public $lvNumber, $idNum;

    public function addNumber(){
        $idNum = $this->idNum;
            phone_numbers::create([
                'phone_number' => $this->lvNumber,
                'student_id' => $this->idNum
            ]);
            session()->flash('message', 'contact number added successfully!');
    }

    public function render()
    {
        $data=Student::all();
        return view('livewire.add-number',compact('data'));
    }
}
