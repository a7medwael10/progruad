<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>
@include('frontend.partials.preloader')


<div class="data-form  mb-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <div class="form-heading"><h2>pro<em>guard</em></h2></div>
                    <h2>Register</h2>
                </div>
            </div>
            <div class="col-md-6 m-auto">
                <div class="form" >
                    <form  action="{{route('admin.register')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <fieldset>
                                    <input name="name" type="text" class="form-control " id="name" placeholder="Full Name">
                                    <x-input-error :messages="$errors->get('name')" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <fieldset>
                                    <input name="email" type="text" class="form-control " id="email" placeholder="E-Mail Address">
                                    <x-input-error :messages="$errors->get('email')" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <fieldset>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="password">
                                    <x-input-error :messages="$errors->get('password')" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                <fieldset>
                                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="confirm password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="text-center">
                                    <button type="submit" id="form-submit" class="filled-button">Register</button>
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
