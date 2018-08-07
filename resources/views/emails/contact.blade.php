<html>

<head>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>


body {
    position: relative;
    background-image: url(data:image/png;base64,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);
    ;
    background-color: #c1c1c1;
    padding-left: 0;
    padding-right: 0;
}

body:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;

    background: -moz-linear-gradient(top, rgba(43, 42, 48, 1) 0%, rgba(43, 42, 48, 0.99) 15%, rgba(43, 42, 48, 0.98) 23%, rgba(45, 44, 50, 0.98) 24%, rgba(91, 89, 92, 0.85) 43%, rgba(157, 152, 151, 0.7) 70%, rgba(230, 223, 217, 0) 100%);
    background: -webkit-linear-gradient(top, rgba(43, 42, 48, 1) 0%, rgba(43, 42, 48, 0.99) 15%, rgba(43, 42, 48, 0.98) 23%, rgba(45, 44, 50, 0.98) 24%, rgba(91, 89, 92, 0.85) 43%, rgba(157, 152, 151, 0.7) 70%, rgba(230, 223, 217, 0) 100%);
    background: linear-gradient(to top, rgba(43, 42, 48, 1) 0%, rgba(43, 42, 48, 0.99) 15%, rgba(43, 42, 48, 0.98) 23%, rgba(45, 44, 50, 0.98) 24%, rgba(91, 89, 92, 0.85) 43%, rgba(157, 152, 151, 0.7) 70%, rgba(230, 223, 217, 0) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2b2a30', endColorstr='#00e6dfd9', GradientType=0);
}

h1, h2, h3, h4, h5, h6, p{
    color: #c1c1c1 !important;
}

.light-bg {
    background: #c1c1c1;
}

.light-bg-end{
    background: #c1c1c1;
}

.light-bg:before {
    content: '';
    position: absolute;
    z-index: 3;
    top: -50px;
    left: 50%;
    margin-left: -50px;
    height: 50px;
    width: 100px;

    border-top-left-radius: 100px;
    border-top-right-radius: 100px;
    background: #c1c1c1;
}

.light-bg .end-section:before{
    filter: none;
    box-shadow: none;
}

.dark-bg {
    background: #292727;
    color: #c1c1c1;
}

.dark-bg:before {
    content: '';
    position: absolute;
    z-index: 3;
    top: -50px;
    left: 50%;
    margin-left: -50px;
    height: 50px;
    width: 100px;

    border-top-left-radius: 100px;
    border-top-right-radius: 100px;
    background: #292727;
}

section {
        padding: 20px 0px 20px 0px !important;
}




.section-title-wrapper{
    padding-bottom:20px;
    margin-bottom:50px;
}

.light-bg .section-title-wrapper{
    border-bottom: 2px groove #292727;
    color: #292727;
}

.dark-bg .section-title-wrapper{
    border-bottom: 2px groove #c1c1c1;
    color: #c1c1c1;
}

.section-title{
    text-align:left;
}

.outer-row {
    padding-left: 30px;
    padding-right: 30px;
}

.no-padding {
    padding: 0px;
}

.bold {
    font-weight: bold;
}

a, .ii a[href]{
    text-decoration: none !important;
    color: #c1c1c1 !important;
}


</style>
</head>

    <body>
        <div class="container">
            <section class="dark-bg">
                <div class="row outer-row">
                    <div class="col-md-4 col-sm-12 left-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper col-md-12 no-padding">
                                    <div class="col-md-12 no-padding">
                                        <h5 class="section-title col-12">Customer Email</h5>
                                        <h3 class="section-title bold col-12">{{ $request->email }}</h3>
                                    </div>

                                    <div class="col-md-12 no-padding">
                                        <h5 class="section-title col-12">Customer Name</h5>
                                        <h3 class="section-title bold col-12">{{ $request->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="row inner-row">
                            <p>{{ $request->message }}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </body>

</html>