<div>
    <div class="flex items-center min-h-screen justify-center bg-blue-300">
        <div class="px-8 py-6 mt-4 text-left rounded-md bg-white shadow-lg">
           <div><span class="bg-green-500 text-green-800"> {{ session()->get('message') }}</span></div>
        <select wire:model="idNum">
            <option value="">Select Student</option>
            @forelse($data as $info)
            <option value="{{$info->id}}">{{$info->name}}</option>
            @empty
            <option>no data</option>
            @endforelse
        </select>
<br/>
<br/>
            <label>Number</label><br/>
            <input type="text" wire:model="lvNumber" placeholder="Enter contact number">
        </div>
        <div>
            <button wire:click="addNumber" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Add</button>
        </div></div>
</div>

