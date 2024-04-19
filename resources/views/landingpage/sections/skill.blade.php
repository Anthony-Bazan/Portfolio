<section class="skills section" id="skills">
        <div class="container flex-center">
            <h1 class="section-title-01">Skills</h1>
            <h2 class="section-title-02">Skills</h2>
            <div class="content">
                <div class="skills-description">
                    <h3>Education and Skills</h3>
                    @foreach ( $edudescription as $item )
                    <p>{{$item->description}}</p>
                    @endforeach
                </div>
                <div class="skills-info education-all">
                    <div class="education">
                        <h4><label>Education</label></h4>
                        @foreach ( $education as $id )
                            <ul class="edu-list">
                                <li class="item">
                                    <span class="year">{{$id->start}}-{{$id->end}}</span>
                                    <p><span>{{$id->edulevel}}</span> - {{$id->school}}</p>
                                </li>
                                
                            </ul>
                            @endforeach
                    </div>
                    <div class="education">
                        <h4><label>Skills</label></h4>
                        @foreach ( $skill as $i )
                        <ul class="bars">
                            <li class="bar">
                                <div class="info">
                                    <span>{{$i->title}}</span>
                                    <span>{{$i->description}}</span>
                                </div>
                                <div class="line {{$i->title}}"></div>
                                <style>
                                    .bar .{{ $i->title }}:before{
                                         width: {{ $i->description }}%;
                                    }
                            </style>
                            </li>
                           @endforeach
                        </ul>
                    </div>
                    <div class="education">
                        <h4><label>Awards</label></h4>
                        @foreach ( $skillaward as $list )
                        <ul class="edu-list">
                            <li class="item">
                                <span class="year">{{$list->year}}</span>
                                <p><span>{{$list->company}}</p>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="skills-description">
                     <h3>Work & Experience</h3>
                </div>
                <div class="skills-info">
                    <div class="experience-card">
                        @foreach ( $experience as $l )
                        <div class="upper">
                            <h3>{{$l->role}}</h3>
                            <h5>{{$l->company}}</h5>
                            <span>{{$l->year}}</span>
                        </div>
                        <div class="hr"></div>
                        <h4><label>{{$l->service}}</label></h4>
                        <p>{{$l->description}}
                        </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>