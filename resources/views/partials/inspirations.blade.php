<section class="dark-bg" id="inspirations">
                <div class="row outer-row">
                    <div class="col-md-4 col-sm-12 left-box">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-right">
                                <div class="section-title-wrapper col-md-12 no-padding">
                                    <div class="col-md-12 no-padding" data-aos="fade-right">
                                        <h3 class="section-title bold col-12">INSPIRATIONS</h3>
                                        <h5 class="section-title col-12">They are what I strive to be</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="row inner-row">
                            <div class="col-md-12 text-center light"><h3 class="p-30-bottom">Hover or click us, we talk!</h3></div>

                            @foreach($inspirations as $inspiration)

                                <div class="col-md-6 col-sm-6 col-12 text-center float-left" data-aos="fade-up">
                                    <img class="align-self-center img-fluid inspiration-picture" src="media/{{ $inspiration->image }}" alt="{{ $inspiration->name }}" data-toggle="tooltip" offset="20" data-placement="top" data-html="true" title="{{ $inspiration->speech_bubble }}">

                                    <h6 class="red inspiration-name">{{ $inspiration->name }}</h6>
                                </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </section>