<div>
        <div class="flex items-center min-h-screen justify-center bg-blue-300">
            <div class="px-8 py-6 mt-4 text-left rounded-md bg-white shadow-lg">
                  <select wire:model.fire="student_id">
                    <option value="">Select Student</option>
                    @forelse($data as $info)
                        <option value="{{$info->id}}">{{$info->name}}</option>
                    @empty
                        <option>no data</option>
                    @endforelse
                </select>
                <br/>
                <br/>
                <div>
                    <select>
                        @forelse($phonenumbers as $info)
                            <option value="{{$info->id}}">{{$info->phone_number}}</option>
                        @empty
                            <option>no data</option>
                        @endforelse
                    </select>
                </div>
{{--                <label>Number</label><br/>--}}
{{--                <input type="text" wire:model="lvNumber" placeholder="Enter contact number">--}}
            </div>
        </div>


</div>
