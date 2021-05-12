@extends('layouts.app')
@section('content')

<section class="  masthead page-section  " id="contact">
            <div class="  container">
                <!-- Portfolio Section Heading-->
                <div class="   text-center">
                    <h2 class="  page-section-heading text-secondary mb-0 d-inline-block">Dodaj fakture</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
            </div>
        </section>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <form action="{{ route('invoices.store')}}" method="POST">
        {{csrf_field()}}
        <select name="contractor" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  @foreach (\App\Contractor::all() as $item)
  <option value="{{ $item->id }}">{{ $item->name }}</option>
@endforeach
</select>
    
  </div>
  <div class="form-group">
    <label>nip</label>
    <input  name="nip" class="form-control" id="nip">
  </div>
  <div class="form-group">
    <label>company name</label>
    <input   class="form-control" id="company" name="company">
  </div>
  <div class="form-group">
    <label>date</label>
    <input  class="form-control" id="date" name="date">
  </div>
  <div class="form-group">
    <label>name</label>
    <input  class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label>amount</label>
    <input  class="form-control" id="amount" name="amount">
  </div>
  <div class="form-group">
    <label >total</label>
    <input  class="form-control" id="total" name="total">
  </div>
  <button class="form-group">Zapisz</button>
</form>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        @endsection        
        
    