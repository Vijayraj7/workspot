
<?php
$latget = '';
$lngget = '';
if(isset($_GET['lat']) && isset($_GET['lng'])){
$latget = $_GET['lat'];
$lngget = $_GET['lng'];

}else{
    echo "<script>
        if(confirm('Allow Location Access')){
        var x = document.getElementById('cc');
                       if (navigator.geolocation) {
                           document.write('reading Location....');
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerText = 'Geolocation is not supported by this browser.';
        window.location = '/';
        }
  }else{
        window.location = '/';
  }
             
    function showPosition(position) {
        window.location='https://workspots.000webhostapp.com/addyourwork/?lat='+position.coords.latitude+'&lng='+position.coords.longitude;
   }
        </script>";
}
?>
@extends('layouts.nav')

<div style="height: 120px;"></div>
@section('undernav')
<div style="margin-top: 60px;margin-left: 30px;margin-right: 50px;">
<h1 >ADD YOUR WORK</h1>

<p>add your work to workspot</p>

<h2 style="color:green;">Step 1</h2>

<p>Provide data about your work</p>

<h2 style="color:green;">Step 2</h2>

<p>temporarily this service is free</p>

<h2 style="color:green;">Step 3</h2>
<h4 >Verify work</h4>

<p >After registration , send your proof photo or video to whatsapp</p>
<h2 style="color:green;">Step 4</h2>
<h4 >After Successful Verification</h4>

<p style="color:green;">your work was verified</p>


 <form action="{{url('/storework')}}" style="margin-top: 40px;" method="post">
        @csrf
        <div class="form-group">
            <Label for="">Username</Label>
            <input type="text" placeholder="Username" maxlength="25" value="{{ old('cname') }}" name="cname"
                class="form-control">
            @error('cname')
                <p style="color: red; font-size:11px;">{{ $errors->first('cname') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <Label for="">PhoneNumber</Label>
            <input type="tel" placeholder="PhoneNumber" maxlength="10" value="{{ old('phonenumber') }}"
                name="phonenumber" class="form-control">
            @error('phonenumber')
                <p style="color: red; font-size:11px;">{{ $errors->first('phonenumber') }}</p>
            @enderror
        </div>


            <div class="form-group">
                <Label for="">Company name</Label>
                <input type="text" placeholder="From" maxlength="35" value="{{ old('vtype') }}" name="vtype"
                    class="form-control">
                @error('vtype')
                    <p style="color: red; font-size:11px;">{{ $errors->first('vtype') }}</p>
                @enderror
            </div>

            <div class="form-group">
                <Label for="">places1</Label>
                <input type="text" placeholder="To" maxlength="35" value="{{ old('places1') }}" name="places1"
                    class="form-control">
                @error('places1')
                    <p style="color: red; font-size:11px;">{{ $errors->first('places1') }}</p>
                @enderror
            </div>

            <div class="form-group">
                <Label for="">places2</Label>
                <input type="text" placeholder="To" maxlength="35" value="{{ old('places2') }}" name="places2"
                    class="form-control">
                @error('places2')
                    <p style="color: red; font-size:11px;">{{ $errors->first('places2') }}</p>
                @enderror
            </div>

            <div class="form-group">
                <Label for="">places3</Label>
                <input type="text" placeholder="To" maxlength="35" value="{{ old('places3') }}" name="places3"
                    class="form-control">
                @error('places3')
                    <p style="color: red; font-size:11px;">{{ $errors->first('places3') }}</p>
                @enderror
            </div>

            <div class="form-group">
                <Label for="">places4</Label>
                <input type="text" placeholder="To" maxlength="35" value="{{ old('places4') }}" name="places4"
                    class="form-control">
                @error('places4')
                    <p style="color: red; font-size:11px;">{{ $errors->first('places4') }}</p>
                @enderror
            </div>

            <div class="form-group">
                <Label for="">places5</Label>
                <input type="text" placeholder="To" maxlength="35" value="{{ old('places5') }}" name="places5"
                    class="form-control">
                @error('places5')
                    <p style="color: red; font-size:11px;">{{ $errors->first('places5') }}</p>
                @enderror
            </div>


            <div class="form-group">
                <Label for="">work type</Label>
                <input type="text" placeholder="To" maxlength="35" value="{{ old('type') }}" name="type"
                    class="form-control">
                @error('type')
                    <p style="color: red; font-size:11px;">{{ $errors->first('type') }}</p>
                @enderror
            </div>


            <div class="form-group">
                <Label for="">To</Label>
                <input type="hidden" placeholder="To" maxlength="35" value="{{ $latget }}" name="lat"
                    class="form-control">
                @error('lat')
                    <p style="color: red; font-size:11px;">{{ $errors->first('lat') }}</p>
                @enderror
            </div>


            <div class="form-group">
                <Label for="">To</Label>
                <input type="hidden" placeholder="To" maxlength="35" value="{{ $lngget }}" name="lng"
                    class="form-control">
                @error('lng')
                    <p style="color: red; font-size:11px;">{{ $errors->first('lng') }}</p>
                @enderror
            </div>

        <input type="submit" class="btn btn-primary">

    </form>
</div>
<script>
    var latt = document.getElementById("lat");
    var lngg = document.getElementById("lng");
    var x = document.getElementById("demo");
    var locbtn = document.getElementById("getterloc");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerText = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerText = "SUCCESS";
        x.style.color = "green";
        latt.value = position.coords.latitude;
        lngg.value = position.coords.longitude;
        locbtn.style.backgroundColor = 'green';
    }
</script>
@endsection
