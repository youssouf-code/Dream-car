@extends('main')

@section('title', 'Contact')
@section('contact')

<div class="container">
  <div class="raw">
    <div class="col-md-12">
      <h1>Contact Us</h1>
      <hr>
      <form action="">
        <div class="form-group">
          <label for="" name="email">Email:</label>
          <input id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="" name="subject">Subject:</label>
          <input id="subject" name="subject" class="form-control">
        </div>
        <div class="form-group">
          <label for="" name="message">Message:</label>
          <textarea id="message" name="message" class="form-control"> Type a message !</textarea> 
        </div>
        <input type="submit" value="Send a message" class="btn btn-info">   
      </form>
    </div>
  </div>
</div>

@endsection