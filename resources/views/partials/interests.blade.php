<section class="light-bg" id="interests">
                <div class="row outer-row">
                    <div class="col-md-4 col-sm-12 left-box">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-right">
                                <div class="section-title-wrapper col-md-12 no-padding">
                                    <div class="col-md-12 no-padding" data-aos="fade-right">
                                        <h3 class="section-title bold col-12">HOBBIES & INTERESTS</h3>
                                        <h5 class="section-title col-12">A part of what defines me</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="row inner-row interest-row">


                            @foreach($interests as $interest)

                                <div class="col-md-4 col-6 interest" data-aos="fade-up">
                                    <div class="interest-content-wrapper">
                                        <div class="col-md-12 no-padding"><span class="{{ $interest->icon }} interest-icon"></span></div>
                                        <div class="col-md-12 no-padding"><span>{{ $interest->title }}</span></div>
                                    </div>
                                </div>

                            @endforeach



                        </div>
                    </div>
                </div>
            </section>