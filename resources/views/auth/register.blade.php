@extends('layouts.front')

@section('content')
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Kaydol</h3>
                    <div class="theme-card">
                        <form class="theme-form">
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">İsim</label>
                                    <input type="text" class="form-control" id="fname" placeholder="İsminizi girin">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Soy İsim</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Soy isminizi girin">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email adresinizi girin">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Şifre</label>
                                    <input type="password" class="form-control" id="review"
                                           placeholder="Şifrenizi Girin" required="">
                                </div><a href="#" class="btn btn-solid w-auto">Kaydol</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
