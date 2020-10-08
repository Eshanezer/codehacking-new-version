@extends('layouts.app')
@section('body-content')
    <div class="site-section bg-lightx">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <div class="subscribe-1 ">
                        <h2>Login Now</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="email">Password *</label>
                                <input type="password" class="form-control" id="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
