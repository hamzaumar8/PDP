<div class="pbf-wrapper py-20 bg-[#e6e6e6]">
    <div class="pbf-wrapper-content  ">
        <div class="pbf-wrapper-container clearfix container">
            <div class="pbf-element">
                <div class="tab-item  item-pb  left-align tab-style1-horizontal item-px grid grid-cols-3"
                    x-data="{ 'activeTab': 'tab1' }">
                    <div class="tab-item-content-image-wrap min-h-full h-full">
                        <div class="tab-item-image-background"
                            style="background-image: url({{ asset('assets/img/4.jpg') }});background-repeat: no-repeat; background-size: cover;background-position: center;">
                        </div>
                    </div>
                    <div class="tab-item-wrap col-span-3 lg:col-span-2">
                        <div class="tab-item-title-wrap clearfix title-font">
                            <div class="tab-item-title" @click="activeTab = 'tab1'"
                                :class="{ 'active': activeTab === 'tab1' }">Benefits</div>
                            <div class="tab-item-title " @click="activeTab = 'tab2'"
                                :class="{ 'active': activeTab === 'tab2' }">Personal Growth</div>
                            <div class="tab-item-title " @click="activeTab = 'tab3'"
                                :class="{ 'active': activeTab === 'tab3' }">Spirituality</div>
                            <div class="tab-item-title " @click="activeTab = 'tab4'"
                                :class="{ 'active': activeTab === 'tab4' }">Alumni</div>
                        </div>
                        <div class="tab-item-content-wrap clearfix">
                            <div class="tab-item-content" x-show="activeTab === 'tab1'">
                                <div class="title-item item-pb clearfix  left-align title-item-caption-top">
                                    <div class="title-item-title-wrap ">
                                        <h3 class="title-item-title skin-title "
                                            style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                            Why Choose PDP?<span class="title-item-title-divider skin-divider"></span>
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
                            <div class="tab-item-content " x-show="activeTab === 'tab2'">
                                <div class="title-item item-pb clearfix  left-align title-item-caption-top">
                                    <div class="title-item-title-wrap ">
                                        <h3 class="title-item-title skin-title "
                                            style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                            Personal Growth<span class="title-item-title-divider skin-divider"></span>
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
                            <div class="tab-item-content " x-show="activeTab === 'tab3'">
                                <div class="title-item item-pb clearfix  left-align title-item-caption-top">
                                    <div class="title-item-title-wrap ">
                                        <h3 class="title-item-title skin-title "
                                            style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                            Spirituality<span class="title-item-title-divider skin-divider"></span>
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
                            <div class="tab-item-content " x-show="activeTab === 'tab4'">
                                <div class="title-item item-pb clearfix  left-align title-item-caption-top">
                                    <div class="title-item-title-wrap ">
                                        <h3 class="title-item-title skin-title "
                                            style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">
                                            Alumni<span class="title-item-title-divider skin-divider"></span>
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
