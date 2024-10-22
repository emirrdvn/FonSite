<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Ay Gün Butonları -->

    <?php
    
    echo "<script>var fonYatirimciSayisiMonthlyBarChart = $fonYatirimciSayisiMonthlyBarChart;</script>";
    echo "<script>var fonPayAdetMonthlyBarChart = $fonPayAdetMonthlyBarChart;</script>";
    echo "<script>var weightsforchart = $weightsforchart;</script>";
    echo "<script>var yedigunluk = $yedigunluk;</script>";
    echo "<script>var otuzgunluk = $otuzgunluk;</script>";
    echo "<script>var doksangunluk = $doksangunluk;</script>";
    echo "<script>var yillik = $yillik;</script>";
    echo "<script>var ucyillik = $ucyillik;</script>";
    echo "<script>var volatilityforAreaChart = $volatilityforAreaChart;</script>";
    echo "<script>var ftdforBarChartData = $ftdforBarChartData;</script>";
    
    ?>

    <!-- CHART AREA -->
    <div class="row">
        <div class="col-sm-6">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs btn-group btn-group-toggle float-left" role="tablist">
                <li role="presentation" class="active"><a class="btn btn-sm btn-dark btn-simple" href="#linebirhafta"
                        aria-controls="home" role="tab" data-toggle="tab">7G</a></li>
                <li role="presentation"><a class="btn btn-sm btn-dark btn-simple" href="#linebiray"
                        aria-controls="profile" role="tab" data-toggle="tab">1A</a></li>
                <li role="presentation"><a class="btn btn-sm btn-dark btn-simple" href="#lineucay"
                        aria-controls="profile" role="tab" data-toggle="tab">3A</a></li>
                <li role="presentation"><a class="btn btn-sm btn-dark btn-simple" href="#linebiryil"
                        aria-controls="profile" role="tab" data-toggle="tab">1Y</a></li>
                <li role="presentation"><a class="btn btn-sm btn-dark btn-simple" href="#lineucyil"
                        aria-controls="profile" role="tab" data-toggle="tab">3Y</a></li>
            </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content col-xl-9 col-lg-7">
            <div role="tabpanel" class="tab-pane active " id="linebirhafta">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="linebiray">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaAylikChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="lineucay">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaUcAylikChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="linebiryil">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaYillikChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="lineucyil">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaUcYillikChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        {{-- FON BİLGİLERİ --}}
        <div class="col-xl-3 col-lg-5">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-dark">Fon Bilgileri</h6>
                </div>
                <div class="card-body">
                    <p>{{ \Illuminate\Support\Str::limit($fon->description, 100, '...') }}</p>

                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Fon Kodu: </span>
                        <span>{{ $fon->code }}</span>
                    </div>

                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Kurucu: </span>
                        <span>{{ $fon->author }}</span>
                    </div>

                    <div class="text-center">
                        <span class="mb-0 font-weight-bold  ">Yıllık Yönetim Ücreti: </span>
                        <span>%2,10</span>
                    </div>

                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Risk Değeri: </span>
                        <span>6</span>
                    </div>

                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Alış Valörü: </span>
                        <span>1</span>
                    </div>

                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Satış Valörü:</span>
                        <span>2</span>
                    </div>
                    <div class="text-center">
                        <div class="flex py-4">
                            <span
                                class="inline-flex items-center rounded-full font-medium mr-1 bg-shared-success-adaptive-02 text-foreground-01 px-2.5 py-1 text-sm">
                                @if ($fon->active == 1)
                                    <svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" class="mr-1 w-3.5 h-3.5">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-success font-weight-bold">
                                        TEFAS'ta İşleme Açık
                                    </span>
                                @else
                                    <span class="text-danger font-weight-bold">
                                        TEFAS'ta İşleme Kapalı
                                    </span>
                                @endif
                            </span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- FON TOPLAM DEĞER -->
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">Fon Toplam Değer</h6>
                </div>
                <div class="card-body">
                    <p>{{ number_format(floatval(str_replace(',', '.', $fonPrice)) * $fonPayAdet, 2, '.', ',') }} ₺
                    </p>
                    <div class="chart-bar">
                        <canvas id="FonToplamDegerBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        {{-- YATIRIMCI SAYISI --}}
        <div class="col-lg-3 col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">Yatırımcı Sayısı</h6>
                </div>
                <div class="card-body">
                    <p>{{ number_format($fonYatirimciSayisi, 0, '.', ',') }}</p>
                    <div class="chart-bar">
                        <canvas id="YatirimciBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        {{-- DOLAŞIMDAKİ PAY ADETİ --}}
        <div class="col-lg-3 col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">Dolaşımdaki Pay Adedi</h6>
                </div>
                <div class="card-body">
                    <p>{{ number_format($fonPayAdet, 0, '.', ',') }}</p>
                    <div class="chart-bar">
                        <canvas id="PayAdetBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        {{-- HACİM BİLGİLERİ  --}}
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-dark">Hacim Bilgileri</h6>
                </div>
                <div class="card-body">
                    <div class="divide-y divide-stroke-01">
                        <div class="flex justify-between items-center h-9 space-x-4 text-sm">
                            <span class="text-foreground-03 text-dark">Toplam Adet:</span>
                            <span class="float-right text-foreground-02 truncate">18,75 mr</span>
                        </div>
                        <div class="flex justify-between items-center h-9 space-x-4 text-sm">
                            <span class="text-foreground-03 text-dark">Aktif Adet:</span>
                            <span class="float-right text-foreground-02 truncate">7,68 mr</span>
                        </div>
                        <div class="flex justify-between items-center h-9 space-x-4 text-sm">
                            <span class="text-foreground-03 text-dark">Doluluk Oranı:</span>
                            <span class="float-right text-foreground-02 truncate">%40,96</span>
                        </div>
                        <div class="flex justify-between items-center h-9 space-x-4 text-sm">
                            <span class="text-foreground-03 text-dark">Pazar Payı:</span>
                            <span class="float-right text-foreground-02 truncate">%7,84</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ŞİRKETLER STATİK --}}
    <div class="row">
        <div class="col-xl-9 ">

            <div class="row ">
                <div class="col-lg-3 col-md-4">
                    <div
                        class="card rounded-lg overflow-hidden mb-4 md:mb-0 bg-background-adaptive-01 border border-stroke-01">
                        <div
                            class="card-header text-dark font-weight-bold mb-3 font-bold py-3 px-4 text-foreground-01">
                            En
                            Büyük Pozisyonlar</div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/ALARK">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img alt="Alarko Holding A.Ş. Şirket Logosu"
                                                data-state="closed" loading="lazy" width="28" height="28"
                                                decoding="async" data-nimg="1" class="rounded sheadow-lg"
                                                style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/alarko_icon.png">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">ALARK</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:09:43</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">83,20</span></div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-success-solid-01">0,60</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/YKBNK">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img
                                                alt="Yapı ve Kredi Bankası A.Ş. Şirket Logosu" data-state="closed"
                                                loading="lazy" width="28" height="28" decoding="async"
                                                data-nimg="1" class="rounded sheadow-lg" style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/ykbnk_icon.jpg">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">YKBNK</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:09:42</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">25,34</span></div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-danger-solid-01">-0,39</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/SAHOL">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img
                                                alt="Hacı Ömer Sabancı Holding A.Ş. Şirket Logosu" data-state="closed"
                                                loading="lazy" width="28" height="28" decoding="async"
                                                data-nimg="1" class="rounded sheadow-lg" style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/sahol_icon.png">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">SAHOL</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:09:39</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">86,85</span></div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-danger-solid-01">-0,57</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div
                        class="card rounded-lg overflow-hidden mb-4 md:mb-0 bg-background-adaptive-01 border border-stroke-01">
                        <div
                            class="card-header text-dark font-weight-bold mb-3 font-bold py-3 px-4 text-foreground-01">
                            Yakın
                            Zamanda Artırılanlar</div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/AKBNK">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img alt="Akbank T.A.Ş. Şirket Logosu"
                                                data-state="closed" loading="lazy" width="28" height="28"
                                                decoding="async" data-nimg="1" class="rounded sheadow-lg"
                                                style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/akbnk_icon.png">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">AKBNK</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:12:12</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">53,20</span></div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-danger-solid-01">-1,30</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/YKBNK">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img
                                                alt="Yapı ve Kredi Bankası A.Ş. Şirket Logosu" data-state="closed"
                                                loading="lazy" width="28" height="28" decoding="async"
                                                data-nimg="1" class="rounded sheadow-lg" style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/ykbnk_icon.jpg">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">YKBNK</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:12:11</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">25,32</span></div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-danger-solid-01">-0,47</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/ALARK">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img alt="Alarko Holding A.Ş. Şirket Logosu"
                                                data-state="closed" loading="lazy" width="28" height="28"
                                                decoding="async" data-nimg="1" class="rounded sheadow-lg"
                                                style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/alarko_icon.png">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">ALARK</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:12:04</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">83,30</span></div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-success-solid-01">0,73</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div
                        class="card rounded-lg overflow-hidden mb-4 md:mb-0 bg-background-adaptive-01 border border-stroke-01">
                        <div
                            class="card-header text-dark font-weight-bold mb-3 font-bold py-3 px-4 text-foreground-01">
                            Yakın
                            Zamanda Azaltılanlar</div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/BTCIM">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img
                                                alt="Batıçim Batı Anadolu Çimento Sanayii A.Ş. Şirket Logosu"
                                                data-state="closed" loading="lazy" width="28" height="28"
                                                decoding="async" data-nimg="1" class="rounded sheadow-lg"
                                                style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/BTCIM.png">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">BTCIM</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:12:37</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">148,90</span>
                                        </div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-success-solid-01">0,88</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/BSOKE">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img
                                                alt="Batısöke Söke Çimento Sanayii T.A.Ş. Şirket Logosu"
                                                data-state="closed" loading="lazy" width="28" height="28"
                                                decoding="async" data-nimg="1" class="rounded sheadow-lg"
                                                style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/BSOKE.png">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">BSOKE</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:12:33</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">50,50</span></div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-danger-solid-01">-0,20</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                                href="/sirketler/AEFES">
                                <div class="py-1.5 px-4 flex justify-between items-center">
                                    <div class="w-28">
                                        <div class="flex space-x-1.5"><img
                                                alt="Anadolu Efes Biracılık ve Malt Sanayii A.Ş. Şirket Logosu"
                                                data-state="closed" loading="lazy" width="28" height="28"
                                                decoding="async" data-nimg="1" class="rounded sheadow-lg"
                                                style="color:transparent"
                                                src="https://storage.fintables.com/media/uploads/company-logos/AEFES.png">
                                            <div class="h-[28px]">
                                                <div class="text-foreground-01 text-sm mt-[-3px]">AEFES</div>
                                                <div class="text-foreground-03 text-[10px] -mt-0.5">11:12:36</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm tabular-nums flex flex-col items-end">
                                        <div><span class="inline-flex items-center tabular-nums">182,40</span>
                                        </div>
                                        <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                                class="inline-flex items-center tabular-nums"><span
                                                    class="text-xs text-foreground-03 mr-1">%</span><span
                                                    class="text-shared-danger-solid-01">-0,87</span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- GETİRİ BİLGİLERİ --}}
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <h4 class="m-0 font-weight-bold text-dark">Getiri Bilgileri</h6>
                </div>
                <div class="card-body ">
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">1 Ay: </span>
                        <span>%{{ $fonPriceDiffs['1Month'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">3 Ay: </span>
                        <span>%{{ $fonPriceDiffs['3Month'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold  ">6 Ay: </span>
                        <span>%{{ $fonPriceDiffs['6Month'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">1 Yıl: </span>
                        <span>%{{ $fonPriceDiffs['1Year'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">3 Yıl: </span>
                        <span>%{{ $fonPriceDiffs['3Year'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">5 Yıl: </span>
                        <span>%{{ $fonPriceDiffs['5Year'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BİN LİRA NE -->
    <div class="row">
        <div class="col-xl-9 col-lg-7">
            <div class="card shadow ">
                <div class="card-header ">
                    <h5 class="h2 font-weight-bold text-dark">1000 TL Ne Oldu
                        <ul class="nav nav-tabs btn-group btn-group-toggle float-right" role="tablist">
                            <li role="presentation" class="active"><a class="btn btn-sm btn-dark btn-simple"
                                    href="#barbiray" aria-controls="home" role="tab" data-toggle="tab">1A</a>
                            </li>
                            <li role="presentation"><a class="btn btn-sm btn-dark btn-simple" href="#barucay"
                                    aria-controls="profile" role="tab" data-toggle="tab">3A</a></li>
                            <li role="presentation"><a class="btn btn-sm btn-dark btn-simple" href="#baraltiay"
                                    aria-controls="profile" role="tab" data-toggle="tab">6A</a></li>
                        </ul>
                        </h6>
                </div>

            </div>
            <!-- Nav tabs -->

        </div>
        <!-- Tab panes -->
        <div class="tab-content col-xl-9 col-lg-7">
            <div role="tabpanel" class="tab-pane active " id="barbiray">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="BinLiraBarChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="barucay">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="BinLiraBarChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="baraltiay">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="BinLiraBarChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Tarihsel Volalite -->
    <?php echo "<script>var dataforvolatility = $volatilityforAreaChart;</script>"; ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="text-left py-1">
                <h6 class="h2 font-weight-bold text-dark">Tarihsel Volatilite</h6>
            </div>
        </div>

        <div class="col-xl-9 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="TarihselVolaliteChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- STACKED BAR CHART --}}
    <div class="row">
        <div class="col-sm-6">
            <div class="text-left py-1">
                <h6 class="h5 font-weight-bold text-dark">Senet Oranları</h6>
            </div>
        </div>

        <div class="col-xl-9 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="stackedBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
