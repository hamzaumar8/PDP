    <div class="mm-menu-wrap navigation-font mm-menu mm-pagedim-black mm-offcanvas mm-right"
        :class="{ 'mm-current mm-opened': open }" data-slide="right" id="mobile-menu">
        <div class="mm-panels" x-data={'mmCurrent':'mm-current','mmTarget':""}>
            <div class="mm-panel mm-hasnavbar mm-opened " :class="mmCurrent" id="menu-main-navigation">
                <div class="mm-navbar"><a class="mm-title"><span class="mmenu-custom-close"></span></a></div>
                <ul class="m-menu mm-listview">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5734"><a
                            href="{{ route('home') }}">Home</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5227"
                        x-on:click="mmCurrent = 'mm-subopened'; mmTarget = 'mm-2'">
                        <a class="mm-next mm-fullsubopen" href="#mm-2" data-target="#mm-2"></a><span
                            class="mm-menu-blank">About PDP</span>

                    </li>
                    <li x-on:click="mmCurrent = 'mm-subopened'; mmTarget = 'mm-3'"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5735">
                        <a class="mm-next" href="#mm-3" data-target="#mm-3"></a><a href="#">Academics</a>

                    </li>
                    <li x-on:click="mmCurrent = 'mm-subopened'; mmTarget = 'mm-4'"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5728">
                        <a class="mm-next" href="#mm-4" data-target="#mm-4"></a><a href="#">Admissions</a>

                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5734"><a
                            href="{{ route('majors') }}">Majors</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5734"><a
                            href="#">Athletics</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5733"><a
                            href="#">University Life</a></li>
                </ul>
            </div>
            <div class="mm-panel mm-hasnavbar"
                :class="mmTarget === 'mm-2' ? 'mm-highest mm-current mm-opened' : 'mm-hidden'" id="mm-2">
                <div class="mm-navbar" x-on:click="mmCurrent = 'mm-current'; mmTarget = ''">
                    <a class="mm-btn mm-prev" href="#menu-main-navigation" data-target="#menu-main-navigation"></a>
                    <a class="mm-title" href="#menu-main-navigation">ABOUT PDP</a>
                </div>
                <ul class="sub-menu mm-listview">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5314"><a
                            href="#">About PDP</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5342"><a
                            href="#">Gallery</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5268"><a
                            href="#">Price Table</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5269"><a
                            href="#">Maintenance</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5270"><a
                            href="#">Coming Soon</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5220"><a
                            href="#">404 Page</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="mobile-header-wrap">
        <div class="mobile-header header-background style-slide sticky-mobile-navigation " id="mobile-header">
            <div class="mobile-header-container container clearfix">
                <div class="logo  item-pdlr">
                    <div class="logo-inner">
                        <a class="" href="{{ route('home') }}">
                            <img src="#" alt="PDP Logo"></a>
                    </div>
                </div>
                <div class="mobile-menu-right">
                    <div class="mobile-menu">
                        <a @click="open = ! open" class="mm-menu-button mobile-menu-button mobile-button-hamburger"
                            :class="{ 'active': open }">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
