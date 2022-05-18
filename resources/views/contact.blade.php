@extends('layouts.master')
@section('title', 'Contact')

@section('content')

      <!-- contact section start -->
      <section class="contact py-3" id="contact">
        <div class="container-lg py-4">
        <div class="clear"><br><br><br></div>
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="section-title text-center">
                <h2 class=" mb-5">Contact Me</h2>
              </div>
              @if(Session('mss'))
               <div class="alert alert-success">{{Session('mss')}}</div>
              @endif
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-5">
              <div class="contact-item d-flex mb-3">
                <div class="icon fs-4 text-danger">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="text ms-3">
                  <h3 class="fs-5">Email</h3>
                  <p class="text-muted">techbyap.mm@gmail.com</p>
                </div>
              </div>
  
              <div class="contact-item d-flex mb-3">
                <div class="icon fs-4 text-danger">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="text ms-3">
                  <h3 class="fs-5">Phone</h3>
                  <p class="text-muted">09770179977</p>
                </div>
              </div>
  
              <div class="contact-item d-flex mb-3">
                <div class="text ms-3">
                  <h3 class="fs-5">Visit Our Social Media</h3>
                  <p class="text-muted">www.facebook.com/techbyap <br> 
                    www.youtube.com/c/techbyap</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="contact-form">
                <form method="post">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                      <input
                        type="text"
                        placeholder="Your Name" name="name"
                        class="form-control form-control-lg fs-6  shadow-lg 
                        @if($errors->has('name'))
                          is-invalid
                        @endif
                        " value="{{old('name')}}"
                      />
                      <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>
  
                    <div class="col-lg-6 mb-4">
                      <input
                        type="email" 
                        placeholder="Email" name="email"
                        class="form-control form-control-lg fs-6  shadow-lg
                        @if($errors->has('email'))
                          is-invalid
                        @endif
                        "
                        value="{{old('email')}}"
                      />
                      <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-lg-12 mb-4">
                      <input
                        type="text"
                        placeholder="Subject" name="subject"
                        class="form-control form-control-lg fs-6 shadow-lg
                        @if($errors->has('subject'))
                          is-invalid
                        @endif
                        "
                        value="{{old('subject')}}"
                      />
                      <span class="text-danger">{{$errors->first('subject')}}</span>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-lg-12 mb-4">
                      <textarea
                        type="text"
                        placeholder="Your Message" rows="5" name="message"
                        class="form-control form-control-lg fs-6 shadow-lg
                        @if($errors->has('message'))
                          is-invalid
                        @endif
                        "
                      >{{old('message')}}</textarea>
                      <span class="text-danger">{{$errors->first('message')}}</span>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-lg-12">
                      <button type="submit" class="btn btn-danger px-3">
                        Send Message
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- contact section end -->
@endsection