<section class="dark-bg" id="experience">
                <div class="row outer-row">
                    <div class="col-md-4 col-sm-12 left-box">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-right">
                                <div class="section-title-wrapper col-md-12 no-padding">
                                    <div class="col-md-12 no-padding" data-aos="fade-right">
                                        <h3 class="section-title bold col-12">EXPERIENCE</h3>
                                        <h5 class="section-title col-12">I just can't get enough</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="row inner-row">
                            <div class="timeline  t-border-color col-md-12">

                                @foreach($experiences as $experience)

                                    <div class="timeline-item">
                                        <div class="timeline-point t-primary-bg"></div>
                                        <div class="timeline-content-wrapper" data-aos="fade-left">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="timeline-timeframe">
                                                        {{ $experience->from }} &ndash; {{ $experience->to}}
                                                    </div>
                                                    <h3 class="timeline-heading">
                                                        {{ $experience->title }}
                                                    </h3>
                                                    <h4 class="timeline-title">
                                                        {{ $experience->position }}
                                                    </h4>
                                                    <div class="timeline-location">
                                                        {{ $experience->location }}
                                                    </div>
                                                </div>
                                                <div class="col-md-7" style="color: #c1c1c1;">
                                                    {!! $experience->text !!}
                                                </div>
                                            </div>
                                            <!-- /o-grid -->
                                        </div>
                                        <!-- /o-content -->
                                    </div>

                                @endforeach

                                <!-- /c-timeline__item -->
                                <div class="timeline-end t-border-color"></div>
                            </div>
                            <!-- /c-timeline -->
                        </div>
                    </div>
                </div>
            </section>