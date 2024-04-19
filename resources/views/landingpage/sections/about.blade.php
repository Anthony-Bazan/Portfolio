<section class="about section" id="about">
       <div class="container flex-center">
        <h1 class="section-title-01">About me</h1>
        <h2 class="section-title-02">About me</h2>
        <div class="content flex-center">
        <div class="about-img">
            <img src="{{ asset('image/profile.jpg')}}" alt="">
        </div>
        <div class="about-info">
            <div class="description">
                @foreach ( $about as $item )
                <h3>I'm {{$item->name}}</h3>
                <h4>A Lead <span>{{$item->role}}</span> based in <span>{{$item->location}}</span></h4>
                <p>{{$item->description}}
                </p>
                @endforeach
            </div>
            <ul class="professional-list">
                @foreach ( $awardlist as $id )
                <li class="list-item">
                    <h3>{{$id->description}}</h3>
                    <span>{{$id->title}}</span>
                </li>
                @endforeach
            </ul>
            <a href="{{asset('cv/bazan.pdf')}}" download="" class="btn">Download CV <i class="fas fa-download"></i></a>
        </div>
        </div>
       </div>
    </section>