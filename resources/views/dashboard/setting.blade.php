@extends('layout.app-2')

@section('content')
    <div class="bg-white shadow rounded p-5 my-4">
        <h3>Settings</h3>
        <form action="/setting/{{$setting->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="mt-4 ">
                    <img src="{{ asset('uploads/' . $setting->logo) }}" alt="" class="mb-5" style="width:100px;height:auto;">
                    <label for="logo" class="d-block mb-2">Site Logo</label>
                    <input type="file" name="logo" id="logo" class="border rounded p-1">
                </div>

                <div class="mt-4 ">
                    <label for="text" class="d-block mb-2">Site Header Text</label>
                    <textarea type="text" name="header_text" id="text" class="border rounded p-2" style="width:90%" rows="5">{{$setting->header_text}}</textarea>
                </div>

                <div class="mt-4">
                    <label for="logo" class="d-block mb-2">About RMS</label>
                    <textarea type="text" name="about" id="about" class="w-100 p-2 border rounded" rows="10">{{ $setting->about}}</textarea>
                </div>
            </div>
            <div>
                <div class="d-flex gap-4">
                    <div>
                        <div class="mt-4">
                            <label for="phone" class="d-block mb-2">Phone Number:</label>
                            <input type="text" name="phone" id="phone" class="p-2 border rounded" style="width: 320px" placeholder="+880..." value="{{$setting->phone }}">
                        </div>
                        <div class="mt-4">
                            <label for="phone_secondary" class="d-block mb-2"> Secondary Phone Number</label>
                            <input type="text" name="phone_secondary" id="phone_secondary" class="p-2 border rounded" style="width: 320px" placeholder="+880..." value={{$setting->phone_secondary}}>
                        </div>
                        <div class="mt-4">
                            <label for="whatsapp" class="d-block mb-2">Whatsapp Number</label>
                            <input type="text" name="whatsapp" id="whatsapp" class="p-2 border rounded" style="width: 320px"
                            placeholder="+880..." value="{{ $setting->whatsapp}}">
                        </div>
                    </div>
                    <div>
                        <div class="mt-4">
                            <label for="email" class="d-block mb-2">Email</label>
                            <input type="text" name="email" id="email" class="p-2 border rounded" style="width: 320px" value="{{ $setting->email}}">
                        </div>
                        <div class="mt-4">
                            <label for="email_secondary" class="d-block mb-2"> Secondary Email</label>
                            <input type="text" name="email_secondary" id="email_secondary" class="p-2 border rounded" style="width: 320px" value="{{$setting->email_secondary }}">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="whatsapp" class="d-block mb-2">Facebook Link</label>
                    <input type="text" name="facebook_link" id="facebook" class="p-2 border rounded" style="width: 550px" placeholder="https//" value="{{$setting->facebook_link}}">
                </div>
                <div class="row justify-content-between" style="width: 550px">
                    <div class="mt-4 col-6">
                        <label for="country" class="d-block mb-2">Country</label>
                        <input type="text" name="country" id="country" class="p-2 border rounded w-100" value="{{ $setting->country}}">
                    </div>
                    <div class="mt-4 col-6 pe-0">
                        <label for="city" class="d-block mb-2">City</label>
                        <input type="text" name="city" id="city" class="p-2 border rounded w-100" value="{{ $setting->city}}">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="location" class="d-block mb-2">Location</label>
                    <input type="text" name="location" id="location" class="p-2 border rounded" style="width: 550px" value="{{ $setting->location }}">
                </div>
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary px-5">Save</button>
            </div>
        </form>
    </div>
@endsection