@extends('layouts.master')
@section('css')

@section('title')
{{ __('sidebar.grade_list') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ __('sidebar.grade_list') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/" class="default-color">{{ __('sidebar.Home') }}</a></li>
                <li class="breadcrumb-item active">    {{ __('sidebar.grade_list') }}
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
          <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered p-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('grades_trans.name') }}</th>
                    <th>{{ __('grades_trans.notes') }}</th>
                    <th>{{ __('grades_trans.actions') }}</th>

                </tr>
            </thead>
            <tbody>
                @php
                    $nom=1;
                @endphp
                    @foreach ($grades as $grade)
                    <tr>

                    <td> {{ $nom++ }}<td>
                    <td>{{ $grade->name }}</td>

                    </tr>

                   @endforeach





            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>{{ __('grades_trans.name') }}</th>
                    <th>{{ __('grades_trans.notes') }}</th>
                    <th>{{ __('grades_trans.actions') }}</th>

                </tr>
            </tfoot>

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
