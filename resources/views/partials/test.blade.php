@foreach($projects as $project)
                            <div class="col-md-6 col-sm-10 mx-auto portfolio-thumbnailwrapper" data-aos="fade-up">
                                <div class="col-md-12 mx-auto">
                                    <figure>
                                        <img src="media/{{ $project->image }}" alt="{{ $project->title }}" class="portfolio-thumbnail">
                                        <figcaption>
                                            <h3>{{ $project->title }}</h3>
                                            <h6>{{ $project->caption }}</h6>
                                            <div>
                                                <a href="{{ $project->link }}"><button class="thumbnail-button">Visit Site <i class="fas fa-globe"></i></button></a>
                                                <!-- <button class="thumbnail-button d-none d-md-inline">Read More <i class="fas fa-angle-right"></i></button> -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
@endforeach