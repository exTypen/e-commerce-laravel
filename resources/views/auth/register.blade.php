@extends('layouts.front')

@section('content')
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Kaydol</h3>
                    <div class="theme-card">
                        <form class="theme-form" action="{{route('auth.store')}}" method="POST">
                            @csrf
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">İsim</label>
                                    <input type="text" class="form-control" name="first_name" id="fname" placeholder="İsminizi girin">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Soy İsim</label>
                                    <input type="text" class="form-control" name="last_name" id="lname" placeholder="Soy isminizi girin">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email adresinizi girin">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Şifre</label>
                                    <input type="password" class="form-control" name="password" id="review"
                                           placeholder="Şifrenizi Girin" required="">
                                </div><button type="submit" class="btn btn-solid w-auto">Kaydol</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
