
<nav class="navbar navbar-dark bg-dark  pb-5 pt-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
     <ol class="breadcrumb bg-dark">
        {{-- <li class="breadcrumb-item">
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
        @endif --}}
    </ol> 
</nav>

<!-- Topbar -->

<nav class="navbar navbar-expand navbar-light bg-dark topbar pb-5  mb-4 static-top shadow">

    <div class="d-sm-flex align-items-center  mb-4">
        <div>
            <svg class="breadcrumb-item-white" width="100px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor" aria-hidden="true" class="flex-shrink-0 h-4 w-4 text-foreground-02">
                <path
                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                </path>
                <path
                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                </path>
            </svg>
        </div>
        <div>
            
            <h1 class="h2 mb-0 text-white">{{$fon->code}}</h1>
            <h2 class="h4 mb-1 " style="color: #e3dedeb3">{{$fon->name}}</h2>
            <div class="container mx-auto px-4 md:px-0 overflow-x-auto overflow-y-hidden">
                <nav class="flex" aria-label="Tabs">
                    <a class="whitespace-nowrap text-foreground-02 text-white hover:foreground-01 py-4 px-4 text-sm relative border-b-2 border-transparent hover:border-stroke-02 font-medium hover:text-foreground-01 flex items-center !text-foreground-01 !border-shared-brand-solid-01" href="/fon/{{$fon->code}}">Özet Rapor</a>
                    <a class="whitespace-nowrap text-foreground-02 text-white hover:foreground-01 py-4 px-4 text-sm relative border-b-2 border-transparent hover:border-stroke-02 font-medium hover:text-foreground-01 flex items-center" href="/fon/{{$fon->code}}/portfoy">Hisse Portföyü</a>
                    <a class="whitespace-nowrap text-foreground-02 text-white hover:foreground-01 py-4 px-4 text-sm relative border-b-2 border-transparent hover:border-stroke-02 font-medium hover:text-foreground-01 flex items-center" href="/fon/{{$fon->code}}/akis">Akış</a>
                    <a class="whitespace-nowrap text-foreground-02 text-white hover:foreground-01 py-4 px-4 text-sm relative border-b-2 border-transparent hover:border-stroke-02 font-medium hover:text-foreground-01 flex items-center" href="/fon/{{$fon->code}}/rakip-analizi">Rakip Analizi</a>
                </nav>
            </div>
        </div>
    </div>
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Alerts -->
        <li class="nav-item  no-arrow mx-1">
            <div>
                <div class="text-foreground-03 text-sm  " style="color: #e3dedeb3">{{ strftime('%e %B %Y', strtotime($time)) }}</div>
                <div class="text-2xl font-semibold text-white">
                    <span class="inline-flex items-center tabular-nums">{{ $fonPrice }}</span>
                </div>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - Messages -->
        <li class="nav-item  mx-1 show">
            <div class="text-foreground-03 text-sm text-white">1 Aylık Getiri</div>
                <div class="text-2xl font-semibold " style="color: #e3dedeb3">
                    <span class="inline-flex items-center tabular-nums">%{{ $fonPriceDiffs['1Month'] }}</span>
                </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <div class="text-foreground-03 text-sm text-white">3 Aylık Getiri</div>
                <div class="text-2xl font-semibold" style="color: #e3dedeb3">
                    <span class="inline-flex items-center tabular-nums">%{{ $fonPriceDiffs['3Month'] }}</span>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->