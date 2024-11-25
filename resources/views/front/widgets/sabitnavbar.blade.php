<nav class="navbar navbar-expand-md" style="height: 56px;"></nav>
{{-- **
    * To make Breadcrumb visible
    * --}}

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark pb-0" style="background-color: black!important">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="	{{ asset('back/') }}/img/sitelogo.jpg" alt="" height="60" class=" rounded">
    </a>


    {{-- BREADCRUMB --}}
    <div class="">
        <ol class="breadcrumb bg-dark " style="background-color: black!important">
            <li class="breadcrumb-item">
                <svg class="breadcrumb-item-white" width="17px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="white" aria-hidden="true" class=" h-4 w-4 text-foreground-02">
                    <path
                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                    </path>
                    <path
                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                    </path>
                </svg>
                <a class="text-white" href="#">Ana Sayfa</a>
            </li>
            @if ($ReqSeg1 = Request::segment(1))
                <li class="breadcrumb-item breadcrumb-item-white" aria-current="page">
                    @if ($ReqSeg1 == 'fon')
                        <a class="text-white" href="#">Fonlar</a>
                </li>
                @if ($ReqSeg2 = Request::segment(2))
                    <li class="breadcrumb-item breadcrumb-item-white">
                        <a href="./{{ $fon->code }}" class="text-white">
                            {{ $ReqSeg2 }}
                        </a>
                    </li>
                @endif
            @endif
            @endif
        </ol>
    </div>
    <div id="main-nav" class="collapse navbar-collapse justify-content-center">
        <ul class="nav nav-tabs btn-group btn-group-toggle float-left w-100" role="tablist">
            <li role="presentation" class="active border ml-5 mr-2 w-15 ml-0 d-flex"><a
                    class="btn btn-sm btn-dark btn-simple active" href="#fonbilgiaa"
                    style="background-color: rgba(133, 135, 150, 0.5)!important;" aria-controls="home" role="tab"
                    data-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        fill="white" viewBox="0 0 256 256" class="text-fg-01 opacity-80">
                        <path
                            d="M128,24C74.17,24,32,48.6,32,80v96c0,31.4,42.17,56,96,56s96-24.6,96-56V80C224,48.6,181.83,24,128,24Zm80,104c0,9.62-7.88,19.43-21.61,26.92C170.93,163.35,150.19,168,128,168s-42.93-4.65-58.39-13.08C55.88,147.43,48,137.62,48,128V111.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64Zm-21.61,74.92C170.93,211.35,150.19,216,128,216s-42.93-4.65-58.39-13.08C55.88,195.43,48,185.62,48,176V159.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64V176C208,185.62,200.12,195.43,186.39,202.92Z">
                        </path>
                    </svg>
                    <div>Günlük</div>
                </a>
            </li>
            <li role="presentation" class="mx-2 w-15 border d-flex"><a class="btn btn-sm btn-dark btn-simple"
                    href="#Kiyas" aria-controls="profile" role="tab" data-toggle="tab"><svg
                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                        class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                        <path
                            d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                    </svg>
                    <div class="text-white">Kıyas</div>
                </a>
            </li>
            <li role="presentation" class="mx-2 w-15 border d-flex"><a class="btn btn-sm btn-dark btn-simple"
                    href="#Analiz" aria-controls="profile" role="tab" data-toggle="tab"><svg
                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                        viewBox="0 0 256 256" class="text-fg-01 opacity-50">
                        <path d="M160,128a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z" opacity="0.2"></path>
                        <path
                            d="M232,120h-8.34A96.14,96.14,0,0,0,136,32.34V24a8,8,0,0,0-16,0v8.34A96.14,96.14,0,0,0,32.34,120H24a8,8,0,0,0,0,16h8.34A96.14,96.14,0,0,0,120,223.66V232a8,8,0,0,0,16,0v-8.34A96.14,96.14,0,0,0,223.66,136H232a8,8,0,0,0,0-16Zm-96,87.6V200a8,8,0,0,0-16,0v7.6A80.15,80.15,0,0,1,48.4,136H56a8,8,0,0,0,0-16H48.4A80.15,80.15,0,0,1,120,48.4V56a8,8,0,0,0,16,0V48.4A80.15,80.15,0,0,1,207.6,120H200a8,8,0,0,0,0,16h7.6A80.15,80.15,0,0,1,136,207.6ZM128,88a40,40,0,1,0,40,40A40,40,0,0,0,128,88Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,152Z">
                        </path>
                    </svg>
                    <div class="text-white">Analiz</div>
                </a>
            </li>

        </ul>
        {{-- * HAMBURGER MENU ON MOBILE --}}

    </div>
    <div><button type="button" class="navbar-toggler collapsed border-dark" data-toggle="collapse"
            data-target="#main-nav">
            <span class="menu-icon-bar">
                <img src="{{ asset('back/') }}/img/hamburger-menu.png" alt="" height="35">
            </span>
        </button></div>

