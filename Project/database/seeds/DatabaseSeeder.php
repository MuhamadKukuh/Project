<?php

use Illuminate\Database\Seeder;
use App\tugas;
use App\gender;
use App\materi;
use App\kelas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        tugas::create([
            'title'     => "Tugas PPKN Materi G30SPKI",
            'slug'      => "Tugas",
            'nama'      => "Siti. Saadah",
            'mapel'     => "PPKN",
            'excerpt'   => "Baca Materi Tentang G30SPKI Di Halaman Materi, Lalu Kerjakan Soal Berikut"
        ]);

        tugas::create([
            'title'     => "Tugas PPKN Materi G30SPKI",
            'slug'      => "Tugas2",
            'nama'      => "Siti. Saadah",
            'mapel'     => "PPKN",
            'excerpt'   => "Baca Materi Tentang G30SPKI Di Halaman Materi, Lalu Kerjakan Soal Berikut"
        ]);

        tugas::create([
            'title'     => "Tugas PPKN Materi G30SPKI",
            'slug'      => "Tugas3",
            'nama'      => "Siti. Saadah",
            'mapel'     => "PPKN",
            'excerpt'   => "Baca Materi Tentang G30SPKI Di Halaman Materi, Lalu Kerjakan Soal Berikut"
        ]);

        tugas::create([
            'title'     => "Tugas PPKN Materi G30SPKI",
            'slug'      => "Tugas4",
            'nama'      => "Siti. Saadah",
            'mapel'     => "PPKN",
            'excerpt'   => "Baca Materi Tentang G30SPKI Di Halaman Materi, Lalu Kerjakan Soal Berikut"
        ]);

        materi::create([
            'title' => "Materi G30SPKI",
            'materi'  => "Materi PPKN",
            'slug'  => "Materi PPKN",
            'isi'   => '1. Sejarah Singkat G30S/PKI
            G30S merupakan gerakan yang bertujuan untuk menggulingkan pemerintahan Presiden Sukarno dan mengubah Indonesia menjadi negara komunis. Gerakan ini dipimpin oleh DN Aidit yang saat itu merupakan ketua dari Partai Komunis Indonesia (PKI).
            Pada 1 Oktober 1965 dini hari, Letkol Untung yang merupakan anggota Cakrabirawa (pasukan pengawal Istana) memimpin pasukan yang dianggap loyal pada PKI.
            Gerakan ini mengincar perwira tinggi TNI AD Indonesia. Tiga dari enam orang yang menjadi target langsung dibunuh di kediamannya. Sedangkan lainnya diculik dan dibawa menuju Lubang Buaya.
            Jenazah ketujuh perwira TNI AD itu ditemukan selang beberapa hari kemudian.
            2. Pejabat Tinggi yang Menjadi Korban
            Keenam perwira tinggi TNI Angkatan Darat yang menjadi korban dalam peristiwa ini adalah:
            - Letnan Jendral Anumerta Ahmad Yani
            - Mayor Jendral Raden Soeprapto
            - Mayor Jendral Mas Tirtodarmo Haryono
            - Mayor Jendral Siswondo Parman
            - Brigadir Jendral Donald Isaac Panjaitan
            - Brigadir Jendral Sutoyo Siswodiharjo
            Sementara itu, Panglima TNI AH Nasution yang menjadi target utama berhasil meloloskan diri. Tapi, putrinya Ade Irma Nasution tewas tertembak dan ajudannya, Lettu Pierre Andreas Tendean diculik dan ditembak di Lubang Buaya.
            Keenam jenderal di atas beserta Lettu Pierre Tendean kemudian ditetapkan sebagai Pahlawan Revolusi. Sejak berlakunya UU Nomor 20 tahun 2009, gelar ini juga diakui sebagai Pahlawan Nasional.
            Selain itu, beberapa orang lainnya juga menjadi korban pembunuhan di Jakarta dan Yogyakarta. Mereka adalah:
            - Brigadir Polisi Ketua Karel Satsuit Tubun
            - Kolonel Katamso Darmokusumo
            - Letnan Kolonel Sugiyono Mangunwiyoto
            Baca artikel detiknews, "Seputar G30S/PKI, Peristiwa Penting dalam Sejarah Indonesia" selengkapnya https://news.detik.com/berita/d-4726786/seputar-g30spki-peristiwa-penting-dalam-sejarah-indonesia.
            Download Apps Detikcom Sekarang https://apps.detik.com/detik/'
        ]);

        gender::create([
            'gambar' => 'https://avatarfiles.alphacoders.com/298/thumb-1920-298106.png',
            'gender' => 'Laki Laki'
        ]);

        gender::create([
            'gambar' => 'https://avatarfiles.alphacoders.com/101/thumb-101007.png',
            'gender' => 'Perempuan'
        ]);

        kelas::create([
            'kelas' => 'X-RPL'
        ]);

        kelas::create([
            'kelas' => 'X-MM'
        ]);

        kelas::create([
            'kelas' => 'XI-RPL'
        ]);

        kelas::create([
            'kelas' => 'XI-MM1'
        ]);

        kelas::create([
            'kelas' => 'XI-MM2'
        ]);

        kelas::create([
            'kelas' => 'XII-RPL1'
        ]);
        kelas::create([
            'kelas' => 'XII-RPL2'
        ]);

        kelas::create([
            'kelas' => 'XII-MM1'
        ]);
        kelas::create([
            'kelas' => 'XII-MM2'
        ]);
        
    }
}
