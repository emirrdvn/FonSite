<div class="container mt-5">
    <h1>BYF -> Genel Sayfası</h1>
    <div>
        <strong>Sunucu Zamanı: </strong>
        <span id="server-time">?</span>
        <strong>Son Fiyat: </strong>
        <span id="fon_price">?</span>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    const ajaxUrl = "{{ route('ajax.current-time') }}"; // Laravel Route

    function updateServerTime() {
        $.ajax({
            url: ajaxUrl,
            method: "GET",
            success: function(response) {
                
                // Gelen JSON'u konsolda kontrol edin
                console.log("Başarılı yanıt:", response);

                // Gelen JSON içeriğini DOM'a yazdır
                if (response.time) {
                    $('#server-time').text(response.time); // Sunucu zamanı
                }
                console.log("response fonPrice: ", response.fon_price);
                if (response.fon_price ) {
                    $('#fon_price').text(response.fon_price); // Fon fiyatı
                } else {
                    console.warn("Fon fiyatı bilgisi bulunamadı!");
                }
            },
            error: function(xhr, status, error) {
                console.error('Zaman alınırken bir hata oluştu:', error);
            }
        });
    }

    // Her 10 saniyede bir AJAX çağrısını çalıştır
    setInterval(updateServerTime, 5000);
});

</script>