</nav>
<!-- Page Wrapper -->
<div id="wrapper" style="margin-left: 77px">



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column bg-dark-mode">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active " id="fonbilgiaa">
                @include('front.widgets.fixedarkasi')
                @if (Request::segment(1) == 'etf')
                    ETF > Günlük
                @elseif (Request::segment(1) == 'byf')
                    BYF > Günlük
                    @include('front.sidebartabs.byf.byf')
                @elseif (Request::segment(1) == 'fons' )
                    FON > Günlük
                @elseif(Request::segment(1) == 'cr')
                    CR > Günlük
                @elseif(Request::segment(1) == 'stc')
                    STC > Günlük
                @elseif(Request::segment(1) == null)
                    HOMEPAGE > Günlük
                @else
                    {{ Str::upper(Request::path()) }} > Günlük
                @endif


            </div>
            <div role="tabpanel" class="tab-pane" id="Kiyas">
                {{-- SAYFA ARKASI FIXED BOŞLUK --}}
                @include('front.widgets.fixedarkasi')
                Kıyas <br><br><br><br>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum sit amet risus sed
                    ultricies. Quisque congue leo ante, efficitur finibus dui lobortis nec. Pellentesque eu enim
                    eleifend, tristique nisi ac, tempus sapien. Pellentesque habitant morbi tristique senectus et netus
                    et malesuada fames ac turpis egestas. Vestibulum gravida in velit nec pharetra. Sed ultrices diam
                    nec justo tincidunt, nec sollicitudin est facilisis. Duis sem nisi, volutpat nec tellus quis,
                    finibus euismod justo. Nulla luctus elit sed neque luctus, eget scelerisque ex tincidunt. Aliquam
                    dignissim ante non turpis facilisis, vel finibus enim eleifend. Aliquam interdum felis ex.

                    Aenean porta commodo venenatis. Etiam luctus, velit non efficitur malesuada, elit mauris aliquet
                    ante, pulvinar lobortis est elit ut mi. Nulla non lacinia nibh. Nunc quis nulla dignissim, interdum
                    erat sed, lobortis ex. In suscipit euismod feugiat. Mauris vitae metus eu massa molestie ultricies a
                    sit amet tellus. Nullam vitae commodo lectus. Duis at faucibus dui. Vestibulum ante ipsum primis in
                    faucibus orci luctus et ultrices posuere cubilia curae; Orci varius natoque penatibus et magnis dis
                    parturient montes, nascetur ridiculus mus. Morbi luctus libero et faucibus aliquet. Duis luctus
                    fermentum hendrerit. Mauris condimentum dui ipsum, ac tempor dui placerat vitae. Suspendisse vitae
                    finibus elit. Vestibulum varius nibh ornare semper fringilla.

                    Sed vel malesuada risus, et hendrerit massa. Suspendisse sed pharetra sapien. Etiam laoreet
                    malesuada diam in malesuada. Nam fermentum at mauris eget porttitor. Proin consequat semper orci,
                    nec iaculis elit volutpat eu. Sed egestas sodales pharetra. Nullam pharetra congue neque, ut
                    consectetur urna venenatis id. Sed ligula magna, consequat a arcu varius, efficitur congue neque.
                    Aenean sed leo tristique, consectetur elit nec, tincidunt nulla. Pellentesque vehicula, purus ac
                    feugiat tincidunt, dui quam egestas turpis, nec ornare lacus nisl nec dui. In pellentesque viverra
                    congue.

                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="Analiz">
                {{-- SAYFA ARKASI FIXED BOŞLUK --}}
                @if (Request::segment(1) == 'etf')
                    ETF > Analiz
                @elseif (Request::segment(1) == 'byf')
                    BYF > Analiz
                @elseif (Request::segment(1) == 'fon')
                    @include('front.widgets.fon')
                    {{-- {{ ['App\Http\Controllers\FonController'::class, showFon()] }} --}}
                    {{-- {{ to_route('fon', ['fon_code' => 'IPB']) }} --}}
                    {{-- @include('fon', ['fon_code' => 'IPB']) --}}
                    {{-- {{ App\Http\Controllers\FonController::showFon('IPB') }} --}}
                @elseif(Request::segment(1) == 'cr')
                    CR > Analiz
                @elseif(Request::segment(1) == 'stc')
                    STC > Analiz
                @elseif(Request::segment(1) == null)
                    HOMEPAGE > Analiz
                @else
                    {{ Str::upper(Request::path()) }} > Analiz
                @endif
            </div>
        </div>

        <!-- Main Content -->
        <script>
            $(document).ready(function() {
                // Buton grubundaki butonlara tıklama olayı ekle
                $('#button-group .btn').click(function() {
                    // Tıklanan butonun ID'sini al (grafik türünü belirtmek için)
                    var chartType = $(this).attr('id');

                    // Önce mevcut aktif durumu kaldır, sonra tıklanan butonu aktif yap
                    $('#button-group .btn').removeClass('active');
                    $(this).addClass('active');
                });
            });
        </script>
