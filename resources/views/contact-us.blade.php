  @include('components.header')
  
  <main>
      <section class="page-hero">
        <div class="container">
          <div class="page-hero__inner">
            <h1 class="page-hero__title">Contact Us</h1>
          </div>
        </div>
      </section>
      <section class="contact">
        <div class="container">
          <div class="contact__wrapper">
            <div class="contact__info">
              <div class="contact__header">
                <h2 class="contact__title">
                  You Will Grow, You Will Succeed. We Promise That
                </h2>
                <p class="contact__desc">
                  Pellentesque arcu facilisis nunc mi proin. Dignissim mattis in
                  lectus tincidunt tincidunt ultrices. Diam convallis morbi
                  pellentesque adipiscing
                </p>
              </div>
              <div class="contact__content">
                <ul class="contact__list">
                  <li class="contact__item">
                    <img
                      class="contact__img"
                      src="images/phone-contact.svg"
                      alt=""
                    />
                    <h3 class="contact__heading">Call for inquiry</h3>
                    <a class="contact__value" href="tel:+2573886895"
                      >+257 388-6895</a
                    >
                  </li>
                  <li class="contact__item">
                    <img
                      class="contact__img"
                      src="images/email-contact.svg"
                      alt=""
                    />
                    <h3 class="contact__heading">Send us email</h3>
                    <a
                      class="contact__value"
                      href="mailto:kramulous@sbcglobal.net"
                      >kramulous@sbcglobal.net</a
                    >
                  </li>
                  <li class="contact__item">
                    <img
                      class="contact__img"
                      src="images/clock-contact.svg"
                      alt=""
                    />
                    <h3 class="contact__heading">Opening hours</h3>
                    <p class="contact__value">Mon - Fri: 10AM - 10PM</p>
                  </li>
                  <li class="contact__item">
                    <img
                      class="contact__img"
                      src="images/location-contact.svg"
                      alt=""
                    />
                    <h3 class="contact__heading">Office</h3>
                    <address class="contact__value">
                      19 North Road Piscataway, NY 08854
                    </address>
                  </li>
                </ul>
              </div>
            </div>
            <form class="contact-form">
              <header class="contact-form__header">
                <h2 class="contact-form__title">Contact Info</h2>

                <p class="contact-form__desc">
                  Nibh dis faucibus proin lacus tristique
                </p>
              </header>
              <div class="contact-form__body">
                <div class="contact-form__row">
                  <div class="contact-form__field">
                    <label class="contact-form__label" for="first-name">
                      First Name
                    </label>

                    <input
                      id="first-name"
                      class="contact-form__input"
                      type="text"
                      placeholder="Your name"
                    />
                  </div>
                  <div class="contact-form__field">
                    <label class="contact-form__label" for="last-name">
                      Last Name
                    </label>

                    <input
                      id="last-name"
                      class="contact-form__input"
                      type="text"
                      placeholder="Your last name"
                    />
                  </div>
                </div>
                <div class="contact-form__field">
                  <label class="contact-form__label" for="email">
                    Email Address
                  </label>

                  <input
                    id="email"
                    type="email"
                    class="contact-form__input"
                    placeholder="Your E-mail address"
                  />
                </div>
                <div class="contact-form__message">
                  <div class="contact-form__field">
                    <label class="contact-form__label" for="message">
                      Message
                    </label>
                    <textarea
                      id="message"
                      class="contact-form__textarea"
                      placeholder="Your message..."
                    ></textarea>
                  </div>

                  <button type="submit" class="button">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <section class="map">
        <div class="container">
          <div class="map__wrapper">
            <iframe
              class="map__frame"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3031.0190213198725!2d-74.4636982!3d40.563257199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3b88d66679145%3A0xa96299c470d7b826!2zMzAxIE4gUmFuZG9scGh2aWxsZSBSZCBBcHQgMTksIFBpc2NhdGF3YXksIE5KIDA4ODU0IOOCouODoeODquOCq-WQiOihhuWbvQ!5e0!3m2!1sen!2sus!4v1787105327005!5m2!1sen!2sus"
              title="Job Portal office location"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </section>
      <section class="contact-company">
        <div class="container">
          <ul class="contact-company__logos">
            <li class="contact-company__logo">
              <img src="images/zoom-contact.svg" alt="Zoom" />
            </li>
            <li class="contact-company__logo">
              <img src="images/tinder-contact.svg" alt="Tinder" />
            </li>
            <li class="contact-company__logo">
              <img src="images/dribbble-contact.svg" alt="Dribbble" />
            </li>
            <li class="contact-company__logo">
              <img src="images/asana-contact.svg" alt="Asana" />
            </li>
          </ul>
        </div>
      </section>
    </main>

    @include('components.footer')