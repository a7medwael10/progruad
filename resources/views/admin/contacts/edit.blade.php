@extends('admin.dashboard')

@section('content')
    <div class="form">
        <h2>تعديل رقم تواصل</h2>
        <form  action="{{route('admin.contacts.update',['contact'=>$contact])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <div class="col-6">
                <label for="name">اسم المنطقة</label>
                <input type="text" name="region-ar"  value="{{$contact->getTranslations('region')['ar']}}">
                <x-input-error :messages="$errors->get('region')" class="mt-2" />
                </div>
                <div class="col-6">
                    <label for="name">اسم المنطقة باللغة الانجليزية :</label>
                    <input type="text"  name="region-en" value="{{$contact->getTranslations('region')['en']}}">
                    <x-input-error :messages="$errors->get('region-en')" class="mt-2" />
                </div>
            </div>
            <div class="form-group">
                <label for="name">رقم التواصل</label>
                <input type="text"  name="number" value="{{$contact->number}}">
                <x-input-error :messages="$errors->get('number')" class="mt-2" />
            </div>
            <button type="submit" class="submit-button">تحديث</button>
        </form>
    </div>
@endsection
<link rel="stylesheet" href="{{asset('assets')}}/css/admin.css">
