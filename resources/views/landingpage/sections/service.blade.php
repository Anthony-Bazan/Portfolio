<section class="services section" id="services">
        <div class="container flex-center">
            <h1 class="section-title-01">Services</h1>
            <h2 class="section-title-02">Services</h2>
            <div class="content">
                <div class="services-description">
                    <h3>What I provide</h3>
                </div>
                <ul class="service-list">
                    <li class="service-container">
                        @foreach ($service as $item )
        
                        <div class="service-card">
                            <i class="fas fa-pencil-ruler"></i>
                            <h3>{{$item->title}}</h3>
                            <div class="learn-more-btn">Learn More <i class="fas fa-long-arrow-alt-right">
                            </i></div>
                        </div>
                        
                        <div class="service-modal flex-center">
                            <div class="service-modal-body">
                                <i class="fas fa-times modal-close-btn"></i>
                                <h3>{{$item->title}}</h3>
                                <h4>What is {{$item->title}}?</h4>
                                <p>{{$item->description}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
     </section>
