@extends('layouts.master')
@inject("Customers","App\Customer")
@inject("Vechicles","App\Vechicle")

@section('css')

@section('title')
Add offer
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Add offer
            </h4>
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

            <form method="post" action="{{ route('offers.store') }}">
              @csrf
              @method('POST')


            <div class="tabs">
                <div class="tab-button-outer">
                  <ul id="tab-button">
                    <li><a href="#tab01">Add customer</a></li>
                    <li><a href="#tab02">Add vechicle</a></li>

                  </ul>
                </div>
                <div class="tab-select-outer">
                  <select id="tab-select">
                    <option value="#tab01">Tab 1</option>
                    <option value="#tab02">Tab 2</option>

                  </select>
                </div>

                <div id="tab01" class="tab-contents">
                  <h2>Add customer</h2>
                  <p>
                    <div class="form-group col-md-6">

                        {!! Form::select('customer_id',$Customers->pluck("name","id"),null, ['class' => 'form-control  .select2 customer_id']) !!}

                    </div>

                  </p>


                </div>
                <div id="tab02" class="tab-contents">
                  <h2>Add vechicle</h2>
                  <p>


          <div class="row">


                    <div class="form-group col-md-6">

                        {!! Form::label('vechicle_id', 'vechicle name'.':') !!}
                        {!! Form::select('vechicle_id[]', $Vechicles->get()->pluck("name","id"),null, ['class' => 'form-control form-control-border ',"multiple"=>"multiple","id"=>"vechicle_id"]) !!}


                 </div>
                 <div class="form-group col-md-6">
                  <button type="submit" class="btn btn-success" data-continue="false">Save</button>

                 </div>
                </div>

                  </p>

                </div>

              </div>

            </form>
        </div>
        </div>
      </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
$(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});




$(".customer_id").select2({
            ajax: {
                url: "{{route("select2.customers")}}",
                method: "post",
                processResults: function (data) {

                    return {
                        results: data.items,
                        pagination: data.pagination
                    }
                }
            }
        })


        $(".vechicle_id").select2({
            ajax: {
                url: "{{route("select2.vechicles")}}",
                method: "post",
                processResults: function (data) {

                    return {
                        results: data.items,
                        pagination: data.pagination
                    }
                }
            }
        })

        $("#vechicle_id").select2();

</script>

@endsection
