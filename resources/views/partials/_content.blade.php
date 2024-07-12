<!--begin::Entry-->
<div class="d-flex flex-column-fluid">

    <!--begin::Container-->
    <div class="container">

        <!--[html-partial:begin:{"id":"demo1/dist/inc/view/demos/pages/index","page":"index"}]/-->

        <!--[html-partial:begin:{"id":"demo1/dist/inc/view/partials/content/dashboards/demo1","page":"index"}]/-->

        <!--begin::Dashboard-->
        {{-- @if (Auth::user()->Role == 'SuperAdmin') --}}
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-primary opacity-50">
                        {{-- <a href="{{route('qrcodegenrated.riders')}}"> --}}
                        <a href="{{route('specialist.index')}}">
                            <div class="card-body">
                                <h4 class="card-title text-light">Total Specialist</h4>
                                {{-- <p class="card-text">{{$totalnoofqrcodegenrate}}</p> --}}
                                <p class="card-text text-center text-light">{{$totalspecialist}}</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-primary opacity-50">
                        {{-- <a href="{{route('qrcodenotgenrated.riders')}}"> --}}
                            <a href="{{route('doctor.index')}}">
                                <div class="card-body">
                                    <h4 class="card-title text-light">Total Doctors</h4>
                                    {{-- <p class="card-text">{{$totalnoofqrcodegenrate}}</p> --}}
                                    <p class="card-text text-center text-light">{{$totaldoctors}}</p>
                                </div>
                            </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-primary opacity-50">
                        {{-- <a href="{{route('qrcodenotgenrated.riders')}}"> --}}
                            <a href="{{route('appoinment.index')}}">
                                <div class="card-body">
                                    <h4 class="card-title text-light">Appoinments</h4>
                                    {{-- <p class="card-text">{{$totalnoofqrcodegenrate}}</p> --}}
                                    <p class="card-text text-center text-light">{{$totalappoinments}}</p>
                                </div>
                            </a>
                    </div>
                </div>

                {{-- <div class="col-md-3">
                    <div class="card">
                        <a href="">
                            <div class="card-body">
                                <h4 class="card-title">CheckIn</h4>
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                </div> --}}
            </div>
            <br>
            <div class="row">
                {{-- <div class="col-md-3">
                    <div class="card">
                        <a href="">
                            <div class="card-body">
                                <h4 class="card-title">Gulf Goodie Bags</h4>
                                <p class="card-text">45</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <a href="">
                            <div class="card-body">
                                <h4 class="card-title">CheckIn</h4>
                                <p class="card-text">20</p>
                            </div>
                        </a>
                    </div>
                </div> --}}

                <!-- <div class="col-md-3">
                <div class="card">
                <div class="card-body">
                <h4 class="card-title">Check In</h4>
                <p class="card-text">Content for Card 3 goes here.</p>
                </div>
                </div>
                </div> -->

                {{-- <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Check Out</h4> --}}
                {{-- <p class="card-text">{{@$checkedOutListCount}}</p> --}}
                {{-- <p class="card-text">50</p>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
        {{-- @endif --}}
        <!--end::Dashboard-->

        <!--[html-partial:end:{"id":"demo1/dist/inc/view/partials/content/dashboards/demo1","page":"index"}]/-->

        <!--[html-partial:end:{"id":"demo1/dist/inc/view/demos/pages/index","page":"index"}]/-->
    </div>

    <!--end::Container-->
</div>

<!--end::Entry-->

<!-- Modal-->
<div class="modal fade" id="claimpopup" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="claimpopup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Claim Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>The amount of <strong>$250.00</strong> will be deducted from your Current Balance.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold"
                    data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary font-weight-bold">Claim Now</button>
            </div>
        </div>
    </div>
</div>
