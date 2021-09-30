@extends('navbar.tampilan')
@section('nav')
            <div class="container col-md-8 bg-light pb-3 mt-5">
                <div class="row pt-3">
                <div class="justify-content-center">
                <main class="form-signin col-md-8">
                        <form action="/register" method="post">
                        @csrf
                            <h5 class=" mb-3" style="font-weight: bold;">Register E-Learning</h5>
                                <div class="form-floating">
                                    <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
                                    <label for="username" style="color:#b4b9bd">Username</label>
                                    @error('username')
                                    <small class=text-danger>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Lengkap">
                                    <label for="name" name="name" style="color:#b4b9bd">Full Name</label>
                                    @error('name')
                                    <small class=text-danger>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="alamat" name="alamat" class="form-control" id="alamat" placeholder="alamat">
                                    <label for="alamat" style="color:#b4b9bd">alamat</label>
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email @error('email') is-invalid @enderror" name="email" placeholder="name@example.com">
                                    <label for="email" style="color:#b4b9bd">Email</label>
                                    @error('email')
                                    <small class=text-danger>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                    <label for="password" style="color:#b4b9bd">Password</label>
                                    @error('password')
                                    <small class=text-danger>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="row">
                                <div class="col-6 mb-4">
                                    <center><label for="gender_id" class="form-label">Gender</label></center>
                                    <select id="gender_id" class="form-select " name="gender_id">
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                <center><label for="kelas_id" class="form-label">Kelas</label></center>
                                    <select id="kelas_id" class="form-select " name="kelas_id">
                                    <option value="1">X-RPL</option>
                                    <option value="2">X-MM</option>
                                    <option value="3">XI-RPL</option>
                                    <option value="4">XI-MM1</option>
                                    <option value="5">XI-MM2</option>
                                    <option value="6">XII-RPL1</option>
                                    <option value="7">XII-RPL2</option>
                                    <option value="8">XII-MM1</option>
                                    <option value="9">XII-MM2</option>
                                    </select>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-8">
                                    <small><p class="">Sudah Punya Akun?</p><a href="/" class="text-decoration-none">Login</a></small>
                                </div>
                                <div class="col-4">
                                    <button class="w-80 btn btn-md btn-primary" style="margin-left: 0px" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </main> 
                    </div>
                </div>
            </div>
@endsection