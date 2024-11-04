<nav class="navbar navbar-expand-md" style="height: 56px;"></nav>
{{-- **
    * To make Breadcrumb visible
    * --}}

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary pb-1">

    {{-- * HAMBURGER MENU ON MOBILE --}}
    <button type="button" class="navbar-toggler collapsed border-dark" data-toggle="collapse" data-target="#main-nav">
        <span class="menu-icon-bar">
            <img src="{{ asset('back/') }}/img/hamburger-menu.svg" alt="" height="35">
        </span>
    </button>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="	{{ asset('back/') }}/img/sitelogo.jpg" alt="" height="60" class=" rounded">
    </a>
    {{-- BREADCRUMB --}}
    <div class="">
        <ol class="breadcrumb bg-primary">
            <li class="breadcrumb-item">
                <svg class="breadcrumb-item-white" width="17px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="black" aria-hidden="true" class=" h-4 w-4 text-foreground-02">
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
        <ul class="nav w-100">
            {{-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li> --}}
            <li class="nav-item dropdown border ml-5 mr-2 w-15 ml-0 d-flex ">
                <a href="#"
                    class="nav-tabs nav-link  text-white text-center @if (Request::Segment(1) == 'fon') active @endif"
                    style="background-color: rgba(133, 135, 150, 0.5)!important;" data-toggle="dropdown" role="button"
                    aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black"
                        viewBox="0 0 256 256" class="text-fg-01 opacity-80">
                        <path
                            d="M128,24C74.17,24,32,48.6,32,80v96c0,31.4,42.17,56,96,56s96-24.6,96-56V80C224,48.6,181.83,24,128,24Zm80,104c0,9.62-7.88,19.43-21.61,26.92C170.93,163.35,150.19,168,128,168s-42.93-4.65-58.39-13.08C55.88,147.43,48,137.62,48,128V111.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64Zm-21.61,74.92C170.93,211.35,150.19,216,128,216s-42.93-4.65-58.39-13.08C55.88,195.43,48,185.62,48,176V159.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64V176C208,185.62,200.12,195.43,186.39,202.92Z">
                        </path>
                    </svg>
                    <div @if (Request::Segment(1) == 'fon') style="color: black" @endif >Fonlar</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-center">
                    <li>
                        <a href="{{ route('fon', ['code' => 'IPB']) }}" class="dropdown-item">
                            IPB
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fon', ['code' => 'IIH']) }}" class="dropdown-item">
                            IIH
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown mx-2 w-15 border d-flex  ">
                <a href="#" class="nav-tabs nav-link text-dark text-center" data-toggle="dropdown" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black"
                        class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                        <path
                            d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                    </svg>
                    <div>Genel</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-center">
                    <li>
                        <a href="#" class="dropdown-item">
                            Sekme 2.1
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">
                            Sekme 2.2
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">
                            Sekme 2.3
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown mx-2 w-15 border d-flex ">
                <a href="#" class="nav-tabs nav-link text-dark text-center " data-toggle="dropdown"
                    role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black"
                        viewBox="0 0 256 256" class="text-fg-01 opacity-50">
                        <path d="M160,128a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z" opacity="0.2"></path>
                        <path
                            d="M232,120h-8.34A96.14,96.14,0,0,0,136,32.34V24a8,8,0,0,0-16,0v8.34A96.14,96.14,0,0,0,32.34,120H24a8,8,0,0,0,0,16h8.34A96.14,96.14,0,0,0,120,223.66V232a8,8,0,0,0,16,0v-8.34A96.14,96.14,0,0,0,223.66,136H232a8,8,0,0,0,0-16Zm-96,87.6V200a8,8,0,0,0-16,0v7.6A80.15,80.15,0,0,1,48.4,136H56a8,8,0,0,0,0-16H48.4A80.15,80.15,0,0,1,120,48.4V56a8,8,0,0,0,16,0V48.4A80.15,80.15,0,0,1,207.6,120H200a8,8,0,0,0,0,16h7.6A80.15,80.15,0,0,1,136,207.6ZM128,88a40,40,0,1,0,40,40A40,40,0,0,0,128,88Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,152Z">
                        </path>
                    </svg>
                    <div class="">Analiz</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-center">
                    <li>
                        <a href="#" class="dropdown-item">
                            Sekme 3.1
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">
                            Sekme 3.2
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">
                            Sekme 3.3
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</nav>
{{-- ESKI FIXED BAR --}}
{{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark margin-top flex-end">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <ol class="breadcrumb bg-dark">
        <li class="breadcrumb-item">
            <svg class="breadcrumb-item-white" width="17px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor" aria-hidden="true" class="flex-shrink-0 h-4 w-4 text-foreground-02">
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
                            <a href="./{{$fon->code}}" class="text-white">
                                {{ $ReqSeg2 }}
                            </a>
                        </li>
                    @endif
                @endif
        @endif
    </ol>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>
        </ul>
        
    </div>
</nav> --}}
