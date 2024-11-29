<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body style="background-color: #232323">
@include('frontend.partials.preloader')


<div class="data-form  mb-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <img src="{{asset('assets/images/logo2.png')}}" alt="">
                    <h2 style="color: white">Login</h2>
                </div>
            </div>
            <div class="col-md-6 m-auto">
                <div class="form">
                    <form  action="{{route('admin.login')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="user name">
                                    <x-input-error :messages="$errors->get('email')" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <fieldset>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="password">
                                    <x-input-error :messages="$errors->get('password')"/>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 text-center">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Login</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('frontend.partials.scripts')


</body>

</html>
