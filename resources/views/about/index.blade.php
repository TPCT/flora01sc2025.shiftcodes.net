@extends('layout.index')

@section('title')
About_Us

@endsection


@section('main')

<main id="AboutUs">

    <!-- Start Know Section -->
    <section class="know-section py-5">
        <div class="container">
            <div class="main-head text-center ">
                <h1>
                    FAQ
                </h1>
            </div>
            <div class="row">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">

                                what is XVideoSharing?

                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">XVideoSharing is a video hosting provider. We offer online
                                storage, sophisticated uploading and video streaming tools. With XVideoSharing you
                                can host your videos and play them online from browser / mobile devices.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">

                                why should i use XVideoSharing?

                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Whenever you need to share a video, XVideoSharing can help.
                                We optimize quality / size of your videos and make them playable in web player. So
                                you can start watching video quickly without downloading whole file.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Can I search for files other people uploaded?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, you can Search for other video files that were marked
                                as Public.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">

                                What kind of files can ve i uploaded?

                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">All video format files.
                                The only restrictions are for copyrighted material, pornography, nudity and any kind
                                offensive material.
                                Please refer to our <a class="linkColor" href="">TOS</a> for more info on
                                XVideoSharing terms of service.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">

                                How to delete a file I uploaded?

                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">To delete a file you uploaded you can use Delete Link that
                                was provided to you after the upload proccess or delete it from My Videos page.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">

                                Can I hotlink the stuff i upload?

                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">No. Hotlinking is not allowed on any kind of files uploaded
                                to our servers.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">

                                I still have questions!

                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Don't hesitate to contact us using our <a class="linkColor"
                                    href="">contact form</a>.</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Know Section -->

</main>

@endsection
