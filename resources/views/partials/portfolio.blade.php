
<section class="light-bg end-section" id="portfolio">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="dark">PORTFOLIO</h2>
                    </div>
                    <!-- <div class="col-md-12 text-center" style="margin-bottom:50px; margin-top:50px;">
                        <button type="button" class="button active">All</button>
                        <button type="button" class="button">Web</button>
                        <button type="button" class="button">Android</button>
                        <button type="button" class="button">Design</button>
                    </div> -->

                    <div class="col-md-12 text-center" style="margin-bottom:50px; margin-top:50px;">
                        <form action="">
                            <fieldset>
                                <input type="radio" value="all" name="category" id="all" checked>
                                <label for="all">All</label>

                                <input type="radio" value="web" name="category" id="web">
                                <label for="web">Web</label>

                                <input type="radio" value="android" name="category" id="android">
                                <label for="android">Android</label>

                                <input type="radio" value="design" name="category" id="design">
                                <label for="design">Design</label>
                            </fieldset>
                        </form>
                    </div>

                    <div class="col-md-12">
                        <div class="row" id="projectrow">

                            @include('partials.test')


                        </div>
                    </div>
                    <div class="col-md-12 text-center p-50-top">
                        <a href="https://github.com/Albyzai" class="thumbnail-button big-button">See more on GitHub<i class="fab fa-github-alt"></i></a>
                    </div>
                </div>
            </section>
            <div class="end">

            </div>

            <script>
                $('input[name="category"]').on('change', function(e){

                    var cat_id = e.target.value;

                    console.log(cat_id)

                    $.ajax({
                        type: 'get',
                        dataType: 'html',
                        url: 'filter/' + cat_id,
                        success: function(response){
                            $('#projectrow').html(response);
                        }
                    })

                    // $.get('category?cat_id=' + cat_id, function(data){
                    //     $.each(data, function(index, x){

                    //     })
                    // })
                })

            </script>