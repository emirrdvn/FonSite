<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Fon;
class FonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DB::table('fons')->insert([
            'code' => 'IPB',
            'name' => 'Birinci Değişken Fon',
            'description' => 'Fon yatırım stratejisi çerçevesinde sabit bir varlık dağılımı hedefi olmayıp değişken piyasa koşullarına göre esnek olarak yönetilmesi esasına dayanır. Fon yönetiminde yatırım yapılacak sermaye piyasası araçlarının seçiminde, getiri potansiyeli yüksek, likit varlıklar tercih edilir. Fon, olumsuz piyasa şartlarının hakim olduğu dönemlerde yatırımcıyı piyasa kayıplarından korumak amaçlı, fon portföyünde bulunan hisse senedi ağırlığını vadeli işlem sözleşmelerinde alacağı ters pozisyonlarla -%30 a (eksi yüzde otuz) çekebilir. Fon, iyimser piyasa koşullarının hakim olduğu dönemlerde portföyündeki yatırım amaçlı hisse senedi ağırlığını vadeli işlemler sözleşmelerini kullanarak +%60 a (artı yüzde altmış) çekebilir',
            'author' => 'İSTANBUL PORTFÖY YÖNETİMİ A.Ş.', ]);

        DB::table('fons')->insert([
            'code' => 'IIH',
            'name' => 'Üçüncü Hisse Senedi Fonu (Hisse Senedi Yoğun Fon)',
            'description' => 'Fon hisse senedi şemsiye fona bağlı olup, Fon toplam değerinin en az %80 i devamlı olarak yurtiçi ihraçcı paylarından oluşur. Yatırım yapılacak sermaye piyasası araçlarının seçiminde, risk/getiri değerlendirmeleri sonucunda belirlenenler ve nakde dönüşümü kolay olanlar tercih edilir. Fon portföy sınırlamaları itibariyle Tebliğ in 6. maddesi çerçevesinde Hisse Senedi Şemsiye Fon a bağlı Hisse Senedi Yoğun Fon niteliğinde olup; Fon portföy değerinin en az %80 i devamlı olarak menkul kıymet yatırım ortaklıkları payları hariç olmak üzere BİAŞ a işlem gören ihraççı paylarından oluşur. ',
            'author' => 'İSTANBUL PORTFÖY YÖNETİMİ A.Ş.',]);
        DB::table('fons')->insert([
            'code' => 'BIST:ZGOLD',
            'name' => 'Altın Katılım Borsa Yatırım Fonu',
            'description' => 'Fon, Fon toplam değerinin en az %80ini devamlı olarak takip edilen endeks kapsamındaki varlıklara ve/veya T.C. Hazine ve Maliye Bakanlığı Varlık Kiralama Şirketi tarafından fiziki altın itfası esasına dayalı olarak ihraç edilen altına dayalı kira sertifikalarına yatırım yapmak suretiyle endeksi takip eder. ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ A.Ş.',]);
        DB::table('fons')->insert([
            'code' => 'BIST:ZPX30',
            'name' => 'Bıst 30 Endeksi Hisse Senedi Yoğun Borsa Yatırım Fonu',
            'description' => 'Fon, fon toplam değerinin en az %80ini devamlı olarak sadece takip edilen endeks kapsamındaki varlıklara, yatırım yapmak suretiyle endeksi takip eder ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ A.Ş.',]);
        DB::table('fons')->insert([
            'code' => 'BIST:ZPLIB',
            'name' => 'Bıst Likit Banka Endeksi Hisse Senedi Yoğun Borsa Yatırım Fonu',
            'description' => 'Fon, fon toplam değerinin en az %80ini devamlı olarak sadece takip edilen endeks kapsamındaki varlıklara, yatırım yapmak suretiyle endeksi takip eder ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ A.Ş.',]);
        DB::table('fons')->insert([
            'code' => 'NASDAQ:QQQ',
            'name' => 'Invesco QQQ Trust, Series 1',
            'description' => 'QQQ is one of the most established and actively traded ETFs in the world, albeit one of the most unusual. The product is one of a few ETFs structured as a unit investment trust. Per the rules of its index, the fund only invests in nonfinancial stocks listed on NASDAQ, and effectively ignores other sectors too, causing it to skew massively away from a broad-based large-cap portfolio. QQQ has huge tech exposure, but it is not a tech fund in the pure sense either. The funds arcane weighting rules further distance it from anything close to plain vanilla large-cap or pure-play tech coverage. The ETF is much more concentrated in its top holdings and is more volatile than our vanilla large-cap benchmark. Still, the fund has huge name recognition for the underlying index, the NASDAQ-100. In all, QQQ delivers a quirky but wildly popular mash-up of tech, growth, and large-cap exposure. The fund and index are rebalanced quarterly and reconstituted annually. ',
            'author' => 'Invesco Ltd.',]);
            
          
        DB::table('fons')->insert([
            'code' => 'NASDAQ:GOOG',
            'name' => 'Alphabet Inc (Google) Class C',
            'description' => 'Alphabet, Inc is a holding company, which engages in the business of acquisition and operation of different companies. It operates through the Google and Other Bets segments. The Google segment includes its main Internet products such as ads, Android, Chrome, hardware, Google Cloud, Google Maps, Google Play, Search, and YouTube. The Other Bets segment consists of businesses such as Access, Calico, CapitalG, GV, Verily, Waymo, and X. The company was founded by Lawrence E. Page and Sergey Mikhaylovich Brin on October 2, 2015 and is headquartered in Mountain View, CA. ',
            'author' => 'Google',]);

        DB::table('fons')->insert([
            'code' => 'BIST:ALTIN',
            'name' => 'DARPHANE ALTIN SERTİFİKASI',
            'description' => 'Altın Fiyatlari ',
            'author' => 'Türkiye Cumhuriyeti Darphanesi',]);

        DB::table('fons')->insert([
            'code' => 'BIST:ISGLK',
            'name' => 'IS PORTFOY ALTIN KATILIM BYF',
            'description' => 'Katılım Fonu ',
            'author' => 'İş Bankası',]);

        DB::table('fons')->insert([
            'code' => 'BIST:ZELOT',
            'name' => 'ZİRAAT PORTFÖY BIST 50-30 ENDEKSİ HİSSE SENEDİ YOĞUN BORSA YATIRIM FONU',
            'description' => 'Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);
        
        DB::table('fons')->insert([
            'code' => 'BIST:Z30EA',
            'name' => 'ZIRAAT PORTFOY BIST 30 EQUAL WEIGHTED ETF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);
        
        DB::table('fons')->insert([
            'code' => 'BIST:Z30KP',
            'name' => 'ZİRAAT PORTFÖY KATILIM 30 ENDEKSİ HİSSE SENEDİ YOĞUN BORSA YATIRIM FONU',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:Z30KE',
            'name' => 'ZIRAAT PORTFOY KATILIM 30 EA HSY BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:ZPBDL',
            'name' => 'ZIRAAT PORTFOY BIST NON-BANK LIQUID 10 INDEX FUND',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:ZRE20',
            'name' => 'ZİRAAT PORTFÖY RİSK EŞİT BANKA DIŞI 20 ENDEKSİ HSY BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:ZPT10',
            'name' => 'ZİRAAT PORTFÖY YILDIZ PAZAR TEKNOLOJİ VE İLETİŞİM 10 ENDEKSİ HİSSE SENEDİ ',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:ZTM25',
            'name' => 'ZIRAAT PORTFOY BIST TEMETTU 25 ENDEKS HSY BYF ',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);
        
        DB::table('fons')->insert([
            'code' => 'BIST:ZSR25',
            'name' => 'ZİRAAT PORTFÖY BIST SÜRDÜRÜLEBİLİRLİK 25 ENDEKSİ HİSSE SENEDİ ',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'ZİRAAT PORTFÖY YÖNETİMİ ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:GMSTR',
            'name' => 'QNB FİNANS PORTFÖY GÜMÜŞ BYF ',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'Government of Qatar  ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:USDTR',
            'name' => 'QNB FİNANS PORTFÖY AMERİKAN DOLARI YABANC BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'Government of Qatar  ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:QTEMZ',
            'name' => 'QNB PORTFOY TEMIZ ENERJI HSY BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'Government of Qatar  ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:APX30',
            'name' => 'AK PORTFOY BIST 30 ENDEKSI HSY BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'Akbank TAS ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:OPX30',
            'name' => 'OSMANLI PORTFOY BIST 30 HSY BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'OSMANLI PORTFÖY YÖNETİM ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:APLIB',
            'name' => 'AK PORTFOY BIST LIKIT BANKA HSY BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'Akbank TAS ',]);

        DB::table('fons')->insert([
            'code' => 'BIST:APBDL',
            'name' => 'AK PORTFOY BIST BANKA DISI LIKIT 10 HSY BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'Akbank TAS',]);

        DB::table('fons')->insert([
            'code' => 'BIST:GLDTR',
            'name' => 'QNB FİNANS PORTFÖY ALTIN BYF',
            'description' => 'Bist Katılım Fonu ',
            'author' => 'Government of Qatar',]);*/

        
    }
}
