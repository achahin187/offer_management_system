@extends('layouts.master')
@section('css')

@section('title')
offers
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> offers</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">   offers
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

        <a href="{{ route('offers.create') }}" class="button x-small">
           Add offer
        </a>
        <br><br>
        <div class="table-responsive">
            <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                   data-page-length="50"
                   style="text-align: center">
                <thead>
                <tr>
                    <th>#</th>
                    <th>customer name</th>
                    <th>vechicles</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 0; ?>
                @foreach ($offers as $offer)
                    <tr>
                        <?php $i++; ?>
                     <td>{{ $i }}</td>
                    <th>{{ $offer->customer->name }}</th>
                    <th>{{ $offer->vechicle->name }}</th>
                    <th>
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
data-target="#delete{{ $offer->id }}"
title="#"><i
class="fa fa-trash"></i></button>
                    </th>
                    </tr>


                           <!-- delete_modal_Grade -->
                           <div class="modal fade" id="delete{{ $offer->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                           id="exampleModalLabel">
                                          Delete
                                       </h5>
                                       <button type="button" class="close" data-dismiss="modal"
                                               aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form action="{{ route('offers.destroy',$offer->id) }}" method="post">
                                           {{method_field('Delete')}}
                                           @csrf
                                           are you sure you want to delete
                                           <input id="id" type="hidden" name="id" class="form-control"
                                                  value="{{ $offer->id }}">
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
