<div class="core-pbf-wrapper " style="padding: 90px 0px 60px 0px;">
    {{-- <div class="core-pbf-background-wrap" style="background-color: #efefef ;"></div> --}}
    <div class="core-pbf-wrapper-content  ">
        <div class="core-pbf-wrapper-container clearfix core-container container">
            <div class="core-pbf-element">
                <div class="core-tab-item  core-item-pdb  core-left-align core-tab-style1-horizontal core-item-pdlr grid grid-cols-3"
                    x-data="{ 'activeTab': 'tab1' }">
                    <div class="core-tab-item-content-image-wrap min-h-full h-full">
                        <div class="core-tab-item-image-background"
                            style="background-image: url(https://images.pexels.com/photos/9159054/pexels-photo-9159054.jpeg?auto=compress&cs=tinysrgb&w=1600);background-repeat: no-repeat; background-size: cover;background-position: center;">
                        </div>
                    </div>
                    <div class="core-tab-item-wrap col-span-3 lg:col-span-2">
                        <div class="core-tab-item-title-wrap clearfix core-title-font">
                            <div class="core-tab-item-title" @click="activeTab = 'tab1'"
                                :class="{ 'core-active': activeTab === 'tab1' }">Benefits</div>
                            <div class="core-tab-item-title " @click="activeTab = 'tab2'"
                                :class="{ 'core-active': activeTab === 'tab2' }">Self Development</div>
                            <div class="core-tab-item-title " @click="activeTab = 'tab3'"
                                :class="{ 'core-active': activeTab === 'tab3' }">Spirituality</div>
                            <div class="core-tab-item-title " @click="activeTab = 'tab4'"
                                :class="{ 'core-active': activeTab === 'tab4' }">Alumni</div>
                        </div>
                        <div class="core-tab-item-content-wrap clearfix">
                            <div class="core-tab-item-content" x-show="activeTab === 'tab1'">
                                <div
                                    class="core-title-item core-item-pdb clearfix  core-left-align core-title-item-caption-top">
                                    <div class="core-title-item-title-wrap ">
                                        <h3 class="core-title-item-title core-skin-title "
                                            style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                            Why Choose PDP?<span
                                                class="core-title-item-title-divider core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam id eius temporibus
                                    quod rerum vel facere voluptate nemo enim perspiciatis amet corporis ratione illo,
                                    sit ab sunt velit quidem repudiandae! Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quisquam, veniam ad libero accusantium, illum animi quos dolor
                                    repellendus quasi doloribus nemo magni ab incidunt ipsa! Voluptate ipsam esse magni
                                    commodi?</p>
                            </div>
                            <div class="core-tab-item-content " x-show="activeTab === 'tab2'">
                                <div
                                    class="core-title-item core-item-pdb clearfix  core-left-align core-title-item-caption-top">
                                    <div class="core-title-item-title-wrap ">
                                        <h3 class="core-title-item-title core-skin-title "
                                            style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                            Self Development<span
                                                class="core-title-item-title-divider core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam id eius temporibus
                                    quod rerum vel facere voluptate nemo enim perspiciatis amet corporis ratione illo,
                                    sit ab sunt velit quidem repudiandae! Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quisquam, veniam ad libero accusantium, illum animi quos dolor
                                    repellendus quasi doloribus nemo magni ab incidunt ipsa! Voluptate ipsam esse magni
                                    commodi?</p>
                            </div>
                            <div class="core-tab-item-content " x-show="activeTab === 'tab3'">
                                <div
                                    class="core-title-item core-item-pdb clearfix  core-left-align core-title-item-caption-top">
                                    <div class="core-title-item-title-wrap ">
                                        <h3 class="core-title-item-title core-skin-title "
                                            style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                            Spirituality<span
                                                class="core-title-item-title-divider core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam id eius temporibus
                                    quod rerum vel facere voluptate nemo enim perspiciatis amet corporis ratione illo,
                                    sit ab sunt velit quidem repudiandae! Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quisquam, veniam ad libero accusantium, illum animi quos dolor
                                    repellendus quasi doloribus nemo magni ab incidunt ipsa! Voluptate ipsam esse magni
                                    commodi?</p>
                            </div>
                            <div class="core-tab-item-content " x-show="activeTab === 'tab4'">
                                <div
                                    class="core-title-item core-item-pdb clearfix  core-left-align core-title-item-caption-top">
                                    <div class="core-title-item-title-wrap ">
                                        <h3 class="core-title-item-title core-skin-title "
                                            style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                            Alumni<span class="core-title-item-title-divider core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam id eius temporibus
                                    quod rerum vel facere voluptate nemo enim perspiciatis amet corporis ratione illo,
                                    sit ab sunt velit quidem repudiandae! Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quisquam, veniam ad libero accusantium, illum animi quos dolor
                                    repellendus quasi doloribus nemo magni ab incidunt ipsa! Voluptate ipsam esse magni
                                    commodi?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
