

@extends('layouts.front')

@section('title','contact')
@section('css')
<a href="{{asset('assets/css/style.css')}}"></a>
@endsection
@section('content')
<section id="contact">
      <div class="container">
        <h3 id="h3contact">contact</h3>
        <div id="contactopak">
          <div id="formgroup">
            <div id="leftform">
              <input type="text" name="isim" placeholder="name surname" required class="form-control" value="">
              <input type="text" name="tel" placeholder="telephone number" required class="form-control" value="">
            </div>
            <div id="rightform">
              <input type="email" name="email" placeholder="your email" required class="form-control" value="">
              <input type="text" name="konu" placeholder="konu başliği" required class="form-control" value="">
            </div>
            <textarea name="message" rows="10" cols="30" placeholder="Enter your sms" required class="form-control"></textarea>
          <button type="submit" name="submit">send</button>
            </div>
            <div id="address">
            <div id="addresstitle">
              <h4>address :</h4>
              <p class="addressp">bahadin gazi</p>
              <p class="addressp">karsiyaka cad</p>
              <p class="addressp">28</p>
              <p class="addressp">5453523780</p>
              <p class="addressp">email : jj@gmail.com</p>
            </div>
            </div>
          </div>
        </div>
    </section>
@endsection
@section('js')
@endsection


