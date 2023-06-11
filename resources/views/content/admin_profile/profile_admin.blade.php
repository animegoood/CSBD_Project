@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Admin Profile')

@section('content')


    <div class="container">
        <div class="card">

            <h1 class="text-center " style="color: #07a3bf; ">Admin Profile Page</h1>


            <div class="card-body">

                @if (session()->has('status'))
                    <div class="alert alert-success">{{ session()->get('status') }}</div>
                @endif

                <div class="d-flex " style="     flex-diraction: row; justify-content: center; gap: 70px;flex-wrap: wrap;">



                    <div>

                        <a href="{{ route('admin_profile_create') }}" class="btn btn-primary  "> Create Admin Profile</a>

                    </div>
                    <div>

                        <a href="{{ route('admin_profile_edit') }}" class="btn btn-primary  "> Edit Admin Profile</a>

                    </div>
                    <div>

                        <form action="{{ route('admin_profile_destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete Admin Profile</button>

                        </form>

                    </div>
                </div>
            </div>

            <h3 class="text-center " style="color: #07a3bf; ">Two Factor Authentication</h3>

            <div class="card-body">





                <form action="{{ url('user/two-factor-authentication') }}" method="POST">
                    @csrf


                    <div class="d-flex " style=" flex-diraction: row; justify-content: center; gap: 70px;flex-wrap: wrap;">

                        <div>

                            <label class="form-label">Enable/Disable</label>
                            <br>
                            @if (auth()->user()->two_factor_secret)
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Disable</button>
                            @else
                                <button type="submit" class="btn btn-primary">Enable</button>
                            @endif
                        </div>

                        <div>
                            <h3>QR Recovery Code</h3>

                            {!! auth()->user()->twoFactorQrCodeSvg() !!}

                        </div>
                        <div>
                            <h3>Recovery Code</h3>

                            <ul>
                                @foreach (auth()->user()->recoveryCodes() as $recovery_code)
                                <li>{{ $recovery_code }}</li>

                                @endforeach


                            </ul>

                        </div>
                    </div>

            </form>





    </div>
    </div>

@endsection
