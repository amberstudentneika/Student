<?php

namespace App\Http\Livewire;

use App\Models\student;
use Livewire\Component;
use Livewire\WithPagination;

class AddStudent extends Component
{
    use WithPagination;
    public $lvName, $lvDob;
    public $editMode=false;
    public $editID;

    public function addStudent(){
        student::create([
            'name' => $this->lvName,
            'dob'  => $this->lvDob
        ]);
        $this->clearField();
        session()->flash('message','student added successfully!');
    }
    public function state($id){
        $this->editMode=true;
        $this->editID=$id;
        $obj= student::find($id);
        $this->lvName = $obj->name;
        $this->lvDob = $obj->dob;
    }

    public function editStudent(){
        $id=$this->editID;
        student::find($id)->update([
            'name' => $this->lvName,
            'dob'  => $this->lvDob
        ]);
        $this->editMode=false;
        $this->clearField();
        session()->flash('message','file updated successfully!');
    }

    public function clearField(){
        $this->lvName="";
        $this->lvDob="";
    }

    public function render()
    {
        $data=student::paginate(2);
        return view('livewire.add-student',compact('data'));
    }
}
