@extends('admin.dashboard')

@section('content')
    <h2>أرقام التواصل</h2>
    <a class="button-link" href="{{route('admin.contacts.create')}}">اضافة</a>
    <div class="row">
        <div class=" col-md-12 mb-3">
            <table>
                <thead>
                <tr>
                    <th>رقم</th>
                    <th>اسم المنطقة</th>
                    <th>رقم التواصل</th>
                    <th>أوامر</th>
                </tr>
                </thead>
                <tbody>
                @if(count($contacts)>0)
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$contact->getTranslations('region')['ar']}}</td>
                            <td>{{$contact->number}}</td>
                            <td>
                                <a class="button-link action-button"
                                   href="{{route('admin.contacts.edit',['contact'=>$contact])}}">تعديل</a>
                                <button class="button-link action-button" type="button"
                                        data-bs-toggle="modal" data-bs-target="#confirmModal{{$loop->iteration}}">
                                    حذف
                                </button>
                                <!-- Unique Modal -->
                                <div class="modal fade" id="confirmModal{{$loop->iteration}}" tabindex="-1"
                                     aria-labelledby="confirmModalLabel{{$loop->iteration}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmModalLabel{{$loop->iteration}}">تأكيد الحذف</h5>
                                            </div>
                                            <div class="modal-body">
                                                هل انت متأكد من حذف رقم التواصل؟
                                            </div>
                                            <div class="modal-footer">
                                                <!-- Unique Form -->
                                                <form id="deleteForm{{$loop->iteration}}" method="POST"
                                                      action="{{route('admin.contacts.destroy',['contact'=>$contact])}}"
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
        <div class="col-md-12 ">
            <div class="d-block m-auto ">
                {{$contacts->links()}}
            </div>
        </div>
    </div>

@endsection


<style>
    .button-link {
        display: inline-block;
        text-decoration: none;
        background-color: #FF6000;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        margin-top: 10px;
        transition: background-color 0.3s;
        border-radius: 4px;
    }

    @media (max-width: 768px) {
        a.button-link, .button-link {
            padding: 3px 7px;
        }
    }
</style>
