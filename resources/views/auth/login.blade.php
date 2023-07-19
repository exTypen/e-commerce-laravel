@extends('layouts.front')

@section('content')
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Giriş Yap</h3>
                    <div class="theme-card">
                        <form class="theme-form" action="{{route('auth.authenticate')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email adresinizi girin">
                            </div>
                            <div class="form-group">
                                <label for="review">Şifre</label>
                                <input type="password" class="form-control" id="review"
                                       placeholder="Şifrenizi girin" name="password">
                            </div><button type="submit" class="btn btn-solid">Giriş Yap</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>Yeni Müşteri</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Yeni Bir Hesap Oluştur</h6>
                        <p>Hesabın yok mu? Alışverişe başlamak için hızlıca kaydol.</p><a href="{{route('auth.register')}}" class="btn btn-solid">Kaydol</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
