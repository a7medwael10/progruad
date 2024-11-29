@extends('admin.dashboard')

@section('content')
    <h2>ادارة المنتجات</h2>
    <a class="button-link" href="{{route('admin.products.create')}}">اضافة</a>
    <div class="row">
        <div class=" col-md-12 mb-3">
            <table>
                <thead>
                <tr>
                    <th>رقم</th>
                    <th>اسم المنتج</th>
                    <th>صورة المنتج</th>
                    <th>اوامر</th>
                </tr>
                </thead>
                <tbody>
                @if(count($products)>0)
                    @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->getTranslations('name')['ar']}}</td>
                            <td><img src="{{asset("storage/uploads/$product->image")}}" alt="" style="max-width: 100px; height: auto;"></td>
                            <td>
                                <a class="button-link action-button"
                                   href="{{route('admin.products.edit',['product'=>$product])}}">تعديل</a>
                                <button class="button-link action-button" type="button"
                                        data-bs-toggle="modal" data-bs-target="#confirmModal{{$loop->iteration}}">
                                    حذف
                                </button>
                                <div class="modal fade" id="confirmModal{{$loop->iteration}}" tabindex="-1"
                                     aria-labelledby="confirmModalLabel{{$loop->iteration}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmModalLabel{{$loop->iteration}}">تأكيد الحذف</h5>
                                            </div>
                                            <div class="modal-body">
                                                هل انت متأكد من حذف المنتج؟
                                            </div>
                                            <div class="modal-footer">
                                                <!-- Unique Form -->
                                                <form id="deleteForm{{$loop->iteration}}" method="POST"
                                                      action="{{route('admin.products.destroy',['product'=>$product])}}"
                                                      style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">تأكيد</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12 po">
        {{$products->links()}}
    </div>


@endsection
<style>
    table td img {
        width: 100px;
        height: 70px;
        overflow: hidden;
    }
</style>
