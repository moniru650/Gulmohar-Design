<?php include('header.php'); ?>


   <div class="inner_banner" style="background-image: url(dist/images/Contact-Us.jpg);">
      <div class="container">
        <div class="inner_banner_caption">
           <h1>Contact Us</h1>
        </div>
      </div>
   </div>
   <div class="inner_banner_img">
      <img src="dist/images/Contact-Us.jpg">
      <div class="over_inner_caption">
        <h1>Contact Us</h1>
      </div>
    </div>
   
   <div class="section_padding">
    <div class="container">
      <div class="section_title">
        <h2>Request a quote   </h2>
        <p>Please fill the form and we’ll contact you shortly.</p>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="contact_us_box"> 
            <form class="contact_form" method="POST" action="contact.php" enctype= multipart/form-data>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="first_name"> Name</label>
                  <input type="text"  name="name" required="">
                </div>
                
                <div class="form-group col-md-6">
                  <label for="first_name">Mobile No</label>
                  <input type="text"  name="phone" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="first_name">Email</label>
                  <input type="email"  name="email" required="">
                </div>
                <div class="form-group col-md-12">
                  <label for="first_name">Message</label>
                  <textarea rows="5" required="" name="message"></textarea>
                </div>
                
              </div>
              <div class="form-btn">
                  <input type="submit" name="submit" value="Submit Now" name="">
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact_tiles_area">
            <div class="contact_tiles">
               <div class="contact_cercle">
                 <img src="dist/images/phone.png">
               </div>
               <div class="contact_items">
                 <span>Phone</span>
                 <span>+91 9874196677</span>
               </div>
            </div>

            <div class="contact_tiles">
               <div class="contact_cercle">
                 <img src="dist/images/mail.png">
               </div>
               <div class="contact_items">
                 <span>Email</span>
                 <span>info@gulmoharboutique.com</span>
               </div>
            </div>

            <div class="contact_tiles">
               <div class="contact_cercle">
                 <img src="dist/images/wp.png">
               </div>
               <div class="contact_items">
                 <span>What’s App</span>
                 <span>+91 9874196677</span>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
<?php include('footer.php'); ?>