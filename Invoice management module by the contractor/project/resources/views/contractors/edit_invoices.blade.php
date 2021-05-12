@extends('layouts.app')
@section('content')

<section class="  masthead page-section  " id="contact">
            <div class="  container">
                <!-- Portfolio Section Heading-->
                <div class="   text-center">
                    <h2 class="  page-section-heading text-secondary mb-0 d-inline-block">Edytujesz klienta {{ $contractor->id }}</h2>
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

        <form action="{{ route('contractors.update', ['klienci' => $contractor->id]) }}" method="POST">
        {{csrf_field()}}

        @method('PUT')
        <div class="form-group">
    <label>Imię klienta</label>
    <input value = "{{ $contractor->name }}" name="name" class="form-control" id="name"  required>
  </div>
  <div class="form-group">
    <label>Nazwisko klienta</label>
    <input value = "{{ $contractor->surname }}"  name="surname" class="form-control" id="surname"  required>
  </div>
  <div class="form-group">
    <label>Adres</label>
    <input  value = "{{ $contractor->address }}" class="form-control" id="address" name="address" required>
  </div>
  <div class="form-group">
    <label>Nip</label>
    <input value = "{{ $contractor->nip }}" class="form-control" id="nip" name="nip" required>
  </div>
  <button class="form-group" class="btn btn-primary">zapisz klienta</button>
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
        
    