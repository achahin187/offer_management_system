@extends('layouts.master')
@section('css')

@section('title')
edit customer
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> edit customer
            </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">   customers
                </li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-xl-12 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">


            <form method="post" action="{{ route('customers.update',$customer->id) }}" class="form-horizontal">
                @csrf
                @method('PUT')
                 <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" value="{{ $customer->name }}"class="form-control   @error('name') is-invalid @enderror" placeholder="your name"   name="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <p style="color:red">{{ $message }}</p>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">surname</label>
                    <input type="text" value="{{ $customer->surname }}" class="form-control  @error('surname') is-invalid @enderror" placeholder="your surname" name="surname" >
                    @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <p style="color:red">{{ $message }}</p>
                    </span>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" value="{{ $customer->email }}" class="form-control @error('email') is-invalid @enderror" placeholder=" your email" name="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <p style="color:red">{{ $message }}</p>
                  </span>
                  @enderror
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
          </form>


        </div>
        </div>
      </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
