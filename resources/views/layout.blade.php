<!--begin::Main-->
@include("partials/_header-mobile")
<div class="d-flex flex-column flex-root">
    {{-- <h1>abc</h1> --}}
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        @include("partials/_aside")
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include("partials/_header")
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                @include("partials/_subheader/subheader-v1")
                @include("partials/_content")
            </div>
            <!--end::Content-->
            @include("partials/_footer")
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->