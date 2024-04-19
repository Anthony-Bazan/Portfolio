<aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Admin BLOG</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elements
                    </li>
                    <li class="sidebar-item">
                        <a href="{{route('admin.index')}}" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Home Page
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{route('about.index')}}" class="sidebar-link">About me Section</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('contact.index')}}" class="sidebar-link">Contact me Section</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
                            Posts
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{route('work.index')}}" class="sidebar-link">My works</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('education.index')}}" class="sidebar-link">Education</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('experience.index')}}" class="sidebar-link">Experience</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('skill.index')}}" class="sidebar-link">Skill</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('awards.index')}}" class="sidebar-link">Awards</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('services.index')}}" class="sidebar-link">Services</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('client.index')}}" class="sidebar-link">Client</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
        </aside>