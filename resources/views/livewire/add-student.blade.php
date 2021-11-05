<div>

    <div class="flex items-center min-h-screen justify-center bg-blue-300">
        @if(!$editMode)
            <div class="px-8 py-6 mt-4 text-left rounded-md bg-white shadow-lg">
                <div class="text-green-800 bg-green-400">{{session()->get('message')}}</div>
            <label>Name</label><br/>
            <input type="text" wire:model="lvName" placeholder="Enter name"><br/><br/>
            <label>D.O.B</label><br/>
            <input type="date" wire:model="lvDob" placeholder="Enter d.o.b">
    </div>
            <button wire:click="addStudent" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Add</button>

        @else

            <div class="px-8 py-6 mt-4 text-left rounded-md bg-white shadow-lg">
                <div class="text-green-800 bg-green-400">{{session()->get('message')}}</div>
                <label>Name</label><br/>
                <input type="text" wire:model="lvName" placeholder="Enter name"><br/><br/>
                <label>D.O.B</label><br/>
                <input type="date" wire:model="lvDob" placeholder="Enter d.o.b">
            </div>
            <button wire:click="editStudent" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Update</button>


        @endif
        <div  class="px-8 py-6 mt-4 text-left rounded-md bg-white shadow-lg">
            <table>
                <thead>
                    <tr class="text-center">
                        <td>Name</td>
                        <td>DOB</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
            @foreach($data as $info)
                    <tr class="">
                        <td>{{$info->name}}</td>
                        <td>{{$info->dob}}</td>
                        <td class="bg-blue-600 text-white"><a href="" wire:click.prevent="state({{$info->id}})">Edit</a></td>
                    </tr>
            @endforeach
                </tbody>
            </table>
            {{$data->links()}}
        </div>

    </div>
</div>


{{--</div>--}}

