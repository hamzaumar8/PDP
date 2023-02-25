<header class="header-wrap header-style-plain style-menu-right sticky-navigation style-fixed clearfix relative"
    data-navigation-offset="75px" style="">
    <div class="header-container  container">
        <div class="header-container-inner flex justify-between items-center">
            <div class="logo">
                <div class="logo-inner">
                    <a class="" href="{{ route('home') }}">
                        <img src="#" alt="PDP LOGO">
                    </a>
                </div>
            </div>
            <div class="navigation ">
                <div class="main-menu sf-js-enabled sf-arrows" id="main-menu" style="touch-action: pan-y;">
                    <ul id="menu-main-navigation-1" class="sf-menu flex space-x-4" x-data="{ aboutOpen: false, academicsOpen: false }">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-5271 normal-menu current-menu-ancestor">
                            <a href="{{ route('home') }}" class="sf-with-ul-pre sf-with-ul">Home</a>
                        </li>
                        <li x-on:mouseenter="aboutOpen = true" x-on:mouseleave="aboutOpen = false"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-5271 normal-menu">
                            <a href="{{ route('home') }}" class="sf-with-ul-pre sf-with-ul">About PDP</a>
                            <ul class="sub-menu" x-show="aboutOpen" x-on:mouseleave="aboutOpen = false">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6000"
                                    data-size="60"><a href="{{ route('about-us') }}">Message from the President</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5957 current_page_item menu-item-5999"
                                    data-size="60"><a href="{{ route('about-us') }}">History</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5957 current_page_item menu-item-5999"
                                    data-size="60"><a href="{{ route('about-us') }}">Mission</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5957 current_page_item menu-item-5999"
                                    data-size="60"><a href="{{ route('about-us') }}">Vision</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5957 current_page_item menu-item-5999"
                                    data-size="60"><a href="{{ route('about-us') }}">Strategic plan</a></li>
                            </ul>
                        </li>
                        <li x-on:mouseenter="academicsOpen = true" x-on:mouseleave="academicsOpen = false"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5735 mega-menu">
                            <a href="{{ route('home') }}bachelor-of-science-in-business-administration/"
                                class="sf-with-ul-pre sf-with-ul">Academics</a>
                            <div x-show="academicsOpen"
                                x-on:mouseleave="academicsOpen = false"class="sf-mega sf-mega-full"
                                style="background-image: url(&quot;https://a6e8z9v6.stackpathcdn.com/kingster/wp-content/uploads/2018/08/mega-menu-bg.jpg&quot;); background-position: right bottom; background-repeat: no-repeat;">
                                <div class="sf-mega-section-wrap gap-2 grid grid-cols-3">
                                    <div class="sf-mega-section column-15">
                                        <div
                                            class="sf-mega-section-inner menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5739">
                                            <a class="sf-with-ul-pre">Undergraduate</a>
                                            <ul class="sub-menu">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5736">
                                                    <a
                                                        href="{{ route('home') }}bachelor-of-science-in-business-administration/">Business
                                                        Administration</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5902">
                                                    <a href="{{ route('home') }}school-of-law/">School
                                                        Of Law</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5901">
                                                    <a href="{{ route('home') }}engineering/">Engineering</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5900">
                                                    <a href="{{ route('home') }}medicine/">Medicine</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5899">
                                                    <a href="{{ route('home') }}art-science/">Art
                                                        &amp; Science</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sf-mega-section column-15">
                                        <div
                                            class="sf-mega-section-inner menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5740">
                                            <a href="#" class="sf-with-ul-pre">Graduate Program</a>
                                            <ul class="sub-menu">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5954">
                                                    <a href="{{ route('home') }}hospitality-management/">Hospitality
                                                        Management</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5953">
                                                    <a href="{{ route('home') }}physics/">Physics</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5909">
                                                    <a href="#">Chemistry</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5910">
                                                    <a href="#">Music</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5920">
                                                    <a href="#">Computer Science</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sf-mega-section column-15">
                                        <div
                                            class="sf-mega-section-inner menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5741">
                                            <a href="#" class="sf-with-ul-pre">Resources</a>
                                            <ul class="sub-menu">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5911">
                                                    <a
                                                        href="{{ route('home') }}bachelor-of-science-in-business-administration/">Department
                                                        Page</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5912">
                                                    <a
                                                        href="{{ route('home') }}bachelor-of-science-in-business-administration/finance/">Major
                                                        Page</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5913">
                                                    <a
                                                        href="{{ route('home') }}bachelor-of-science-in-business-administration/finance/finance-faculty/">Faculty
                                                        Page</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-personnel menu-item-5919">
                                                    <a href="{{ route('home') }}personnel/john-hagensy-phd/">Single
                                                        Instructor</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-course menu-item-5955">
                                                    <a
                                                        href="{{ route('home') }}course/introduction-to-financial-accounting/">Single
                                                        Course</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5728 normal-menu">
                            <a href="{{ route('home') }}apply-to-kingster/"
                                class="sf-with-ul-pre sf-with-ul">Admissions</a>
                            <ul class="sub-menu" style="display: none;">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5729"
                                    data-size="60"><a href="{{ route('home') }}apply-to-kingster/">Apply To
                                        Kingster</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5918"
                                    data-size="60"><a href="{{ route('home') }}campus-tour/">Campus
                                        Tour</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5730"
                                    data-size="60"><a href="{{ route('home') }}scholarships/">Scholarships</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5731"
                                    data-size="60"><a href="{{ route('home') }}athletics/">Athletics</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5732"
                                    data-size="60"><a href="{{ route('home') }}give-to-kingster/">Give To
                                        Kingster</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5917"
                                    data-size="60"><a href="{{ route('home') }}alumni/">Alumni</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6049"
                                    data-size="60"><a href="{{ route('home') }}event-calendar/">Event Calendar</a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6036 normal-menu">
                            <a href="/kingster/course-search/?course-keywords"
                                class="sf-with-ul-pre sf-with-ul">Courses</a>
                            <ul class="sub-menu" style="display: none;">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6029"
                                    data-size="60"><a href="/kingster/course-search/?course-keywords">Course
                                        Search</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6035"
                                    data-size="60"><a href="{{ route('home') }}course-list-1/">Course List 1</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6034"
                                    data-size="60"><a href="{{ route('home') }}course-list-2/">Course List 2</a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5734 normal-menu">
                            <a href="{{ route('home') }}athletics/">Athletics</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5733 normal-menu">
                            <a href="{{ route('home') }}university-life/">University Life</a>
                        </li>
                    </ul>
                </div>
            </div><!-- navigation -->

        </div><!-- header-inner -->
    </div><!-- header-container -->
</header>
