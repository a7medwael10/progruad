@extends('admin.dashboard')

@section('content')
    <div class="form">
        <h2>تعديل منتج</h2>
        <form action="{{route('admin.products.update',['product'=>$product])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <div class="col-6">
                    <label for="name-ar">اسم المنتج</label>
                    <input type="text" name="name-ar" placeholder="Product Name" value="{{$product->getTranslations('name')['ar']}}">
                    <x-input-error :messages="$errors->get('name-ar')" class="mt-2"/>
                </div>
                <div class="col-6">
                    <label for="name-en">الاسم باللغة الانجليزية :</label>
                    <input type="text" id="name-en" name="name-en" value="{{$product->getTranslations('name')['en']}}">
                    <x-input-error :messages="$errors->get('name-en')" class="mt-2"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <label for="name">الوصف</label>
                    <textarea name="description-ar" placeholder="Description" rows="5">{{$product->getTranslations('description')['ar']}}</textarea>
                    <x-input-error :messages="$errors->get('description-ar')" class="mt-2"/>
                </div>
                <div class="col-6">
                    <label for="description-en">الوصف باللغة الانجليزية :</label>
                    <textarea id="description-en" name="description-en" rows="5">{{$product->getTranslations('description')['en']}}</textarea>
                    <x-input-error :messages="$errors->get('description-en')" class="mt-2"/>
                </div>
            </div>
            <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" name="image">
                <x-input-error :messages="$errors->get('image')" class="mt-2"/>
            </div>
            <button type="submit" class="submit-button">تحديث</button>
        </form>
    </div>
@endsection

<style>

</style>
