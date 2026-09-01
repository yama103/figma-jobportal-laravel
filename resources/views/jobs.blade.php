 @extends('layouts.app')

 @section('content')
     <main>
         <section class="page-hero">
             <div class="container">
                 <div class="page-hero__inner">
                     <h1 class="page-hero__title">{{ $title }}</h1>
                     <p class="page-hero__description">{{ $description }}</p>
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
                         <form class="job-filter" method="GET" action="{{ route('jobs') }}">
                             <!-- 検索 -->

                             <div class="job-filter__group">
                                 <h3 class="job-filter__title">Search by Job Title</h3>
                                 <div class="job-filter__search">
                                     <img src="images/search-gray.svg" alt="" />
                                     <input type="text" placeholder="Job title or company" class="job-filter__input"
                                         name="keyword" value="{{ request('keyword') }}" />
                                 </div>
                             </div>

                             <!-- Location -->
                             <div class="job-filter__group">
                                 <h3 class="job-filter__title">Location</h3>
                                 <div class="job-filter__select-wrapper">
                                     <img src="images/location-gray.svg" alt="" class="job-filter__icon" />
                                     <select name="location" class="job-filter__select">
                                         <option value="">Choose city</option>
                                         <option value="New-York, USA" @if (request('location') === 'New-York, USA') selected @endif>
                                             New-York, USA</option>
                                         <option value="Los-Angeles, USA" @if (request('location') === 'Los-Angeles, USA') selected @endif>
                                             Los-Angeles, USA</option>
                                         <option value="Texas, USA" @if (request('location') === 'Texas, USA') selected @endif>Texas,
                                             USA</option>
                                         <option value="Florida, USA" @if (request('location') === 'Florida, USA') selected @endif>
                                             Florida, USA</option>
                                         <option value="Boston, USA" @if (request('location') === 'Boston, USA') selected @endif>
                                             Boston, USA</option>
                                     </select>
                                 </div>
                             </div>

                             <!-- Category -->
                             @php
                                 $categories = [
                                     'Hotels & Tourism',
                                     'Media',
                                     'Construction',
                                     'Commerce',
                                     'Financial Services',
                                 ];
                             @endphp

                             <div class="job-filter__group">
                                 <h3 class="job-filter__title">Category</h3>

                                 <ul class="job-filter__list">
                                     @foreach ($categories as $category)
                                         <li class="job-filter__item">
                                             <label class="job-filter__label">
                                                 <input type="checkbox" name="category" value="{{ $category }}"
                                                     @if (request('category') === $category) checked @endif />

                                                 <span class="job-filter__text">
                                                     {{ $category }}
                                                 </span>

                                                 <span class="job-filter__count">
                                                     {{ $categoryCounts[$category] ?? 0 }}
                                                 </span>
                                             </label>
                                         </li>
                                     @endforeach
                                 </ul>

                                 <button type="button" class="job-filter__more">
                                     Show More
                                 </button>
                             </div>
                             <!-- Job Type -->

                             @php
                                 $jobTypes = ['Full time', 'Part time', 'Freelance', 'Seasonal', 'Fixed-Price'];
                             @endphp

                             <div class="job-filter__group">
                                 <h3 class="job-filter__title">Job Type</h3>
                                 <ul class="job-filter__list">
                                     @foreach ($jobTypes as $jobType)
                                         <li class="job-filter__item">
                                             <label class="job-filter__label">
                                                 <input type="checkbox" name="job_type" value="{{ $jobType }}"
                                                     @if (request('job_type') === $jobType) checked @endif />
                                                 <span class="job-filter__text">
                                                     {{ $jobType }}
                                                 </span>
                                                 <span class="job-filter__count">
                                                     {{ $typeCounts[$jobType] ?? 0 }}
                                                 </span>
                                             </label>
                                         </li>
                                     @endforeach
                                 </ul>
                             </div>
                             <!-- Experience Level -->
                             @php
                                 $experienceLevels = [
                                     'no-experience' => 'No-experience',
                                     'fresher' => 'Fresher',
                                     'intermediate' => 'Intermediate',
                                     'expert' => 'Expert',
                                 ];
                             @endphp

                             <div class="job-filter__group">
                                 <h3 class="job-filter__title">Experience Level</h3>
                                 <ul class="job-filter__list">
                                     @foreach ($experienceLevels as $key => $label)
                                         <li class="job-filter__item">
                                             <label class="job-filter__label">
                                                 <input type="checkbox" name="experience" value="{{ $key }}"
                                                     @if (request('experience') === $key) checked @endif />
                                                 <span class="job-filter__text">
                                                     {{ $label }}
                                                 </span>
                                                 <span class="job-filter__count">
                                                     {{ $experienceCounts[$key] ?? 0 }}
                                                 </span>
                                             </label>
                                         </li>
                                     @endforeach
                                 </ul>
                             </div>
                             <div class="job-filter__group">
                                 <h3 class="job-filter__title">Salary</h3>
                                 <div class="job-filter__range-wrapper">
                                     <input type="range" min="0" max="50000" value="{{ request('salary', 0) }}"
                                         name="salary" class="job-filter__range" />
                                 </div>
                                 <div class="job-filter__salary-info">
                                     <span class="job-filter__salary-text">Salary: $0 - $50000</span>
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
                                         <a href="{{ route('jobs', ['tag' => 'engineering']) }}">
                                             engineering
                                         </a>
                                     </li>
                                     <li class="badge">
                                         <a href="{{ route('jobs', ['tag' => 'construction']) }}">
                                             construction
                                         </a>
                                     </li>
                                     <li class="badge">
                                         <a href="{{ route('jobs', ['tag' => 'creative']) }}">
                                             creative
                                         </a>
                                     </li>
                                     <li class="badge">
                                         <a href="{{ route('jobs', ['tag' => 'corporate']) }}">
                                             corporate
                                         </a>
                                     </li>
                                     <li class="badge">
                                         <a href="{{ route('jobs', ['tag' => 'consulting']) }}">
                                             consulting
                                         </a>
                                     </li>
                                     <li class="badge">
                                         <a href="{{ route('jobs', ['tag' => 'agriculture']) }}">
                                             agriculture
                                         </a>
                                     </li>
                                     <li class="badge">
                                         <a href="{{ route('jobs', ['tag' => 'logistics']) }}">
                                             logistics
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <button type="submit" class="button">
                                 Apply Filters
                             </button>
                         </form>

                         <div class="jobs__banner">
                             <img src="images/hiring-banner.webp" alt="" class="jobs__banner-img" />
                             <div class="jobs__banner-content">
                                 <p class="jobs__banner-title">WE ARE HIRING</p>
                                 <p class="jobs__banner-text">Apply Today!</p>
                             </div>
                         </div>
                     </aside>

                     <div class="jobs__content">
                         <div class="jobs__toolbar">
                             <p class="jobs__result">Showing {{ $jobs->firstItem() }}-{{ $jobs->lastItem() }} of
                                 {{ $jobs->total() }} results</p>
                             <div class="jobs__sort-wrapper">
                                 <select class="jobs__sort" name="sort">
                                     <option value="">Sort</option>
                                     <option value="salary-high">Salary: High to Low</option>
                                     <option value="salary-low">Salary: Low to High</option>
                                 </select>
                                 <img class="jobs__sort-icon" src="images/chevron-down.svg" alt=""
                                     aria-hidden="true" />
                             </div>
                         </div>

                         <ul class="page-jobs__list">
                             @foreach ($jobs as $job)
                                 <li class="jobs__item">
                                     <article class="job-card">
                                         <div class="job-card__top">
                                             <div class="badge">
                                                 <span>10 min ago</span>
                                             </div>
                                             <button class="job-card__favorite" type="button"
                                                 aria-label="Add to favorites">
                                                 <img src="images/plus.svg" alt="" />
                                             </button>
                                         </div>

                                         <div class="job-card__main">
                                             <img src="{{ asset('images/jobs-1.svg') }}" alt="" />
                                             <div class="job-card__contents">
                                                 <p class="job-card__title">{{ $job->title }}</p>
                                                 <p class="job-card__subtitle">
                                                     {{ $job->company }}
                                                 </p>
                                             </div>
                                         </div>

                                         <div class="job-card__bottom">
                                             <ul class="job-card__meta">
                                                 <li class="job-card__meta-item">
                                                     <img src="images/bag.svg" alt="" />
                                                     <span>{{ $job->category }}</span>
                                                 </li>
                                                 <li class="job-card__meta-item">
                                                     <img src="images/clock-job-card.svg" alt="" />
                                                     <span>{{ $job->type }}</span>
                                                 </li>
                                                 <li class="job-card__meta-item">
                                                     <img src="images/wallet.svg" alt="" />
                                                     <span>${{ $job->salary_min }}-${{ $job->salary_max }}</span>
                                                 </li>
                                                 <li class="job-card__meta-item">
                                                     <img src="images/location.svg" alt="" />
                                                     <span>{{ $job->location }}</span>
                                                 </li>
                                             </ul>

                                             <div class="job-card__details">
                                                 <a class="button" href="{{ route('job-details', $job['id']) }}">Job
                                                     Details</a>
                                             </div>
                                         </div>
                                     </article>
                                 </li>
                             @endforeach

                             <nav class="jobs__pagination" aria-label="Jobs pagination">
                                 <ul class="jobs__pagination-list">
                                     <li class="jobs__pagination-pages">
                                         @for ($page = 1; $page <= $jobs->lastPage(); $page++)
                                             <a href="{{ $jobs->url($page) }}"
                                                 class="jobs__pagination-link {{ $jobs->currentPage() === $page ? 'is-active' : '' }}">
                                                 {{ $page }}
                                             </a>
                                         @endfor
                                     </li>

                                     @if ($jobs->hasMorePages())
                                         <li class="jobs__pagination-next-item">
                                             <a href="{{ $jobs->nextPageUrl() }}"
                                                 class="jobs__pagination-link jobs__pagination-next">
                                                 Next
                                                 <img src="images/chevron-right.svg" alt="" aria-hidden="true" />
                                             </a>
                                         </li>
                                     @endif
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
                                 <img src="images/instagram.svg" alt="Instagram" class="top-company__logo" />
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
                                 <img src="images/tesla.svg" alt="Tesla" class="top-company__logo" />
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
                                 <img src="images/mcdonalds.svg" alt="McDonald's" class="top-company__logo" />
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
                                 <img src="images/apple.svg" alt="Apple" class="top-company__logo" />
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
     <script>
         const slider = document.querySelector('.job-filter__range');
         const salaryText = document.querySelector('.job-filter__salary-text');
         const sort = document.querySelector('.jobs__sort');
         const favorites = document.querySelectorAll('.job-card__favorite');

         salaryText.textContent = `Minimum Salary: ${Number(slider.value).toLocaleString()}`;

         slider.addEventListener('input', function() {
             salaryText.textContent = `Minimum Salary: ${Number(slider.value).toLocaleString()}`;
         });

         sort.addEventListener('change', function() {
             const url = new URL(window.location.href);
             url.searchParams.set('sort', sort.value);
             window.location.href = url.toString();
         });

         favorites.forEach(function(favorite) {
             favorite.addEventListener('click', function() {
                 console.log('favorite clicked');
                 favorite.classList.toggle('is-active');
                 const img = favorite.querySelector('img')
                 if (favorite.classList.contains('is-active')) {
                     img.src = 'images/heart.svg';
                 } else {
                     img.src = 'images/plus.svg';
                 }
             });
         });
     </script>
 @endsection
