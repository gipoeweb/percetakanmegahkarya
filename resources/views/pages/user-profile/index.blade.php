@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <main>
        <div class="container mb-5">
            <div class="row">
                <div class="col text-center">
                    <div class="mt-4 mb-2 position-relative">
                        <img src="{{ Auth::user()->avatar }}" class="rounded-circle" alt="" style="width: 150px">
                        <a href="#" class="btn bg-light bg-opacity-50 align-bottom position-absolute bottom-0 start-50">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                    </div>
                    <h4>{{ Auth::user()->name }}</h4>
                </div>
            </div>
            <form action="#">
                <div class="row mt-4">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="nameFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nameFormControlInput1"
                                placeholder="Masukkan Nama" value="{{ Auth::user()->name }}" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="emailFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailFormControlInput1"
                                placeholder="Masukkan Email" value="{{ Auth::user()->email }}" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="companyFormControlInput1" class="form-label">Company</label>
                            <input type="text" class="form-control" id="companyFormControlInput1"
                                placeholder="Masukkan Nama Usaha" value="{{ Auth::user()->company_name }}" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="alamatFormControlInput1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamatFormControlInput1"
                                placeholder="Masukkan Alamat" value="{{ Auth::user()->address }}" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="nohpFormControlInput1" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="nohpFormControlInput1"
                                placeholder="Masukkan No HP" value="{{ Auth::user()->no_hp }}" maxlength="12" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Lengkapi Profile Anda untuk Dapatkan Info Promo Menarik dari Kami</label>
                            <a href="{{ route('user-profile.edit', Auth::user()->id) }}" class="btn btn-success px-4">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection