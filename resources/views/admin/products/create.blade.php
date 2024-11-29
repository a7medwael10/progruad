
@extends('admin.dashboard')
@section('content')
    <div class="form">
        <h2>اضافة منتج جديد</h2>
        <form id="addProductForm" action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-6">
                    <label for="name-ar">اسم المنتج:</label>
                    <input type="text" id="name" name="name-ar" value="{{old('name-ar')}}" >
                    <x-input-error :messages="$errors->get('name-ar')" class="mt-2" />
                </div>
                <div class="col-6">
                    <label for="name-en">الاسم باللغة الانجليزية :</label>
                    <input type="text" id="name" name="name-en" value="{{old('name-en')}}">
                    <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <label for="description-ar">الوصف:</label>
                    <textarea id="description-ar" name="description-ar" rows="5">{{old('description-ar')}}</textarea>
                    <x-input-error :messages="$errors->get('description-ar')" class="mt-2" />
                </div>
                <div class="col-6">
                    <label for="description-en">الوصف باللغة الانجليزية :</label>
                    <textarea id="description-en" name="description-en" rows="5">{{old('description-en')}}</textarea>
                    <x-input-error :messages="$errors->get('description-en')" class="mt-2" />
                </div>
            </div>
            <div class="form-group">
                <label for="image">اضف صورة:</label>
                <input type="file" id="image" name="image" >
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <button type="submit" class="submit-button">اضافة</button>
        </form>
    </div>
@endsection
<link rel="stylesheet" href="{{asset('assets')}}/css/admin.css">
