<section class="contact section" id="contact">
        <div class="container flex-center">
            <h1 class="section-title-01">Conatct me</h1>
            <h2 class="section-title-02">Contact me</h2>
            <div class="content">
                <div class="contact-left">
                    <h2>Let's discuss your project</h2>
                    <ul class="contact-list">
                        @foreach ($contact as $item )
                            
                       
                        <li>
                            <h3 class="itemlist"><i class="fas fa-phone"></i> Phone</h3>
                            <span>{{$item->phone}}</span>
                        </li>
                        <li>
                            <h3 class="itemlist"><i class="fas fa-envelope"></i> Email</h3>
                            <span><a href="mailto:{{$item->email}}">{{$item->email}}</a></span>
                        </li>
                        <li>
                            <h3 class="itemlist"><i class="fas fa-map-marker-alt"></i> Official Address</h3>
                            <span>{{$item->location}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="contact-right">
                    <p>I'm always open to discuss product <br> <span>Design work or partnership</span></p>
                    <form action="" class="contact-form">
                        <div class="first-row">
                            <input type="text" id="name" placeholder="name">
                        </div>
                        <div class="second-row">
                            <input type="email" id="email" placeholder="Email">
                            <input type="text" id="subject" placeholder="Subject">
                        </div>
                        <div class="third-row">
                            <textarea name="message" id="message" rows="7" placeholder="Message"></textarea>
                        </div>
                        <button class="btn" type="button" onclick="sendMail()">Send Message <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div> 
        </div>
        <script>
            function sendMail() {
     var params = {
         name: document.getElementById("name").value,
         email: document.getElementById("email").value,
         contact: document.getElementById("subject").value,
         message: document.getElementById("message").value,
     };
 
     const serviceID = "service_aq8j8ab"; // Update with your service ID
     const templateID = "template_0nvboqc"; // Update with your template ID
 
     emailjs.send(serviceID, templateID, params)
         .then(function(response) {
             console.log('Email sent successfully:', response);
             // Show success message using SweetAlert
             swal("Success!", "Your message has been sent successfully.", "success");
         })
         .catch(function(error) {
             console.error('Error sending email:', error);
             // Show error message using SweetAlert
             swal("Error!", "Failed to send email: " + error.message, "error");
         });
 }
 
         </script>
         
             
            
     
             <script type="text/javascript"
             src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
     </script>
     <script type="text/javascript">
        (function(){
         emailjs.init("4WUdIfHtIQtYy9H3G");
        })();
     </script>
    </section>