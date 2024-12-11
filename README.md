
# BIST Fonları Verileri Çekme ve Gösterim Projesi

Bu proje, **TradingView** platformundan **BIST fonlarını** scrape ederek çekilen verileri bir Laravel tabanlı web sitesi üzerinde görselleştirir. Proje, finansal verilere kolay erişim sağlamak ve kullanıcıların bu verileri analiz edebilmesine olanak tanımak için geliştirilmiştir.

## Özellikler
- TradingView'dan gerçek zamanlı veya güncel fon verilerini çekme.
- Laravel tabanlı bir web uygulaması üzerinde verilerin görselleştirilmesi.
- Kullanıcı dostu bir arayüz ile fon verilerinin listelenmesi ve filtrelenmesi.
- Veritabanında verilerin saklanması ve gerektiğinde arşivlenmesi.
- Kolay kurulum ve özelleştirme imkânı.

---

## Kurulum

### Gereksinimler
- **PHP 8.0+**
- **Composer**
- **Laravel Framework** (v9 veya üzeri önerilir)
- **MySQL veya PostgreSQL** veritabanı
- **Node.js** ve **NPM** (Laravel Mix için)
- **Python** (Scraping işlemleri için)

### Adımlar

1. **Proje Deposu Klonlanması**
   ```bash
   git clone https://github.com/username/project-name.git
   cd project-name
   ```

2. **Bağımlılıkların Yüklenmesi**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Çevre Dosyasının Ayarlanması**
   `.env` dosyasını oluşturun:
   ```bash
   cp .env.example .env
   ```
   **.env** dosyasını düzenleyerek veritabanı bilgilerini, uygulama URL'sini ve diğer gerekli ayarları yapılandırın:
   ```
   APP_NAME="BIST Fonları Takip"
   APP_URL=http://localhost
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=fonlar
   DB_USERNAME=root
   DB_PASSWORD=yourpassword
   ```

4. **Veritabanını Ayarlayın**
   Laravel migration komutunu kullanarak veritabanı tablolarını oluşturun:
   ```bash
   php artisan migrate
   ```

5. **Scraper Modülünün Çalıştırılması**
   Scraper modülünü kurun ve çalıştırın:
   ```bash
   python3 -m pip install -r scraper/requirements.txt
   python3 scraper/main.py
   ```

6. **Sunucuyu Başlatın**
   ```bash
   php artisan serve
   ```

   Uygulamaya tarayıcınızdan erişin: [http://localhost:8000](http://localhost:8000)

---

## Kullanım

1. **Fon Verilerinin Çekilmesi**
   - Scraper, TradingView platformundan veri çekmek için kullanılır. Scraper otomatik olarak belirli aralıklarla çalıştırılabilir veya manuel olarak çağrılabilir:
     ```bash
     python3 scraper/main.py
     ```

2. **Fon Listesinin Görüntülenmesi**
   - Web sitesi üzerinden fonların isimleri, günlük değişim oranları ve diğer ilgili veriler görüntülenebilir.

3. **Arama ve Filtreleme**
   - Kullanıcılar belirli fonları filtreleyebilir veya isimle arama yapabilir.

---

## Proje Mimarisi

### Klasör Yapısı
- `app/`: Laravel uygulama mantığı
- `resources/views/`: Kullanıcı arayüzü bileşenleri
- `scraper/`: Python scraping modülü
- `database/`: Veritabanı migration dosyaları
- `public/`: Statik dosyalar (CSS, JS)

---

## Teknolojiler
- **Backend**: Laravel PHP Framework
- **Frontend**: Blade Template Engine, Bootstrap
- **Scraper**: Python (TvDataFeed)
- **Veritabanı**: MySQL
- **Diğer**: TradingView scraping için özel algoritmalar

---

## Katkıda Bulunma
Proje geliştirmesine katkıda bulunmak isterseniz, aşağıdaki adımları izleyin:
1. Bu depoyu forklayın.
2. Yeni bir dal oluşturun:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Değişikliklerinizi yapın ve commit edin:
   ```bash
   git commit -m "Add your feature name"
   ```
4. Değişikliklerinizi gönderin:
   ```bash
   git push origin feature/your-feature-name
   ```
5. Bir Pull Request oluşturun.

---

## Lisans
Bu proje MIT Lisansı altında lisanslanmıştır. Daha fazla bilgi için [LICENSE](LICENSE) dosyasına göz atabilirsiniz.

---

## Ekran Görüntüleri
### Ana Sayfa  
Fonların bir listesiyle birlikte kullanıcı dostu bir arayüz:  
*(Ekran görüntüsü buraya eklenebilir)*

### Detay Sayfası  
Belirli bir fonun detaylı bilgisi:  
*(Ekran görüntüsü buraya eklenebilir)*

---

## Sürüm Notları
- **v1.0.0**: Projenin ilk sürümü. Temel fonksiyonlar içerir: veri çekme, görüntüleme, ve arama.
