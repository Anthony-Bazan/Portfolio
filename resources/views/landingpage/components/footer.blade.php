<footer>
        <div class="footer-container">
            <div class="hr"></div>
            <div class="info group">
                <h3>More</h3>
                <ul>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#ontact">Contact</a></li>
                </ul>
            </div>
            <div class="hr"></div>
            <div class="follow group">
                <h3>Follow</h3>
            <ul>
                @foreach ($social as $item )
                    
                
                <li><a href="{{ route('social.site', ['site' => $item->site, 'link' => $item->link]) }}" target="{{ $item->site }}"><i class="{{$item->icon}}"></i></a></li>
                @endforeach
                {{-- <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li> --}}
            </ul>
            </div>
            
        </div>
        <div class="footer-copyright group"></div>
      </footer>
    <!--external script-->
    <script src="{{asset ('js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset ('js/main.js')}}"></script>
     <script>
      document.addEventListener("DOMContentLoaded", function() {
    // Wait for the DOM to be fully loaded

    // Delay the display of the element by 2000 milliseconds (2 seconds)
    setTimeout(function() {
        var delayedElement = document.getElementById("preloader");
        if (delayedElement) {
            delayedElement.classList.add('active');
        }
    }, 3000);
});

     </script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>