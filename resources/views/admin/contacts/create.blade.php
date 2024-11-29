
@extends('admin.dashboard')

@section('content')
    <div class="form">
        <h2>اضافة رقم تواصل</h2>
        <form id="addProductForm" action="{{route('admin.contacts.store')}}" method="POST">
            @csrf
            <div class="form-group row">
               <div class="col-6">
                   <label for="name">اسم المنطقة:</label>
                   <input type="text"  name="region-ar" value="{{old('region-ar')}}">
                   <x-input-error :messages="$errors->get('region-ar')" class="mt-2" />
               </div>
                <div class="col-6">
                    <label for="name">اسم المنطقة باللغة الانجليزية :</label>
                    <input type="text"  name="region-en" value="{{old('region-en')}}">
                    <x-input-error :messages="$errors->get('region-en')" class="mt-2" />
                </div>
            </div>

            <div class="form-group">
                <label for="name">رقم التواصل:</label>
                <input type="text"  name="number" value="{{old('number')}}">
                <x-input-error :messages="$errors->get('number')" class="mt-2" />
            </div>
            <button type="submit" class="submit-button">اضافة</button>
        </form>
    </div>

@endsection

<link rel="stylesheet" href="{{asset('assets')}}/css/admin.css">
