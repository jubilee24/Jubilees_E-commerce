<?php include('partials-front/contact-front.php'); ?>

    <section class="about-header">
      <h2>Contact Us</h2>
      <p>Leave a message, We love to hear from you</p>
    </section>

    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>Get In Touch</span>
        <h2>Visit one of our agency locations or contact us today</h2>
        <h3>Head Office</h3>

        <div>
          <li>
            <i class="fal fa-map"></i>
            <p>56 Glassford Street Glasgow G1 1UL New York</p>
          </li>
          <li>
            <i class="fal fa-envelope"></i>
            <p>contact@example.com</p>
          </li>
          <li>
            <i class="fal fa-phone-alt"></i>
            <p>contact@example.com</p>
          </li>
          <li>
            <i class="fal fa-clock"></i>
            <p>Monday to Saturday: 9.00am to 16.00pm</p>
          </li>
        </div>
      </div>

      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d232.53231373784624!2d81.8126185!3d21.1716108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral%20Park!5e0!3m2!1sen!2sin!4v1693061703058!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <section id="form-details">
      <form action="">
        <span>Leave a message</span>
        <h2>We Love to hear form you</h2>
        <input type="text" placeholder="Your Name" />
        <input type="text" placeholder="E-mail" />
        <input type="text" placeholder="Subject" />
        <textarea
          name=""
          id=""
          cols="30"
          rows="10"
          placeholder="Your message"
        ></textarea>
        <button class="normal">Submit</button>
      </form>

      <div class="people">
        <div>
          <img src="img/people/1.png" alt="" />
          <p>
            <span>Joe Miller</span> Senior Marketing Manager <br />
            Phone: +000 123 000 77 88 <br />Email: joe@example.com
          </p>
        </div>
        <div>
          <img src="img/people/2.png" alt="" />
          <p>
            <span>Daniel Smith</span> Senior Marketing Manager <br />
            Phone: +000 123 000 77 88 <br />Email: dan@example.com
          </p>
        </div>
        <div>
          <img src="img/people/3.png" alt="" />
          <p>
            <span>Rose Parker</span> Senior Marketing Manager <br />
            Phone: +000 123 000 77 88 <br />Email: rose@example.com
          </p>
        </div>
      </div>
    </section>

    <section id="newsletter" class="section-p1">
      <div class="newstext">
        <h4>Sign Up for Newsletters</h4>
        <p>
          Get E-mail updates about our latest shop and
          <span>special offers.</span>
        </p>
      </div>

      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>

<?php include('partials-front/footer.php'); ?>
