   @extends('layouts.app')

   @section('content')
       <main>
           <section class="page-hero">
               <div class="container">
                   <div class="page-hero__inner">
                       <h1 class="page-hero__title">Job Details</h1>
                   </div>
               </div>
           </section>

           <div class="job-details">
               <div class="container">
                   <div class="job-details__wrapper">
                       <div class="job-details__header">
                           <div class="jobs__item">
                               <article class="job-card">
                                   <div class="job-card__top">
                                       <div class="badge">
                                           <span>10 min ago</span>
                                       </div>
                                       <button class="job-card__favorite" type="button" aria-label="Add to favorites">
                                           <img src="images/plus.svg" alt="" />
                                       </button>
                                   </div>

                                   <div class="job-card__main">
                                       <img src="images/jobs-4.svg" alt="" />

                                       <div class="job-card__contents">
                                           <p class="job-card__title">
                                               {{ $job['title'] }}
                                           </p>

                                           <p class="job-card__subtitle">
                                               {{ $job['company'] }}
                                           </p>
                                       </div>
                                   </div>

                                   <div class="job-card__bottom">
                                       <ul class="job-card__meta">
                                           <li class="job-card__meta-item">
                                               <img src="images/bag.svg" alt="" />
                                               <span>{{ $job['category'] }}</span>
                                           </li>

                                           <li class="job-card__meta-item">
                                               <img src="images/clock-job-card.svg" alt="" />
                                               <span>{{ $job['type'] }}</span>
                                           </li>

                                           <li class="job-card__meta-item">
                                               <img src="images/wallet.svg" alt="" />
                                               <span>{{ $job['salary'] }}</span>
                                           </li>

                                           <li class="job-card__meta-item">
                                               <img src="images/location.svg" alt="" />
                                               <span>{{ $job['location'] }}</span>
                                           </li>
                                       </ul>

                                       <div class="job-card__details">
                                           <a class="button" href="job-details.html">Apply Job</a>
                                       </div>
                                   </div>
                               </article>
                           </div>
                       </div>
                       <div class="job-details__content">
                           <div class="job-details__body">
                               <section class="job-details__group">
                                   <h2 class="job-details__title">Job Description</h2>
                                   <p>
                                       Nunc sed a nisl purus. Nibh dis faucibus proin lacus
                                       tristique. Sit congue non vitae odio sit erat in. Felis eu
                                       ultrices a sed massa. Commodo fringilla sed tempor risus
                                       laoreet ultricies ipsum. Habitasse morbi faucibus in iaculis
                                       lectus. Nisi enim feugiat enim volutpat. Sem quis viverra
                                       viverra odio mauris nunc. Et nunc ut tempus duis nisl sed
                                       massa. Ornare varius faucibus nisi vitae vitae cras ornare.
                                       Cras facilisis dignissim augue lorem amet adipiscing cursus
                                       fames mauris. Tortor amet porta proin in. Orci imperdiet
                                       nisi dignissim pellentesque morbi vitae. Quisque tincidunt
                                       metus lectus porta eget blandit euismod sem nunc. Tortor
                                       gravida amet amet sapien mauris massa.Tortor varius nam
                                       maecenas duis blandit elit sit sit. Ante mauris morbi diam
                                       habitant donec.
                                   </p>
                               </section>
                               <section class="job-details__group">
                                   <h2 class="job-details__title">Key Responsibilities</h2>
                                   <ul class="job-details__list">
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Et nunc ut tempus duis nisl sed massa. Ornare varius
                                               faucibus nisi vitae vitae cras ornare. Cras facilisis
                                               dignissim augu
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Cras facilisis dignissim augue lorem amet adipiscing
                                               cursus fames mauris. Tortor amet porta proin in
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Ornare varius faucibus nisi vitae vitae cras ornare.
                                               Cras facilisis dignissim augue lorem amet adipiscing
                                               cursus fames
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Tortor amet porta proin in. Orci imperdiet nisi
                                               dignissim pellentesque morbi vitae. Quisque tincidunt
                                               metus lectus porta
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Tortor amet porta proin in. Orci imperdiet nisi
                                               dignissim pellentesque morbi vitae. Quisque tincidunt
                                               metus lectus porta
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Tortor amet porta proin in. Orci imperdiet nisi
                                               dignissim pellentesque morbi vitae. Quisque tincidunt
                                               metus lectus porta
                                           </p>
                                       </li>
                                   </ul>
                               </section>
                               <section class="job-details__group">
                                   <h2 class="job-details__title">Professional Skills</h2>
                                   <ul class="job-details__list">
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Et nunc ut tempus duis nisl sed massa. Ornare varius
                                               faucibus nisi vitae vitae cras ornare.
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Ornare varius faucibus nisi vitae vitae cras ornare.
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Tortor amet porta proin in. Orci imperdiet nisi
                                               dignissim pellentesque morbi vitae.
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Tortor amet porta proin in. Orci imperdiet nisi
                                               dignissim pellentesque morbi vitae.
                                           </p>
                                       </li>
                                       <li class="job-details__item">
                                           <img src="images/check.svg" alt="" aria-hidden="true" />
                                           <p class="job-details__description">
                                               Tortor amet porta proin in. Orci imperdiet nisi
                                               dignissim pellentesque morbi vitae.
                                           </p>
                                       </li>
                                   </ul>
                               </section>
                               <section class="job-details__group">
                                   <h2 class="job-details__title">Tags:</h2>
                                   <ul class="job-tag__list">
                                       <li class="badge">
                                           <a href="#">Full time</a>
                                       </li>
                                       <li class="badge">
                                           <a href="#">Commerce</a>
                                       </li>
                                       <li class="badge">
                                           <a href="#">New - York</a>
                                       </li>
                                       <li class="badge">
                                           <a href="#">Corporate</a>
                                       </li>
                                       <li class="badge">
                                           <a href="#">Location</a>
                                       </li>
                                   </ul>
                               </section>
                               <section class="job-details__group">
                                   <h2 class="job-details__title">Share Job:</h2>

                                   <ul class="job-share__list">
                                       <li class="job-share__item">
                                           <a class="job-share__link" href="#">
                                               <img src="images/facebook.svg" alt="Facebook" />
                                           </a>
                                       </li>

                                       <li class="job-share__item">
                                           <a class="job-share__link" href="#">
                                               <img src="images/x.svg" alt="X" />
                                           </a>
                                       </li>

                                       <li class="job-share__item">
                                           <a class="job-share__link" href="#">
                                               <img src="images/linkedin.svg" alt="LinkedIn" />
                                           </a>
                                       </li>
                                   </ul>
                               </section>
                           </div>
                           <section class="related-jobs">
                               <div class="related-jobs__header">
                                   <h2 class="related-jobs__title">Related Jobs</h2>
                                   <p class="related-jobs__desc">
                                       At eu lobortis pretium tincidunt amet lacus ut aenean
                                       aliquet
                                   </p>
                               </div>

                               <div class="related-jobs__body">
                                   <ul class="jobs__list">
                                       <li class="jobs__item">
                                           <article class="job-card">
                                               <div class="job-card__top">
                                                   <div class="badge">
                                                       <span>15 min ago</span>
                                                   </div>
                                                   <button class="job-card__favorite" type="button"
                                                       aria-label="Add to favorites">
                                                       <img src="images/plus.svg" alt="" />
                                                   </button>
                                               </div>
                                               <div class="job-card__main">
                                                   <img src="images/jobs-7.svg" alt="" />
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
                                                           <img src="images/location-details.svg" alt="" />
                                                           <span>Texas, USA</span>
                                                       </li>
                                                   </ul>

                                                   <div class="job-card__details">
                                                       <a class="button" href="job-details.html">
                                                           Job Details
                                                       </a>
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
                                                   <button class="job-card__favorite" type="button"
                                                       aria-label="Add to favorites">
                                                       <img src="images/plus.svg" alt="" />
                                                   </button>
                                               </div>
                                               <div class="job-card__main">
                                                   <img src="images/jobs-4.svg" alt="" />
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
                                                       <a class="button" href="job-details.html">
                                                           Job Details
                                                       </a>
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
                                                   <button class="job-card__favorite" type="button"
                                                       aria-label="Add to favorites">
                                                       <img src="images/plus.svg" alt="" />
                                                   </button>
                                               </div>
                                               <div class="job-card__main">
                                                   <img src="images/jobs-5.svg" alt="" />
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
                                                       <a class="button" href="job-details.html">
                                                           Job Details
                                                       </a>
                                                   </div>
                                               </div>
                                           </article>
                                       </li>
                                   </ul>
                               </div>
                           </section>
                       </div>
                       <aside class="job-details__sidebar">
                           <section class="job-overview">
                               <h2 class="job-overview__title">Job Overview</h2>
                               <ul class="job-overview__list">
                                   <li class="job-overview__item">
                                       <img class="job-overview__icon" src="images/person.svg" alt="" />

                                       <div class="job-overview__content">
                                           <span class="job-overview__label"> Job Title </span>

                                           <p class="job-overview__value">
                                               Corporate Solutions Executive
                                           </p>
                                       </div>
                                   </li>
                                   <li class="job-overview__item">
                                       <img class="job-overview__icon" src="images/clock-job-card.svg" alt="" />

                                       <div class="job-overview__content">
                                           <span class="job-overview__label"> Job Type </span>

                                           <p class="job-overview__value">Full Time</p>
                                       </div>
                                   </li>
                                   <li class="job-overview__item">
                                       <img class="job-overview__icon" src="images/bag.svg" alt="" />

                                       <div class="job-overview__content">
                                           <span class="job-overview__label"> Category </span>

                                           <p class="job-overview__value">Commerce</p>
                                       </div>
                                   </li>
                                   <li class="job-overview__item">
                                       <img class="job-overview__icon" src="images/experience.svg" alt="" />

                                       <div class="job-overview__content">
                                           <span class="job-overview__label"> Experience </span>

                                           <p class="job-overview__value">5 Years</p>
                                       </div>
                                   </li>
                                   <li class="job-overview__item">
                                       <img class="job-overview__icon" src="images/degree.svg" alt="" />

                                       <div class="job-overview__content">
                                           <span class="job-overview__label"> Degree </span>

                                           <p class="job-overview__value">Master</p>
                                       </div>
                                   </li>
                                   <li class="job-overview__item">
                                       <img class="job-overview__icon" src="images/wallet.svg" alt="" />

                                       <div class="job-overview__content">
                                           <span class="job-overview__label"> Offered Salary </span>

                                           <p class="job-overview__value">$40000-$42000</p>
                                       </div>
                                   </li>
                                   <li class="job-overview__item">
                                       <img class="job-overview__icon" src="images/location.svg" alt="" />

                                       <div class="job-overview__content">
                                           <span class="job-overview__label"> Location </span>

                                           <p class="job-overview__value">New-York, USA</p>
                                       </div>
                                   </li>
                               </ul>

                               <div class="job-overview-map__wrapper">
                                   <iframe class="job-overview-map__frame"
                                       src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.0505188825!2d-74.30915576641335!3d40.697193365406655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z44Ki44Oh44Oq44Kr5ZCI6KGG5Zu9IOODi-ODpeODvOODqOODvOOCr-W3niDjg4vjg6Xjg7zjg6jjg7zjgq8!5e0!3m2!1sen!2sus!4v1786952127910!5m2!1sen!2sus"
                                       title="Job Portal office location" loading="lazy"
                                       referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                               </div>
                           </section>
                           <section class="job-message">
                               <h2 class="job-message__title">Send Us Message</h2>

                               <form class="job-message__form">
                                   <div class="job-message__field">
                                       <img class="job-message__icon" src="images/name.svg" alt="" />

                                       <input class="job-message__input" type="text" placeholder="Full name" />
                                   </div>

                                   <div class="job-message__field">
                                       <img class="job-message__icon" src="images/email-details.svg" alt="" />

                                       <input class="job-message__input" type="email" placeholder="Email Address" />
                                   </div>

                                   <div class="job-message__field">
                                       <img class="job-message__icon" src="images/phone-details.svg" alt="" />

                                       <input class="job-message__input" type="tel" placeholder="Phone Number" />
                                   </div>

                                   <div class="job-message__field job-message__field--textarea">
                                       <img class="job-message__icon" src="images/message.svg" alt="" />

                                       <textarea class="job-message__textarea" placeholder="Your Message"></textarea>
                                   </div>

                                   <button class="button job-message__button" type="submit">
                                       Send Message
                                   </button>
                               </form>
                           </section>
                       </aside>
                   </div>
               </div>
           </div>
       </main>
   @endsection
