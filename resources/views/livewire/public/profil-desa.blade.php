<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('components.layouts.public')] class extends Component {
    //
}; ?>
{{-- Halaman PROFIL DESA (/profil-desa) - profil, perangkat, program prioritas. --}}

<div class="py-12 md:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header Halaman -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold text-emerald-600 tracking-wider uppercase">Tentang Kami</span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 mb-4">Profil Desa Savana Jaya</h1>
            <p class="text-slate-500 leading-relaxed text-base sm:text-lg">
                Mengenal sejarah, arah kebijakan (visi-misi), batas wilayah, struktur kepengurusan pamong, program prioritas, dan keuangan Desa Savana Jaya dalam melayani masyarakat.
            </p>
        </div>

        <!-- Sejarah Desa -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100 mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <div class="lg:col-span-7">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 mb-4">
                        Sejarah Singkat
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-6">Asal Usul Desa Savana Jaya</h2>
                    <div class="space-y-4 text-slate-600 leading-relaxed text-sm sm:text-base">
                        <p>
                            Savanajaya merupakan wilayah subur di Kecamatan Waeapo, Kabupaten Buru, Provinsi Maluku, yang sejarahnya berkaitan erat dengan masa Orde Baru. Berawal pada tahun 1969, Kejaksaan Agung RI menempatkan para tahanan politik (tapol) peristiwa G 30 S/PKI di aliran Sungai Waebini (Unit IV Savanajaya). Wilayah ini dikembangkan menjadi proyek pedesaan pertama di dataran Waeapo melalui pembangunan 250 rumah yang diresmikan oleh PANGKOPKAMTIB Jenderal TNI M. Panggabean pada 20 Juni 1972, di mana prasasti peresmiannya kini dapat ditemui pada tugu peringatan di area gelanggang olahraga Gelanggang Taruna, dekat Gedung Kesenian Graha Buana.
                        </p>
                        <p>
                            Masih pada tahun 1972, pemerintah mendatangkan 652 anggota keluarga tapol yang mencakup 164 istri, 485 anak, dan 3 orang tua/ibu untuk menempati hunian tersebut. Hingga akhirnya pada tahun 1979, akibat desakan lembaga HAM internasional, para tapol dibebaskan; sebagian memutuskan kembali ke daerah asal, sedangkan hampir separuhnya memilih menetap di Desa Savanajaya karena alasan pribadi.
                        </p>
                        <p>
                            Secara etimologi, nama Savanajaya diambil dari kata "Savanna" (padang rumput bersemak atau perdu) dan "Jaya" (keberhasilan, kesuksesan, serta kemakmuran) yang secara harfiah berarti "Padang Rumput yang Makmur". Selain makna harfiah, nama tersebut tersirat doa dan harapan religius agar Tuhan Yang Maha Kuasa senantiasa memberkati Desa Savanajaya menjadi lingkungan yang subur, makmur, tenteram, serta sejahtera secara berkelanjutan (Gemahripah Loh Jinawi Toto Tentrem Karto Raharjo).
                        </p>
                    </div>
                </div>
                <div class="lg:col-span-5">
                    <div class="aspect-video lg:aspect-square rounded-2xl bg-gradient-to-tr from-emerald-800 to-teal-600 overflow-hidden relative shadow-lg">
                        <div class="absolute inset-0 bg-cover bg-center mix-blend-overlay opacity-30" style="background-image: url('{{ asset('images/village_banner.png') }}');"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-8 text-white">
                            <span class="text-xs font-bold uppercase tracking-widest text-emerald-300 mb-1">Motto Desa</span>
                            <blockquote class="text-xl font-bold italic leading-relaxed">
                                "Mengabdi dengan Hati, Melayani dengan Teknologi."
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi & Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Visi -->
            <div class="bg-gradient-to-br from-emerald-800 to-teal-900 text-white rounded-3xl p-8 md:p-12 shadow-xl relative overflow-hidden">
                <div class="absolute right-0 bottom-0 opacity-10 translate-x-12 translate-y-12">
                    <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                </div>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 mb-4 uppercase tracking-wider">
                    Visi Utama
                </span>
                <h3 class="text-2xl sm:text-3xl font-extrabold mb-6">"Savana Jaya Lumbung Pangan, Mandiri Ekonomi, Berdaya Saing Menuju Desa Agraris Modern yang Berkelanjutan"</h3>
            </div>

            <!-- Misi -->
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 mb-4 uppercase tracking-wider">
                    Misi Kerja
                </span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-6">Misi Pembangunan Desa</h3>
                <ol class="space-y-4 text-slate-600 text-sm sm:text-base">
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">1</div>
                        <span>Terwujudnya pemerintah desa yang tertib dan berwibawa.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">2</div>
                        <span>Mewujudkan sarana dan prasarana Desa yang memadai.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">3</div>
                        <span>Mewujudkan keamanan dan kesejahteraan warga desa.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">4</div>
                        <span>Mewujudkan perekonomian masyarakat melalui usaha kelompok masyarakat dan bantuan lainnya.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">5</div>
                        <span>Mewujudkan kualitas pendidik yang baik.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">6</div>
                        <span>Menciptakan pendapatan asli desa dengan menetapkan peraturan desa.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">7</div>
                        <span>Mewujudkan masyarakat yang berbudi pekerti luhur dengan melembagakan musyawarah dan menyelesaikan perbedaan pendapat.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">8</div>
                        <span>Mewujudkan masyarakat yang berdisiplin dengan membudayakan jam belajar Masyarakat.</span>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mr-3.5 mt-0.5 font-bold">9</div>
                        <span>Meningkatkan persatuan dan kesatuan serta toleransi beragama demi terwujudnya kedamaian, ketentraman, keamanan, kenyamanan dan ketertiban dalam kehidupan bermasyarakat.</span>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Identitas Desa -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100 mb-12">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs font-bold text-emerald-600 tracking-wider uppercase">Identitas</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2">Fakta Desa Savana Jaya</h3>
                <p class="text-slate-500 text-sm mt-3">
                    Ringkasan identitas dan potensi unggulan Desa Savana Jaya.
                </p>
            </div>

            @php
                $identitas = [
                    ['label' => 'Tahun Berdiri', 'nilai' => '1972'],
                    ['label' => 'Luas Wilayah', 'nilai' => '366 Ha'],
                    ['label' => 'Jumlah Dusun', 'nilai' => '1 Dusun'],
                    ['label' => 'Jumlah RT / RW', 'nilai' => '7 RT / 2 RW'],
                    ['label' => 'Kecamatan', 'nilai' => 'Waeapo'],
                    ['label' => 'Potensi Unggulan', 'nilai' => 'Pertanian dan Industri Gula Merah'],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($identitas as $item)
                    <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-md transition-shadow">
                        <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wider mb-2">{{ $item['label'] }}</p>
                        <p class="text-lg font-extrabold text-slate-900">{{ $item['nilai'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Struktur Organisasi -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100 mb-12">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs font-bold text-emerald-600 tracking-wider uppercase">Pamong Desa</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2">Struktur Organisasi Pemerintah Desa</h3>
                <p class="text-slate-500 text-sm mt-3">
                    Susunan kepengurusan aparat pemerintahan Desa Savana Jaya periode masa jabatan aktif.
                </p>
            </div>

            <!-- Grid Pamong Desa -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $perangkat = [
                        ['nama' => 'Ari Susanto', 'jabatan' => 'Kepala Desa', 'foto' => 'Ari Susanto Kades.jpeg'],
                        ['nama' => 'Nanda Suryanata', 'jabatan' => 'Sekretaris Desa', 'foto' => 'Nanda Suryanata sekdes.jpeg'],
                        ['nama' => 'Dian Murniasih', 'jabatan' => 'Kasi Pemerintahan', 'foto' => 'Dian murniasih kasi pemerintahan.jpeg'],
                        ['nama' => 'Maryanto', 'jabatan' => 'Kasi Kesra', 'foto' => null],
                        ['nama' => 'Dewi Firdawati', 'jabatan' => 'Kasi Pelayanan', 'foto' => 'Dewi fridawati kasi pelayanan.jpeg'],
                        ['nama' => 'Irsan Wael', 'jabatan' => 'Kaur Perencanaan dan Administrasi', 'foto' => 'Irsan wael kaur perencanaan dan adm.jpeg'],
                        ['nama' => 'Pramono Widakdo', 'jabatan' => 'Kaur Keuangan', 'foto' => 'Pramono Widagdo kasi keuangan.jpeg'],
                        ['nama' => 'Agus Dwi C', 'jabatan' => 'Kepala Dusun I', 'foto' => null],
                        ['nama' => 'Aceng Suryana', 'jabatan' => 'Ketua RW 1', 'foto' => null],
                        ['nama' => 'Emi Kusuma Dewi Umasugi', 'jabatan' => 'Ketua RW 2', 'foto' => null],
                        ['nama' => 'Sahari', 'jabatan' => 'Ketua RT 01', 'foto' => null],
                        ['nama' => 'Makrokhim', 'jabatan' => 'Ketua RT 02', 'foto' => null],
                        ['nama' => 'Tarimin', 'jabatan' => 'Ketua RT 03', 'foto' => null],
                        ['nama' => 'Ahmad Munawir Ashari', 'jabatan' => 'Ketua RT 04', 'foto' => null],
                        ['nama' => 'Muhamad Alfin Toriki', 'jabatan' => 'Ketua RT 05', 'foto' => null],
                        ['nama' => 'Waluyo', 'jabatan' => 'Ketua RT 06', 'foto' => null],
                        ['nama' => 'Sukardianto', 'jabatan' => 'Ketua RT 07', 'foto' => null],
                    ];
                @endphp

                @foreach($perangkat as $orang)
                    <div class="bg-slate-50 rounded-2xl p-6 text-center border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="w-24 h-24 rounded-full bg-emerald-100 text-emerald-500 flex items-center justify-center mx-auto mb-4 border-2 border-emerald-500 overflow-hidden">
                            @if ($orang['foto'])
                                <img src="{{ asset('images/' . $orang['foto']) }}" alt="{{ $orang['nama'] }}" class="w-full h-full object-cover">
                            @else
                                <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zm0 2c-4.42 0-8 2.69-8 6v2h16v-2c0-3.31-3.58-6-8-6z"/></svg>
                            @endif
                        </div>
                        <h4 class="text-base font-bold text-slate-900">{{ $orang['nama'] }}</h4>
                        <p class="text-xs font-semibold text-emerald-600 uppercase tracking-wider mt-1">{{ $orang['jabatan'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Program Prioritas -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-100 mb-12">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs font-bold text-emerald-600 tracking-wider uppercase">Pembangunan</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2">Program Prioritas Desa</h3>
                <p class="text-slate-500 text-sm mt-3">
                    Program prioritas pembangunan Desa Savana Jaya tahun 2024.
                </p>
            </div>

            @php
                $programs = [
                    ['nama' => 'Pembangunan Jalan Poros Desa', 'kategori' => 'Infrastruktur', 'anggaran' => 850000000, 'realisasi' => 780000000, 'status' => 'Berjalan', 'deskripsi' => 'Pengaspalan jalan poros desa sepanjang 6,5 km menghubungkan dusun I-V dan pusat kecamatan.'],
                    ['nama' => 'Pembangunan Embung Pertanian', 'kategori' => 'Pertanian', 'anggaran' => 680000000, 'realisasi' => 620000000, 'status' => 'Berjalan', 'deskripsi' => 'Pembangunan embung berkapasitas 50.000 m3 untuk cadangan air irigasi di musim kemarau bagi 200 ha lahan.'],
                    ['nama' => 'Electrifikasi Dusun IV dan V', 'kategori' => 'Infrastruktur', 'anggaran' => 420000000, 'realisasi' => 390000000, 'status' => 'Selesai', 'deskripsi' => 'Pemasangan jaringan listrik PLN untuk 280 KK di Dusun IV dan V yang belum memiliki akses listrik.'],
                    ['nama' => 'Pengembangan Peternakan Sapi Terpadu', 'kategori' => 'Ekonomi', 'anggaran' => 385000000, 'realisasi' => 290000000, 'status' => 'Berjalan', 'deskripsi' => 'Bantuan 60 ekor sapi bibit, kandang komunal, dan pendampingan bagi 5 kelompok ternak.'],
                    ['nama' => 'Gudang Penyimpanan Hasil Panen', 'kategori' => 'Pertanian', 'anggaran' => 320000000, 'realisasi' => 320000000, 'status' => 'Selesai', 'deskripsi' => 'Pembangunan 2 unit gudang berkapasitas 150 ton untuk penyimpanan hasil panen padi dan jagung petani.'],
                    ['nama' => 'Pengembangan Pertanian Jagung Hibrida', 'kategori' => 'Pertanian', 'anggaran' => 245000000, 'realisasi' => 230000000, 'status' => 'Selesai', 'deskripsi' => 'Bantuan benih, pupuk, dan pendampingan teknis untuk 300 ha lahan jagung hibrida varietas unggul.'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($programs as $program)
                    <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 hover:shadow-md transition-shadow flex flex-col">
                        <div class="flex items-start justify-between mb-3">
                            <span class="text-xs font-bold px-3 py-1 rounded-full {{ $program['kategori'] === 'Infrastruktur' ? 'bg-emerald-100 text-emerald-700' : ($program['kategori'] === 'Pertanian' ? 'bg-teal-100 text-teal-700' : 'bg-amber-100 text-amber-700') }}">
                                {{ $program['kategori'] }}
                            </span>
                            <span class="text-xs font-bold px-3 py-1 rounded-full {{ $program['status'] === 'Selesai' ? 'bg-emerald-600 text-white' : 'bg-sky-100 text-sky-700' }}">
                                {{ $program['status'] }}
                            </span>
                        </div>
                        <h4 class="text-lg font-bold text-slate-900 mb-2 leading-snug">{{ $program['nama'] }}</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ $program['deskripsi'] }}</p>
                        <div class="mt-auto pt-4 border-t border-slate-200 space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-slate-500">Anggaran</span>
                                <span class="font-bold text-slate-800">Rp {{ number_format($program['anggaran'], 0, ',', '.') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Realisasi</span>
                                <span class="font-bold text-emerald-600">Rp {{ number_format($program['realisasi'], 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- APBDesa -->
        <div class="bg-gradient-to-br from-emerald-900 to-teal-900 text-white rounded-3xl p-8 md:p-12 shadow-xl relative overflow-hidden">
            <div class="absolute right-0 bottom-0 opacity-10 translate-x-12 translate-y-12">
                <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 24 24"><path d="M3 6h18v12H3zM5 9v6h14V9zM12 10a3 3 0 100 6 3 3 0 000-6z"/></svg>
            </div>
            <div class="text-center max-w-3xl mx-auto mb-12 relative">
                <span class="text-xs font-bold text-emerald-300 tracking-wider uppercase">Keuangan Desa</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold mt-2">Realisasi APBDesa</h3>
                <p class="text-emerald-100/80 text-sm mt-3">
                    Ringkasan pendapatan Anggaran Pendapatan dan Belanja Desa Savana Jaya.
                </p>
            </div>

            @php
                $apbdesa = [
                    ['label' => 'Total APBDesa', 'nilai' => 1382253000],
                    ['label' => 'Pendapatan Asli Desa', 'nilai' => 22000000],
                    ['label' => 'Dana Desa', 'nilai' => 1840000000],
                    ['label' => 'Alokasi Dana Desa', 'nilai' => 697000000],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                @foreach($apbdesa as $item)
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <p class="text-sm font-semibold text-emerald-200 mb-2">{{ $item['label'] }}</p>
                        <p class="text-xl font-extrabold">Rp {{ number_format($item['nilai'], 0, ',', '.') }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
