@extends('layouts.master')
@section('css')

@section('title')
vechicles
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> vechicles</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">   vechicles
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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ route('vechicles.create') }}" class="button x-small">
           Add vechicle
        </a>
        <br><br>
        <div class="table-responsive">
            <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                   data-page-length="50"
                   style="text-align: center">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @foreach ($vechicles as $vechicle)

                    <tr>
                        <?php $i++; ?>
                     <td>{{ $i }}</td>
                    <th>{{ $vechicle->name }}</th>
                    <th>{{ $vechicle->price }}</th>
                    <th>{{ $vechicle->desc }}</th>
                    <th>
<a href="{{ route('vechicles.edit',$vechicle->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
data-target="#delete{{ $vechicle->id }}"
title="#"><i
class="fa fa-trash"></i></button>
                    </th>
                    </tr>


                           <!-- delete_modal_Grade -->
                           <div class="modal fade" id="delete{{ $vechicle->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                           id="exampleModalLabel">
                                          Delete {{ $vechicle->name }}
                                       </h5>
                                       <button type="button" class="close" data-dismiss="modal"
                                               aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form action="{{ route('vechicles.destroy',$vechicle->id) }}" method="post">
                                           {{method_field('Delete')}}
                                           @csrf
                                           are you sure you want to delete
                                           <input id="id" type="hidden" name="id" class="form-control"
                                                  value="{{ $vechicle->id }}">
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-secondary"
                                                       data-dismiss="modal">close</button>
                                               <button type="submit"
                                                       class="btn btn-danger">Delete</button>
                                           </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   @endforeach
            </tbody>


         </table>
        </div>
        </div>
      </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
