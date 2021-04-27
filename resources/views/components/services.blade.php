
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
      
              <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
      
              <div class="row">

                @foreach ($services as $service)
                  <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class={{$service->icone}}></i></div>
                    <h4 class="title"><a href="">{{$service->titre}}</a></h4>
                    <p class="description">{{$service->texte}}</p>
                  </div>
                @endforeach
            </div>
          </section><!-- End Services Section -->
