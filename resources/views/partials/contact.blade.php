<section  style="" id="contact">
                <div class="row" id="contact">

                    <div class="col-md-12 text-center">
                        <h6 class="contact-title">GET IN TOUCH</h6>
                    </div>





                    <form class="col-md-12" method="POST" action="/">
                        {{ csrf_field() }}

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="col-10 col-md-5 form-wrapper">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                </div>
                            </div>

                            <div class="col-10 col-md-5 form-wrapper">
                                <textarea type="text" class="form-control" id="message" placeholder="Enter message" name="message" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <button type="submit" class="button active">Send Message</button>
                            </div>
                        </div>

                    </form>


                    <!-- <form class="col-md-12" action="/">
                        {{csrf_field()}}

                        <div class="row justify-content-center">
                            <div class="col-10 col-md-5 form-wrapper">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="email" placeholder="Enter email" required>
                                </div>
                            </div>

                            <div class="col-10 col-md-5 form-wrapper">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" placeholder="Enter message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="button active">Send Message</button>
                        </div>
                    </form> -->
                </div>
            </section>