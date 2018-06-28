@extends('voyager::master')
@section('page_header')
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<h1 class="page-title">
        <i class="voyager-list-add"></i>

    </h1>


<fieldset>
  @if(Session::has('Success'))
  <div class="alert alert-success" role="alert">
    <strong>Success: </strong> {{Session::get('Success')}}
  </div>
  @endif
  <!-- Form Name -->
  <div class="container">

    <div class="col-md-3">



      <h4>Top by country and category</h4>
      <label for="country">Country</label>
      <select class="form-control" id="country" name="country">
    <option value=""></option>
    <option value="gb">GB</option>
    <option value="us">US</option>
    </select>
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category">
          <option value=""></option>
          <option value="business">business</option>
          <option value="entertainment">entertainment</option>
          <option value="general">general</option>
          <option value="health">health</option>
          <option value="science">science</option>
          <option value="sports">sports</option>
          <option value="technology">technology</option>
        </select>
        <input type="hidden" name="type" value="1">
      <button class="btn btn-primary btn-lg btn-block" type="submit" id="hbc" name="hbc">Fetch</button>

    </div>




    <div class="col-md-3">
      <form method="get" action"api/getnews/">


      <h4>Top Headlines by agency</h4>
      <label for="selectmultiple">Source</label>
      <select id="selectmultiple" size="20" name="selectmultiple" class="form-control" multiple="multiple">
        @foreach($sources as $source)
          <option value="{{$source->sourceid}}">{{$source->name}}</option>
        @endforeach
      </select>
      <input type="hidden" name="type" value="2">
      <button class="btn btn-primary btn-lg btn-block" id="hba" name="hba">Fetch</button>
        </form>
    </div>


    <div class="col-md-3">


    </div>

  </div>
  {{--
  <script>
    console.log('hello');

    var country = $('#country');

    var output = $('#output');

    var selectmultiple = $('#selectmultiple');
  </script> --}}

  <script>

  $('#hbc').click(function() {
      var catplug = $("#category").val();
      var countryplug = $("#country").val();
    $.ajax({
      url: 'https://kikoe.co.uk/api/getnews/',
      data:{
        country: countryplug,
        category: catplug,
        type: 1
      },
      type: 'GET',
      success: function(data){
        console.log('done');
      }

    });

  });

  $('#hba').click(function() {
    window.location.href='api/getnews';
  });


    $('#submit').click(function() {

      console.log('click');

      //only do something if numbers are selected
      if ($('#selectmultiple :selected').length > 0) {
        //build an array of selected values
        var selectednumbers = [];
        $('#selectmultiple :selected').each(function(i, selected) {
          selectednumbers[i] = $(selected).val();
          console.log($(selected).val() + ' ' + $('#scope :selected').val());
          $.ajax({
            url: '/api/getnews',
            data: {
              'scope': $('#scope option:selected').val(),
              'country': $("#country option:selected").val(),
              'source': $(selected).val(),
              'topic': $('#topic').val(),

            },
            type: 'GET',
            success: function(data) {
              console.log('done');
            }
          });
        });
        //post data to handler script. note the JSON.stringify call

      }
    });
  </script>

  @stop $scope.$country.$topic.$source.$category
