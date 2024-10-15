<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Ay Gün Butonları -->
    
    <?php
    echo "<script>var dataforchart = $dataforchart;</script>";
    ?>

    <!-- CHART AREA -->
    <div class="row">
        <div class="col-sm-6">
            {{-- <div class="text-left py-1">
                    <h6 class="h1 font-weight-bold text-dark">Özet Rapor</h6>
            </div> --}}
            <div class="btn-group btn-group-toggle float-left" data-toggle="buttons">
                <label class="btn btn-sm btn-dark btn-simple active" id="0">
                    <input id="radio0" type="radio" name="options" checked>
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">7G</span>
                    <span class="d-block d-sm-none">
                        <i class="tim-icons icon-single-02"></i>
                    </span>
                </label>
                <label class="btn btn-sm btn-dark btn-simple" id="1">
                    <input id="radio1" type="radio" class="d-none d-sm-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">1A</span>
                    <span class="d-block d-sm-none">
                        <i class="tim-icons icon-gift-2"></i>
                    </span>
                </label>
                <label class="btn btn-sm btn-dark btn-simple" id="2">
                    <input id="radio2" type="radio" class="d-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">3A</span>
                    <span class="d-block d-sm-none">
                        <i class="tim-icons icon-tap-02"></i>
                    </span>
                </label>
                <label class="btn btn-sm btn-dark btn-simple" id="3">
                    <input id="radio3" type="radio" class="d-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">1Y</span>
                    <span class="d-block d-sm-none">
                        <i class="tim-icons icon-tap-02"></i>
                    </span>
                </label>
                <label class="btn btn-sm btn-dark btn-simple" id="4">
                    <input id="radio4" type="radio" class="d-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">3Y</span>
                    <span class="d-block d-sm-none">
                        <i class="tim-icons icon-tap-02"></i>
                    </span>
                </label>
            </div>
        </div>
        
        <div class="col-xl-9 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
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
                        <span>{{$fon->code}}</span>
                    </div>
                    
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Kurucu:  </span>
                        <span>{{$fon->author}}</span>
                    </div>
                    
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold  ">Yıllık Yönetim Ücreti:  </span>
                        <span>%2,10</span>
                    </div>
                    
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Risk Değeri: </span>
                        <span>6</span>
                    </div>
                    
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Alış Valörü:  </span>
                        <span>1</span>
                    </div>
                    
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">Satış Valörü:</span>
                        <span>2</span>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <!-- FON TOPLAM DEĞER -->
    <div class="row">
        <div class="col-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">Fon Toplam Değer</h6>
                </div>
                <div class="card-body">
                    <p>{{ number_format(floatval(str_replace(',', '.', $fonPrice)) * $fonPayAdet,2,'.',',')}} ₺</p>
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        {{-- YATIRIMCI SAYISI --}}
        <div class="col-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">Yatırımcı Sayısı</h6>
                </div>
                <div class="card-body">
                    <p>{{ number_format($fonYatirimciSayisi, 0, '.', ',') }}</p>
                    <div class="chart-pie">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        {{-- DOLAŞIMDAKİ PAY ADETİ --}}
        <div class="col-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-dark">Dolaşımdaki Pay Adedi</h6>
                </div>
                <div class="card-body">
                    <p>{{ number_format($fonPayAdet, 0, '.', ',') }}</p>
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
                            <span class="text-foreground-03">Toplam Adet</span>
                            <span class="float-right text-foreground-02 truncate">18,75 mr</span>
                        </div>
                        <div class="flex justify-between items-center h-9 space-x-4 text-sm">
                            <span class="text-foreground-03">Aktif Adet</span>
                            <span class="float-right text-foreground-02 truncate">7,68 mr</span>
                        </div>
                        <div class="flex justify-between items-center h-9 space-x-4 text-sm">
                            <span class="text-foreground-03">Doluluk Oranı</span>
                            <span class="float-right text-foreground-02 truncate">%40,96</span>
                        </div>
                        <div class="flex justify-between items-center h-9 space-x-4 text-sm">
                            <span class="text-foreground-03">Pazar Payı</span>
                            <span class="float-right text-foreground-02 truncate">%7,84</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-9 ">
            {{-- ŞİRKETLER STATİK --}}
            <div class="row ">
            <div class="col-3">
                <div class="card rounded-lg overflow-hidden mb-4 md:mb-0 bg-background-adaptive-01 border border-stroke-01">
                    <div class="card-header text-primary font-weight-bold mb-3 font-bold py-3 px-4 text-foreground-01">En
                        Büyük Pozisyonlar</div>
                    <div>
                        <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                            href="/sirketler/ALARK">
                            <div class="py-1.5 px-4 flex justify-between items-center">
                                <div class="w-28">
                                    <div class="flex space-x-1.5"><img alt="Alarko Holding A.Ş. Şirket Logosu"
                                            data-state="closed" loading="lazy" width="28" height="28" decoding="async"
                                            data-nimg="1" class="rounded sheadow-lg" style="color:transparent"
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
                                    <div class="flex space-x-1.5"><img alt="Yapı ve Kredi Bankası A.Ş. Şirket Logosu"
                                            data-state="closed" loading="lazy" width="28" height="28" decoding="async"
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
                                    <div class="flex space-x-1.5"><img alt="Hacı Ömer Sabancı Holding A.Ş. Şirket Logosu"
                                            data-state="closed" loading="lazy" width="28" height="28" decoding="async"
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
            <div class="col-3">
                <div class="card rounded-lg overflow-hidden mb-4 md:mb-0 bg-background-adaptive-01 border border-stroke-01">
                    <div class="card-header text-primary font-weight-bold mb-3 font-bold py-3 px-4 text-foreground-01">Yakın
                        Zamanda Artırılanlar</div>
                    <div>
                        <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                            href="/sirketler/AKBNK">
                            <div class="py-1.5 px-4 flex justify-between items-center">
                                <div class="w-28">
                                    <div class="flex space-x-1.5"><img alt="Akbank T.A.Ş. Şirket Logosu" data-state="closed"
                                            loading="lazy" width="28" height="28" decoding="async" data-nimg="1"
                                            class="rounded sheadow-lg" style="color:transparent"
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
                                    <div class="flex space-x-1.5"><img alt="Yapı ve Kredi Bankası A.Ş. Şirket Logosu"
                                            data-state="closed" loading="lazy" width="28" height="28" decoding="async"
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
                                            data-state="closed" loading="lazy" width="28" height="28" decoding="async"
                                            data-nimg="1" class="rounded sheadow-lg" style="color:transparent"
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
            <div class="col-3">
                <div class="card rounded-lg overflow-hidden mb-4 md:mb-0 bg-background-adaptive-01 border border-stroke-01">
                    <div class="card-header text-primary font-weight-bold mb-3 font-bold py-3 px-4 text-foreground-01">Yakın
                        Zamanda Azaltılanlar</div>
                    <div>
                        <a class="h-[51px] block relative text-foreground-01 hover:bg-background-disabled"
                            href="/sirketler/BTCIM">
                            <div class="py-1.5 px-4 flex justify-between items-center">
                                <div class="w-28">
                                    <div class="flex space-x-1.5"><img
                                            alt="Batıçim Batı Anadolu Çimento Sanayii A.Ş. Şirket Logosu"
                                            data-state="closed" loading="lazy" width="28" height="28" decoding="async"
                                            data-nimg="1" class="rounded sheadow-lg" style="color:transparent"
                                            src="https://storage.fintables.com/media/uploads/company-logos/BTCIM.png">
                                        <div class="h-[28px]">
                                            <div class="text-foreground-01 text-sm mt-[-3px]">BTCIM</div>
                                            <div class="text-foreground-03 text-[10px] -mt-0.5">11:12:37</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-sm tabular-nums flex flex-col items-end">
                                    <div><span class="inline-flex items-center tabular-nums">148,90</span></div>
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
                                            alt="Batısöke Söke Çimento Sanayii T.A.Ş. Şirket Logosu" data-state="closed"
                                            loading="lazy" width="28" height="28" decoding="async" data-nimg="1"
                                            class="rounded sheadow-lg" style="color:transparent"
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
                                            data-state="closed" loading="lazy" width="28" height="28" decoding="async"
                                            data-nimg="1" class="rounded sheadow-lg" style="color:transparent"
                                            src="https://storage.fintables.com/media/uploads/company-logos/AEFES.png">
                                        <div class="h-[28px]">
                                            <div class="text-foreground-01 text-sm mt-[-3px]">AEFES</div>
                                            <div class="text-foreground-03 text-[10px] -mt-0.5">11:12:36</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-sm tabular-nums flex flex-col items-end">
                                    <div><span class="inline-flex items-center tabular-nums">182,40</span></div>
                                    <div class="ml-2 w-11 text-[12px] -mt-0.5 text-right"><span
                                            class="inline-flex items-center tabular-nums"><span
                                                class="text-xs text-foreground-03 mr-1">%</span><span
                                                class="text-shared-danger-solid-01">-0,87</span></span></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div></div>
        </div>
        {{-- GETİRİ BİLGİLERİ --}}
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <h4 class="m-0 font-weight-bold text-dark">Getiri Bilgileri</h6>
                </div>
                <div class="card-body ">
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">1 Ay:  </span>
                        <span>%{{ $fonPriceDiffs['1Month'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">3 Ay:  </span>
                        <span>%{{ $fonPriceDiffs['3Month'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold  ">6 Ay:  </span>
                        <span>%{{ $fonPriceDiffs['6Month'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">1 Yıl:  </span>
                        <span>%{{ $fonPriceDiffs['1Year'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">3 Yıl:  </span>
                        <span>%{{ $fonPriceDiffs['3Year'] }}</span>
                    </div>
                    <hr>
                    <div class="text-center">
                        <span class="mb-0 font-weight-bold ">5 Yıl:  </span>
                        <span>%{{ $fonPriceDiffs['5Year'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    {{-- 
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Server Migration <span
                            class="float-right">20%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Sales Tracking <span
                            class="float-right">40%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Customer Database <span
                            class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%"
                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Payout Details <span
                            class="float-right">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Account Setup <span
                            class="float-right">Complete!</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <!-- Color System -->
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                            Primary
                            <div class="text-white-50 small">#4e73df</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            Success
                            <div class="text-white-50 small">#1cc88a</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            Info
                            <div class="text-white-50 small">#36b9cc</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            Warning
                            <div class="text-white-50 small">#f6c23e</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            Danger
                            <div class="text-white-50 small">#e74a3b</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                            Secondary
                            <div class="text-white-50 small">#858796</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-light text-black shadow">
                        <div class="card-body">
                            Light
                            <div class="text-black-50 small">#f8f9fc</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-dark text-white shadow">
                        <div class="card-body">
                            Dark
                            <div class="text-white-50 small">#5a5c69</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="img/undraw_posting_photo.svg" alt="...">
                    </div>
                    <p>Add some quality, svg illustrations to your project courtesy of <a
                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                        constantly updated collection of beautiful svg images that you can use
                        completely free and without attribution!</p>
                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                        unDraw &rarr;</a>
                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                        CSS bloat and poor page performance. Custom CSS classes are used to create
                        custom components and custom utility classes.</p>
                    <p class="mb-0">Before working with this theme, you should become familiar with the
                        Bootstrap framework, especially the utility classes.</p>
                </div>
            </div>

        </div>
    </div>--}}

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
<script>
    function openCity(evt, cityName) {
    // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

</script>
