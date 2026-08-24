@include('components.header')

<main>
      <section class="page-hero">
        <div class="container">
          <div class="page-hero__inner">
            <h1 class="page-hero__title">About Us</h1>
          </div>
        </div>
      </section>
      <section class="about-intro">
        <div class="container">
          <div class="about-intro__header">
            <h2 class="about-intro__title">
              Et nunc ut tempus duis nisl sed massa
            </h2>
            <p class="about-intro__desc">
              Nunc sed a nisl purus. Nibh dis faucibus proin lacus tristique.
              Sit congue non vitae odio sit erat in. Felis eu ultrices a sed
              massa. Commodo fringilla sed tempor risus laoreet ultricies ipsum.
              Habitasse morbi faucibus in iaculis lectus. Nisi enim feugiat enim
              volutpat. Sem quis viverra viverra odio mauris nunc.
            </p>
          </div>
          <img class="about-intro__img" src="images/about-intro.webp" alt="" />
        </div>
      </section>
      <section class="how-it-works">
        <div class="container">
          <div class="how-it-works__wrapper">
            <div class="how-it-works__header">
              <h2 class="how-it-works__title">How it works</h2>
              <p class="how-it-works__desc">
                At eu lobortis pretium tincidunt amet lacus ut aenean aliquet.
                Blandit a massa elementum id scelerisque rhoncus
              </p>
            </div>
            <div class="how-it-works__body">
              <ul class="how-it-works__list">
                <li class="how-it-works__item">
                  <img
                    class="how-it-works__logo"
                    src="images/account.svg"
                    alt=""
                  />
                  <div class="how-it-works__content">
                    <h3 class="how-it-works__label">Create Account</h3>
                    <p class="how-it-works__value">
                      Nunc sed a nisl purus. Nibh dis faucibus proin lacus
                    </p>
                  </div>
                </li>
                <li class="how-it-works__item">
                  <img
                    class="how-it-works__logo"
                    src="images/resume.svg"
                    alt=""
                  />
                  <div class="how-it-works__content">
                    <h3 class="how-it-works__label">Upload Resume</h3>
                    <p class="how-it-works__value">
                      Felis eu ultrices a sed massa. Commodo fringilla sed
                      tempor
                    </p>
                  </div>
                </li>
                <li class="how-it-works__item">
                  <img class="how-it-works__logo" src="images/bag.svg" alt="" />
                  <div class="how-it-works__content">
                    <h3 class="how-it-works__label">Find Jobs</h3>
                    <p class="how-it-works__value">
                      Commodo fringilla sed tempor risus laoreet ultricies ipsum
                    </p>
                  </div>
                </li>
                <li class="how-it-works__item">
                  <img
                    class="how-it-works__logo"
                    src="images/apply.svg"
                    alt=""
                  />
                  <div class="how-it-works__content">
                    <h3 class="how-it-works__label">Apply Job</h3>
                    <p class="how-it-works__value">
                      Nisi enim feugiat enim volutpat. Sem quis viverra
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="about-video">
        <div class="container">
          <div class="about-video__wrapper">
            <!-- 背景画像 + オーバーレイ部分 -->
            <div class="about-video__visual">
              <img
                class="about-video__bg"
                src="images/about-video-bg.webp"
                alt=""
              />
              <div class="about-video__overlay">
                <img class="about-video__icon" src="images/play.svg" alt="" />
                <h2 class="about-video__title">
                  Good Life Begins With A Good Company
                </h2>
              </div>
            </div>

            <!-- 下部の黒い帯 -->
            <div class="about-video__body">
              <ul class="about-video__list">
                <li class="about-video__item">
                  <img class="about-video__count" src="images/1.svg" alt="" />
                  <div class="about-video__content">
                    <h3 class="about-video__subtitle">
                      Elit gravida lorem amet porta risus vitae at
                    </h3>
                    <a href="#" class="about-video__more">Learn more</a>
                  </div>
                </li>
                <li class="about-video__item">
                  <img class="about-video__count" src="images/2.svg" alt="" />
                  <div class="about-video__content">
                    <h3 class="about-video__subtitle">
                      Volutpat dui lacus mattis urna platea
                    </h3>
                    <span class="about-video__more">Learn more</span>
                  </div>
                </li>
                <li class="about-video__item">
                  <img class="about-video__count" src="images/3.svg" alt="" />
                  <div class="about-video__content">
                    <h3 class="about-video__subtitle">
                      Elementum faucibus netus gravida lacus lorem
                    </h3>
                    <span class="about-video__more">Learn more</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="faq">
        <div class="container">
          <div class="faq__wrapper">
            <div class="faq__header">
              <!-- 見出しと説明文 -->
              <h2 class="faq__title">Frequently Asked Questions</h2>
              <p class="faq__desc">
                At eu lobortis pretium tincidunt amet lacus ut aenean aliquet
              </p>
            </div>
            <div class="faq__body">
              <!-- 質問リスト -->
              <ul class="faq__list">
                <li class="faq__item is-active">
                  <img class="faq__count" src="images/01.svg" alt="" />
                  <div class="faq__content">
                    <h3 class="faq__question">Can I upload a CV?</h3>
                    <p class="faq__answer">
                      Nunc sed a nisl purus. Nibh dis faucibus proin lacus
                      tristique. Sit congue non vitae odio sit erat in. Felis eu
                      ultrices a sed massa. Commodo fringilla sed tempor risus
                      laoreet ultricies ipsum. Habitasse morbi faucibus in
                      iaculis lectus. Nisi enim feugiat enim volutpat. Sem quis
                      viverra viverra odio mauris nunc
                    </p>
                  </div>
                  <img class="faq__toggle" src="images/close.svg" alt="" />
                </li>
                <li class="faq__item">
                  <img class="faq__count" src="images/02.svg" alt="" />
                  <div class="faq__content">
                    <h3 class="faq__question">
                      How long will the recruitment process take?
                    </h3>
                  </div>
                  <img class="faq__toggle" src="images/open.svg" alt="" />
                </li>
                <li class="faq__item">
                  <img class="faq__count" src="images/03.svg" alt="" />
                  <div class="faq__content">
                    <h3 class="faq__question">
                      Do you recruit for Graduates, Apprentices and Students?
                    </h3>
                  </div>
                  <img class="faq__toggle" src="images/open.svg" alt="" />
                </li>
                <li class="faq__item">
                  <img class="faq__count" src="images/04.svg" alt="" />
                  <div class="faq__content">
                    <h3 class="faq__question">
                      What does the recruitment and selection process involve?
                    </h3>
                  </div>
                  <img class="faq__toggle" src="images/open.svg" alt="" />
                </li>
                <li class="faq__item">
                  <img class="faq__count" src="images/05.svg" alt="" />
                  <div class="faq__content">
                    <h3 class="faq__question">
                      Can I receive notifications for any future jobs that may
                      interest me?
                    </h3>
                  </div>
                  <img class="faq__toggle" src="images/open.svg" alt="" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="about-best">
        <div class="container">
          <div class="about-best__wrapper">
            <div class="about-best__images">
              <div class="about-best__left">
                <div class="about-best__left-image">
                  <img src="images/about-best-01.webp" alt="" />
                </div>
              </div>

              <div class="about-best__right">
                <div class="about-best__right-image">
                  <img src="images/about-best-02.webp" alt="" />
                </div>

                <div class="about-best__right-image">
                  <img src="images/about-best-03.webp" alt="" />
                </div>
              </div>
            </div>

            <div class="about-best__content">
              <div class="about-best__header">
                <h2 class="about-best__title">
                  We’re Only Working With The Best
                </h2>
                <p class="about-best__desc">
                  Ultricies purus dolor viverra mi laoreet at cursus justo.
                  Ultrices purus diam egestas amet faucibus tempor blandit.
                </p>
              </div>
              <ul class="about-best__list">
                <li class="about-best__item">
                  <img
                    class="about-best__icon"
                    src="images/quality-job.svg"
                    alt=""
                  />

                  <div class="about-best__text">
                    <h3 class="about-best__label">Quality Job</h3>
                  </div>
                </li>
                <li class="about-best__item">
                  <img
                    class="about-best__icon"
                    src="images/resume-builder.svg"
                    alt=""
                  />

                  <div class="about-best__text">
                    <h3 class="about-best__label">Resume builder</h3>
                  </div>
                </li>
                <li class="about-best__item">
                  <img
                    class="about-best__icon"
                    src="images/top-companies.svg"
                    alt=""
                  />

                  <div class="about-best__text">
                    <h3 class="about-best__label">Top Companies</h3>
                  </div>
                </li>
                <li class="about-best__item">
                  <img
                    class="about-best__icon"
                    src="images/top-talents.svg"
                    alt=""
                  />

                  <div class="about-best__text">
                    <h3 class="about-best__label">Top Talents</h3>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="blog">
        <div class="container">
          <div class="blog__wrapper">
            <div class="about-blog__header">
              <h2 class="blog__title">News and Blog</h2>
              <p class="blog__intro">
                Metus faucibus sed turpis lectus feugiat tincidunt. Rhoncus sed
                tristique in dolor
              </p>
            </div>
            <ul class="blog__list">
              <li class="blog__item">
                <a class="blog__link" href="#">
                  <div class="blog__heading">
                    <img
                      class="blog__image"
                      src="images/blog-image1.webp"
                      alt=""
                    />
                    <span class="blog__genre">News</span>
                  </div>
                  <div class="blog__content">
                    <time class="blog__date" datetime="2024-03-30">
                      30 March 2024
                    </time>
                    <h3 class="blog__headline">
                      Revitalizing Workplace Morale: Innovative Tactics for
                      Boosting Employee Engagement in 2024
                    </h3>
                    <div class="blog__more">
                      <span class="blog__read-more">Read more</span>
                      <img class="blog__arrow" src="images/arrow.svg" alt="" />
                    </div>
                  </div>
                </a>
              </li>
              <li class="blog__item">
                <a class="blog__link" href="#">
                  <div class="blog__heading">
                    <img
                      class="blog__image"
                      src="images/blog-image2.webp"
                      alt=""
                    />
                    <span class="blog__genre">Blog</span>
                  </div>
                  <div class="blog__content">
                    <time class="blog__date" datetime="2024-03-30">
                      30 March 2024
                    </time>
                    <h3 class="blog__headline">
                      How to avoid the top six most common job interview
                      mistakes
                    </h3>
                    <div class="blog__more">
                      <span class="blog__read-more">Read more</span>
                      <img class="blog__arrow" src="images/arrow.svg" alt="" />
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

    @include('components.footer')