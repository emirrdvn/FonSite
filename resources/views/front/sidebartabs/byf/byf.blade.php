<div class="container mt-5">
    <h1>BYF -> Genel Sayfası</h1>
    <div>
        <strong>Sunucu Zamanı: </strong>
        <span id="server-time">?</span>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function updateServerTime() {
            $.ajax({
                url: "{{ route('ajax.current-time') }}", // Laravel route
                method: "GET",
                success: function(response) {
                    $('#server-time').text(response.time); // Gelen zamanı ekrana yazdır
                },
                error: function() {
                    console.error('Zaman alınırken bir hata oluştu.');
                }
            });
        }

        // Sayfa yüklendiğinde başlat
        setInterval(updateServerTime, 10000); // Her 10 saniyede bir çalıştır
    });
</script>
