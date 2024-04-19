<section class="portfolio section" id="portfolio">
        <div class="container flex-center">
            <h1 class="section-title-01">Works</h1>
            <h2 class="section-title-02">Works</h2>
           
            <div class="content">
                <div class="portfolio-list">   
                @foreach ($work as $item )            
                    <div class="img-card-container">
                       
                     <div class="img-card">       
                       <div class="overlay"></div>
                       <div class="info">
                        <h3>{{$item->name}}</h3>
                        <a href="{{route('site.index', ['site'=>$item->site])}}" target="_blank">{{$item->site}}</a>
                       </div>
                       <img src="{{ asset ('upload/'.$item->image)}}" style="max-width:500px; object-fit:cover" alt="">
                     </div>
                     <div class="portfolio-modal flex-center">
                        <div class="portfolio-modal-body">
                            <i class="fas fa-times portfolio-close-btn"></i>
                            <h3>{{$item->name}}</h3>
                            <img src="{{asset ('upload/'.$item->image)}}" style="width:500px;height:500px; object-fit:cover" alt="">
                            <p>{{$item->description}}</p>
                        </div>
                     </div>
                    
                    </div>
                    @endforeach
                </div>                           
                
            </div>
           
        </div>
    
    <!--get-in-touct-->
    <div class="get-in-touch sub-section">
        <div class="container">
            <div class="content flex-center">
                <div class="contact-card flex-center">
                    <div class="title">
                        <h4>Let's Talk</h4>
                        <h3>About Your</h3>
                        <h2>Next Project</h2>
                    </div>
                    <div class="contact-btn">
                        <a href="#contact" class="btn">Get In Touch <i class="fas fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--our client-->
    <div class="our-client sub-section">
        <div class="container flex-center">
            <h1 class="section-title-01">Our Client</h1>
            <h2 class="section-title-02">Our Client</h2>
            <div class="content">
                <div class="swiper client-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($client as $i )

                      <div class="swiper-slide flex-center">
                        <div class="client-img">
                            <img src="{{asset('upload/'.$i->image)}}" style="object-fit: contain" alt="">
                        </div>
                        <div class="client-details">
                            <p>{{$i->description}}</p>
                            <h3>{{$i->name}}</h3>
                            <span>{{$i->role}}</span>
                        </div>
                      </div>
                                                  
                      @endforeach

                      
                    </div>
                    <div class="swiper-button-next">
                        
                    </div>
                    <div class="swiper-button-prev">
                        
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </div>
    </div>
</section>