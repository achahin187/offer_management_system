@extends('layouts.master')
@section('css')

@section('title')
edit vechicle
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> edit vechicle
            </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">   vechicle
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


            <form method="post" action="{{ route('vechicles.update',$vechicle->id) }}" class="form-horizontal">
                @csrf
                @method('PUT')
                 <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" value="{{ $vechicle->name }}"class="form-control   @error('name') is-invalid @enderror" placeholder="your name"   name="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <p style="color:red">{{ $message }}</p>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input type="text" value="{{ $vechicle->price }}" class="form-control  @error('price') is-invalid @enderror" placeholder="your price" name="price" >
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <p style="color:red">{{ $message }}</p>
                    </span>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label">Description</label>
                  <input type="text" value="{{ $vechicle->desc }}" class="form-control @error('description') is-invalid @enderror" placeholder=" your description" name="desc">
                  @error('description')
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
