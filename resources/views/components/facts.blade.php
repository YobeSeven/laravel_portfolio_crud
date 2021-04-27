
        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">
      
              <div class="section-title">
                <h2>Facts</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
      
              <div class="row no-gutters">
                @foreach ($facts as $fact)
                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                      <i class="icofont-simple-smile"></i>
                      <span data-toggle="counter-up">{{$fact->clients}}</span>
                      <p><strong>Happy Clients</strong> consequuntur quae</p>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="count-box">
                      <i class="icofont-document-folder"></i>
                      <span data-toggle="counter-up">{{$fact->projets}}</span>
                      <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                      <i class="icofont-live-support"></i>
                      <span data-toggle="counter-up">{{$fact->support}}</span>
                      <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                    </div>
                  </div>
        
                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="count-box">
                      <i class="icofont-users-alt-5"></i>
                      <span data-toggle="counter-up">{{$fact->workers}}</span>
                      <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                    </div>
                  </div>

                @endforeach
      
              </div>
      
            </div>
          </section><!-- End Facts Section -->
