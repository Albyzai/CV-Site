<section class="dark-bg" id="education">
                <div class="row outer-row">
                    <div class="col-md-4 col-sm-12 left-box">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-right">
                                <div class="section-title-wrapper col-md-12 no-padding">
                                    <div class="col-md-12 no-padding" data-aos="fade-right">
                                        <h3 class="section-title bold col-12">EDUCATION</h3>
                                        <h5 class="section-title col-12">I live to learn</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="row inner-row">
                            <div class="timeline col-md-12">

                                @foreach($educations as $education)

                                    <div class="timeline-item">
                                        <div class="timeline-point t-primary-bg"></div>
                                        <div class="timeline-content-wrapper" data-aos="fade-left">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="timeline-timeframe">
                                                        {{ $education->from }}

                                                        @if($education->to != null)
                                                            &ndash;
                                                            {{ $education->to}}
                                                        @endif
                                                    </div>
                                                    <h3 class="timeline-heading">
                                                        {{ $education->title }}
                                                    </h3>
                                                    <h4 class="timeline-title">
                                                        {{ $education->genre }}
                                                    </h4>
                                                    <div class="timeline-location">
                                                        {{ $education->location }}
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>
                                                        {{ $education->text }}
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- /o-grid -->
                                        </div>
                                        <!-- /o-content -->
                                    </div>

                                @endforeach


                                <div class="timeline-end t-border-color"></div>
                            </div>
                            <!-- /c-timeline -->
                        </div>
                    </div>
                </div>
            </section>