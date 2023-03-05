<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      {{-- <div class="section-title">
        <h2>Pricing</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3>Free Plan</h3>
            <h4><sup>$</sup>0<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <h3>Business Plan</h3>
            <h4><sup>$</sup>29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <h3>Developer Plan</h3>
            <h4><sup>$</sup>49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>

      </div> --}}

      <form action="/verify" method="post" role="form" class="php-email-form" enctype="multipart/formdata">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                @error('email')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
            @error('subject')
            <p class="text-danger text-xs mt-2">{{ $message }}</p>
        @enderror
        </div>
        <div class="form-group">
            <label for="name">Mobile Number</label>
            <input type="tel" class="form-control" name="phone" id="subject" required>
            @error('phone')
            <p class="text-danger text-xs mt-2">{{ $message }}</p>
        @enderror
        </div>
        <div class="form-group">
            <label for="name">File</label>
            <input type="file" class="form-control" name="file" id="subject" required>
            @error('file')
            <p class="text-danger text-xs mt-2">{{ $message }}</p>
        @enderror
        </div>
       
        <div class="text-center"><button type="submit">Send Message</button></div>
    </form>

    </div>
  </section>