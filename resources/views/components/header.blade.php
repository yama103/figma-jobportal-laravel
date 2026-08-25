   <header class="header">
       <div class="container">
           <div class="header__wrapper">
               <a href="{{ route('home') }}" class="header__logo">
                   <img src="/images/sitelogo.svg" alt="" />
                   <span>Job Portal</span>
               </a>

               <button class="header__hamburger" type="button" aria-label="メニューを開く" aria-expanded="false">
                   <span class="header__hamburger-line"></span>
                   <span class="header__hamburger-line"></span>
                   <span class="header__hamburger-line"></span>
               </button>

               <nav class="header__nav">
                   <ul class="header__list">
                       <li class="header__item is-active">
                           <a href="{{ route('home') }}">Home</a>
                       </li>
                       <li class="header__item">
                           <a href="{{ route('jobs') }}">Jobs</a>
                       </li>
                       <li class="header__item">
                           <a href="{{ route('about-us') }}">About Us</a>
                       </li>
                       <li class="header__item">
                           <a href="{{ route('contact-us') }}">Contact Us</a>
                       </li>
                   </ul>

                   <div class="header__actions header__actions--mobile">
                       <a href="#">Login</a>
                       <a class="button" href="#">Register</a>
                   </div>
               </nav>

               <div class="header__actions header__actions--desktop">
                   <a href="#">Login</a>
                   <a class="button" href="#">Register</a>
               </div>
           </div>
       </div>
   </header>
