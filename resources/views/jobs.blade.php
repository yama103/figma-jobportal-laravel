 @include('components.header')
 
 <main>
      <section class="page-hero">
        <div class="container">
          <div class="page-hero__inner">
            <h1 class="page-hero__title">Jobs</h1>
          </div>
        </div>
      </section>

      <section class="page-jobs">
        <div class="container">
          <div class="jobs__wrapper">
            <aside class="jobs__sidebar">
              <button type="button" class="button job-filter__button">
                Filters
                <img src="images/job-filter.svg" alt="" />
              </button>
              <div class="job-filter">
                <!-- 検索 -->

                <div class="job-filter__group">
                  <h3 class="job-filter__title">Search by Job Title</h3>
                  <div class="job-filter__search">
                    <img src="images/search-gray.svg" alt="" />
                    <input
                      type="text"
                      placeholder="Job title or company"
                      class="job-filter__input"
                    />
                  </div>
                </div>

                <!-- Location -->
                <div class="job-filter__group">
                  <h3 class="job-filter__title">Location</h3>
                  <div class="job-filter__select-wrapper">
                    <img
                      src="images/location-gray.svg"
                      alt=""
                      class="job-filter__icon"
                    />
                    <select class="job-filter__select">
                      <option value="">Choose city</option>
                    </select>
                  </div>
                </div>

                <!-- Category -->
                <div class="job-filter__group">
                  <h3 class="job-filter__title">Category</h3>
                  <ul class="job-filter__list">
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="category"
                          value="commerce"
                        />
                        <span class="job-filter__text">Commerce</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="category"
                          value="telecommunications"
                        />
                        <span class="job-filter__text">Telecommunications</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="category"
                          value="hotels-tourism"
                        />
                        <span class="job-filter__text">Hotels & Tourism</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="category"
                          value="education"
                        />
                        <span class="job-filter__text">Education</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="category"
                          value="financial-services"
                        />
                        <span class="job-filter__text">Financial Services</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                  </ul>
                  <button type="button" class="job-filter__more">
                    Show More
                  </button>
                </div>
                <!-- Job Type -->
                <div class="job-filter__group">
                  <h3 class="job-filter__title">Job Type</h3>
                  <ul class="job-filter__list">
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="job-type"
                          value="full-time"
                        />
                        <span class="job-filter__text">Full Time</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="job-type"
                          value="part-time"
                        />
                        <span class="job-filter__text">Part Time</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="job-type"
                          value="freelance"
                        />
                        <span class="job-filter__text">Freelance</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="job-type"
                          value="seasonal"
                        />
                        <span class="job-filter__text">Seasonal</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="job-type"
                          value="fixed-price"
                        />
                        <span class="job-filter__text">Fixed-Price</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <!-- Experience Level -->
                <div class="job-filter__group">
                  <h3 class="job-filter__title">Experience Level</h3>
                  <ul class="job-filter__list">
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="experience"
                          value="no-experience"
                        />
                        <span class="job-filter__text">No-experience</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="experience"
                          value="fresher"
                        />
                        <span class="job-filter__text">Fresher</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="experience"
                          value="intermediate"
                        />
                        <span class="job-filter__text">Intermediate</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="experience"
                          value="expert"
                        />
                        <span class="job-filter__text">Expert</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <!-- Date Posted -->
                <div class="job-filter__group">
                  <h3 class="job-filter__title">Date Posted</h3>
                  <ul class="job-filter__list">
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input type="checkbox" name="date-posted" value="all" />
                        <span class="job-filter__text">All</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="date-posted"
                          value="last-hour"
                        />
                        <span class="job-filter__text">Last Hour</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="date-posted"
                          value="last-24-hour"
                        />
                        <span class="job-filter__text">Last 24 Hour</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="date-posted"
                          value="last-7-days"
                        />
                        <span class="job-filter__text">Last 7 Days</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                    <li class="job-filter__item">
                      <label class="job-filter__label">
                        <input
                          type="checkbox"
                          name="date-posted"
                          value="last-30-days"
                        />
                        <span class="job-filter__text">Last 30 Days</span>
                        <span class="job-filter__count">10</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <!-- Salary -->
                <div class="job-filter__group">
                  <h3 class="job-filter__title">Salary</h3>
                  <div class="job-filter__range-wrapper">
                    <input
                      type="range"
                      min="0"
                      max="9999"
                      value="9999"
                      class="job-filter__range"
                    />
                  </div>
                  <div class="job-filter__salary-info">
                    <span class="job-filter__salary-text"
                      >Salary: $0 - $9999</span
                    >
                    <button type="button" class="job-filter__apply">
                      Apply
                    </button>
                  </div>
                </div>
                <!-- Tags -->
                <div class="job-filter__group">
                  <h3 class="job-filter__title">Tags</h3>
                  <ul class="job-filter__tags">
                    <li class="badge">
                      <a href="#">engineering</a>
                    </li>
                    <li class="badge">
                      <a href="#">design</a>
                    </li>
                    <li class="badge">
                      <a href="#">ui/ux</a>
                    </li>
                    <li class="badge">
                      <a href="#">marketing</a>
                    </li>
                    <li class="badge">
                      <a href="#">management</a>
                    </li>
                    <li class="badge">
                      <a href="#">soft</a>
                    </li>
                    <li class="badge">
                      <a href="#">construction</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="jobs__banner">
                <img
                  src="images/hiring-banner.webp"
                  alt=""
                  class="jobs__banner-img"
                />
                <div class="jobs__banner-content">
                  <p class="jobs__banner-title">WE ARE HIRING</p>
                  <p class="jobs__banner-text">Apply Today!</p>
                </div>
              </div>
            </aside>

            <div class="jobs__content">
              <div class="jobs__toolbar">
                <p class="jobs__result">Showing 1-6 of 10 results</p>
                <div class="jobs__sort-wrapper">
                  <select class="jobs__sort">
                    <option value="latest">Sort by latest</option>
                    <option value="oldest">Sort by oldest</option>
                    <option value="salary-high">Salary: High to Low</option>
                    <option value="salary-low">Salary: Low to High</option>
                  </select>
                  <img
                    class="jobs__sort-icon"
                    src="images/chevron-down.svg"
                    alt=""
                    aria-hidden="true"
                  />
                </div>
              </div>

              <ul class="page-jobs__list">
                <li class="jobs__item">
                  <article class="job-card">
                    <div class="job-card__top">
                      <div class="badge">
                        <span>10 min ago</span>
                      </div>
                      <button
                        class="job-card__favorite"
                        type="button"
                        aria-label="Add to favorites"
                      >
                        <img src="images/plus.svg" alt="" />
                      </button>
                    </div>

                    <div class="job-card__main">
                      <img src="images/jobs-1.svg" alt="" />
                      <div class="job-card__contents">
                        <p class="job-card__title">Forward Security Director</p>
                        <p class="job-card__subtitle">
                          Bauch, Schuppe and Schulist Co
                        </p>
                      </div>
                    </div>

                    <div class="job-card__bottom">
                      <ul class="job-card__meta">
                        <li class="job-card__meta-item">
                          <img src="images/bag.svg" alt="" />
                          <span>Hotels & Tourism</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/clock-job-card.svg" alt="" />
                          <span>Full time</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/wallet.svg" alt="" />
                          <span>$40000-$42000</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/location.svg" alt="" />
                          <span>New-York, USA</span>
                        </li>
                      </ul>

                      <div class="job-card__details">
                        <a class="button" href="job-details.html"
                          >Job Details</a
                        >
                      </div>
                    </div>
                  </article>
                </li>
                <li class="jobs__item">
                  <article class="job-card">
                    <div class="job-card__top">
                      <div class="badge">
                        <span>12 min ago</span>
                      </div>
                      <button
                        class="job-card__favorite"
                        type="button"
                        aria-label="Add to favorites"
                      >
                        <img src="images/plus.svg" alt="" />
                      </button>
                    </div>

                    <div class="job-card__main">
                      <img src="images/jobs-2.svg" alt="" />
                      <div class="job-card__contents">
                        <p class="job-card__title">
                          Regional Creative Facilitator
                        </p>
                        <p class="job-card__subtitle">Wisozk - Becker Co</p>
                      </div>
                    </div>

                    <div class="job-card__bottom">
                      <ul class="job-card__meta">
                        <li class="job-card__meta-item">
                          <img src="images/bag.svg" alt="" />
                          <span>Media</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/clock-job-card.svg" alt="" />
                          <span>Part time</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/wallet.svg" alt="" />
                          <span>$28000-$32000</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/location.svg" alt="" />
                          <span>Los- Angeles, USA</span>
                        </li>
                      </ul>

                      <div class="job-card__details">
                        <a class="button" href="job-details.html"
                          >Job Details</a
                        >
                      </div>
                    </div>
                  </article>
                </li>
                <li class="jobs__item">
                  <article class="job-card">
                    <div class="job-card__top">
                      <div class="badge">
                        <span>15 min ago</span>
                      </div>
                      <button
                        class="job-card__favorite"
                        type="button"
                        aria-label="Add to favorites"
                      >
                        <img src="images/plus.svg" alt="" />
                      </button>
                    </div>

                    <div class="job-card__main">
                      <img src="images/jobs-3.svg" alt="" />
                      <div class="job-card__contents">
                        <p class="job-card__title">
                          Internal Integration Planner
                        </p>
                        <p class="job-card__subtitle">
                          Mraz, Quigley and Feest Inc.
                        </p>
                      </div>
                    </div>

                    <div class="job-card__bottom">
                      <ul class="job-card__meta">
                        <li class="job-card__meta-item">
                          <img src="images/bag.svg" alt="" />
                          <span>Construction</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/clock-job-card.svg" alt="" />
                          <span>Full time</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/wallet.svg" alt="" />
                          <span>$48000-$50000</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/location.svg" alt="" />
                          <span>Texas, USA</span>
                        </li>
                      </ul>

                      <div class="job-card__details">
                        <a class="button" href="job-details.html"
                          >Job Details</a
                        >
                      </div>
                    </div>
                  </article>
                </li>
                <li class="jobs__item">
                  <article class="job-card">
                    <div class="job-card__top">
                      <div class="badge">
                        <span>24 min ago</span>
                      </div>
                      <button
                        class="job-card__favorite"
                        type="button"
                        aria-label="Add to favorites"
                      >
                        <img src="images/plus.svg" alt="" />
                      </button>
                    </div>

                    <div class="job-card__main">
                      <img src="images/jobs-4.svg" alt="" />
                      <div class="job-card__contents">
                        <p class="job-card__title">
                          District Intranet Director
                        </p>
                        <p class="job-card__subtitle">VonRueden - Weber Co</p>
                      </div>
                    </div>

                    <div class="job-card__bottom">
                      <ul class="job-card__meta">
                        <li class="job-card__meta-item">
                          <img src="images/bag.svg" alt="" />
                          <span>Commerce</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/clock-job-card.svg" alt="" />
                          <span>Full time</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/wallet.svg" alt="" />
                          <span>$42000-$48000</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/location.svg" alt="" />
                          <span>Florida, USA</span>
                        </li>
                      </ul>

                      <div class="job-card__details">
                        <a class="button" href="job-details.html"
                          >Job Details</a
                        >
                      </div>
                    </div>
                  </article>
                </li>
                <li class="jobs__item">
                  <article class="job-card">
                    <div class="job-card__top">
                      <div class="badge">
                        <span>26 min ago</span>
                      </div>
                      <button
                        class="job-card__favorite"
                        type="button"
                        aria-label="Add to favorites"
                      >
                        <img src="images/plus.svg" alt="" />
                      </button>
                    </div>

                    <div class="job-card__main">
                      <img src="images/jobs-5.svg" alt="" />
                      <div class="job-card__contents">
                        <p class="job-card__title">
                          Corporate Tactics Facilitator
                        </p>
                        <p class="job-card__subtitle">
                          Cormier, Turner and Flatley Inc
                        </p>
                      </div>
                    </div>

                    <div class="job-card__bottom">
                      <ul class="job-card__meta">
                        <li class="job-card__meta-item">
                          <img src="images/bag.svg" alt="" />
                          <span>Commerce</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/clock-job-card.svg" alt="" />
                          <span>Full time</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/wallet.svg" alt="" />
                          <span>$38000-$40000</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/location.svg" alt="" />
                          <span>Boston, USA</span>
                        </li>
                      </ul>

                      <div class="job-card__details">
                        <a class="button" href="job-details.html"
                          >Job Details</a
                        >
                      </div>
                    </div>
                  </article>
                </li>
                <li class="jobs__item">
                  <article class="job-card">
                    <div class="job-card__top">
                      <div class="badge">
                        <span>30 min ago</span>
                      </div>
                      <button
                        class="job-card__favorite"
                        type="button"
                        aria-label="Add to favorites"
                      >
                        <img src="images/plus.svg" alt="" />
                      </button>
                    </div>

                    <div class="job-card__main">
                      <img src="images/jobs-6.svg" alt="" />
                      <div class="job-card__contents">
                        <p class="job-card__title">
                          Forward Accounts Consultant
                        </p>
                        <p class="job-card__subtitle">Miller Group</p>
                      </div>
                    </div>

                    <div class="job-card__bottom">
                      <ul class="job-card__meta">
                        <li class="job-card__meta-item">
                          <img src="images/bag.svg" alt="" />
                          <span>Financial services</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/clock-job-card.svg" alt="" />
                          <span>Full time</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/wallet.svg" alt="" />
                          <span>$45000-$48000</span>
                        </li>
                        <li class="job-card__meta-item">
                          <img src="images/location.svg" alt="" />
                          <span>Boston, USA</span>
                        </li>
                      </ul>

                      <div class="job-card__details">
                        <a class="button" href="job-details.html"
                          >Job Details</a
                        >
                      </div>
                    </div>
                  </article>
                </li>
              </ul>
              <nav class="jobs__pagination" aria-label="Jobs pagination">
                <ul class="jobs__pagination-list">
                  <li class="jobs__pagination-pages">
                    <a href="#" class="jobs__pagination-link is-active">1</a>
                    <a href="#" class="jobs__pagination-link">2</a>
                  </li>

                  <li class="jobs__pagination-next-item">
                    <a
                      href="#"
                      class="jobs__pagination-link jobs__pagination-next"
                    >
                      Next
                      <img
                        src="images/chevron-right.svg"
                        alt=""
                        aria-hidden="true"
                      />
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="top-company">
        <div class="container">
          <div class="top-company__wrapper">
            <div class="top-company__heading">
              <h2 class="top-company__title">Top Company</h2>
              <p class="top-company__desc">
                At eu lobortis pretium tincidunt amet lacus ut aenean aliquet.
                Blandit a massa elementum
              </p>
            </div>

            <ul class="top-company__list">
              <li class="top-company__item">
                <a href="#" class="top-company__card">
                  <img
                    src="images/instagram.svg"
                    alt="Instagram"
                    class="top-company__logo"
                  />
                  <h3 class="top-company__name">Instagram</h3>
                  <p class="top-company__text">
                    Elit velit mauris aliquam est diam. Leo sagittis consectetur
                    diam morbi erat
                  </p>
                  <span class="top-company__jobs">8 open jobs</span>
                </a>
              </li>
              <li class="top-company__item">
                <a href="#" class="top-company__card">
                  <img
                    src="images/tesla.svg"
                    alt="Tesla"
                    class="top-company__logo"
                  />
                  <h3 class="top-company__name">Tesla</h3>
                  <p class="top-company__text">
                    At pellentesque amet odio cras imperdiet nisl. Ac magna
                    aliquet massa leo
                  </p>
                  <span class="top-company__jobs">18 open jobs</span>
                </a>
              </li>
              <li class="top-company__item">
                <a href="#" class="top-company__card">
                  <img
                    src="images/mcdonalds.svg"
                    alt="McDonald's"
                    class="top-company__logo"
                  />
                  <h3 class="top-company__name">McDonald's</h3>
                  <p class="top-company__text">
                    Odio aliquet tellus tellus maecenas. Faucibus in viverra
                    venenatis phasellus
                  </p>
                  <span class="top-company__jobs">12 open jobs</span>
                </a>
              </li>
              <li class="top-company__item">
                <a href="#" class="top-company__card">
                  <img
                    src="images/apple.svg"
                    alt="Apple"
                    class="top-company__logo"
                  />
                  <h3 class="top-company__name">Apple</h3>
                  <p class="top-company__text">
                    Et odio sem tellus ultrices posuere consequat. Tristique
                    nascetur sapien
                  </p>
                  <span class="top-company__jobs">9 open jobs</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

    @include('components.footer')