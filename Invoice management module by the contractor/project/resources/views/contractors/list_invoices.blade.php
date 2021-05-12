@extends('layouts.app')
@section('content')


        <section class=" masthead  text-white text-center" id="portfolio">
            <div class="container">

@if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Lista aktualnych faktur</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                

                <table class="table table-hover">
   <thead>
    <tr>
      <th scope="col">Lp</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Adres</th>
      <th scope="col">Nip</th>
      <th scope="col">Akcja-Edytuj</th>
      <th scope="col">Akcja-Usuń</th>

    </tr>
  </thead>
  <tbody .table-hover>
        @foreach ($contractors as $contractor)
  <tr>
      <th scope="row">{{ $contractor->id }}</th>
      <td><a href="{{ route('contractors.show' , ['klienci' => $contractor->id]) }}">{{ $contractor->name }}</a></td>
      <td>{{ $contractor->address }}</td>
      <td>{{ $contractor->nip }}</td>
      <td><a href="{{ route('contractors.edit' , ['klienci' => $contractor->id]) }}" class="btn btn-primary">Edytuj </a></td>
      <td><form method="POST" action="{{ route('contractors.destroy' , ['klienci' => $contractor->id]) }}">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger"> Usun</button>
        </form></td>
    </tr>

  @endforeach
    
    
  </tbody>
</table>
            </div>
        </section>
        
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="Submarine"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        
        