@extends('layouts.main')
@section('content')
    <style>
        tr {
            vertical-align: text-top;
        }
        .ketua {
            font-weight:bold;
            border: 1px solid black;
        }


    </style>
    <link rel="stylesheet" href="http://localhost:8000/css/organization.css">
    <div class="contents">
        <h1>Struktur Organisasi Serikat Pekerja BPJS Ketenagakerjaan</h1>
        <table>
            <thead>

            </thead>
            <tbody>
            <!-----------------------------------ketua--------------------------------------------->
                <tr class="ketua">
                    <td>KETUA UMUM</td>
                    <td>: EKO PURNOMO</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Ketua Bidang<br>Organisasi dan Keanggotaan</li>
                        </ul>
                    </td>
                    <td>: Royyan Huda</td>
                </tr>
            <tr>
                <td>
                    <ul>
                        <li>Ketua Bidang<br>Perlindungan dan Pembelaan</li>
                    </ul>
                </td>
                <td>: Andri Bayumi</td>
            </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Ketua Bidang<br>Kesejahteraan dan Pengembangan Bisnis</li>
                        </ul>
                    </td>
                    <td>: Muhammad Fajrin</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Ketua Bidang<br>Hubungan Kelembagaan, Komunikasi dan Informasi</li>
                        </ul>
                    </td>
                    <td>: Rulli Jaya Santika</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Ketua Bidang<br>Aspirasi dan Solusi</li>
                        </ul>
                    </td>
                    <td>: Teguh Setyawan</td>
                </tr>
            <!-----------------------------------sekretaris--------------------------------------------->
                <tr class="ketua">
                    <td>SEKRETARIS JENDRAL</td>
                    <td>: HENDRA NOPRIANSYAH</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Wakil Sekretaris Jendral<br>Organisasi dan Keanggotaan</li>
                        </ul>
                    </td>
                    <td>: Arif Budiman</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Wakil Sekretaris Jendral<br>Perlindungan dan Pembelaan</li>
                        </ul>
                    </td>
                    <td>: Nambela Rama Waspada</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Wakil Sekretaris Jendral<br>Kesejahteraan dan Pengembangan Bisnin</li>
                        </ul>
                    </td>
                    <td>: Indrajid Nurmukti</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Wakil Sekretaris Jendral<br>Hubungan Kelembagaan, Komunikasi dan Informasi</li>
                        </ul>
                    </td>
                    <td>: Ahmad Feisal Santoso</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Wakil Sekretaris Jendral<br>Aspirasi dan Solusi</li>
                        </ul>
                    </td>
                    <td>: Candra Kurniawan</td>
                </tr>

                <!-----------------------------bendahara----------------------------------------->
                <tr class="ketua">
                    <td>BENDAHARA UMUM</td>
                    <td>: DUDUNG TH AJIYOSO</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Wakil Bendahara Umum I</li>
                        </ul>
                    </td>
                    <td>: Ibnu Rusdan</td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Wakil Bendahara Umum II</li>
                        </ul>
                    </td>
                    <td>: Usfiari Usmar</td>
                </tr>
                <!-------------------------departemen organisasi dan keanggotaan----------------->
            <tr class="ketua">
                <td>DEPARTEMEN ORGANISASI DAN KEANGGOTAAN</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Bimo Arianto</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>
                    <ul>
                        <li>Santo Tulus Aji</li>
                        <li>Ratu Ayu Astri</li>
                    </ul>
                </td>
            </tr>
            {{--Departemen Pendidikan dan Pengembangan SDM--}}
            <tr class="ketua">
                <td>DEPARTEMEN PENDIDIKAN DAN PENGEMBANGAN SDM</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Deddy Anggun Syahrial</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>
                    <ul>
                        <li>Ahmad Fauzan</li>
                        <li>Ricky Akbar Nasution</li>
                    </ul>
                </td>
            </tr>
            {{--Departemen Kerohanian, Sosial Budaya dan Olah Raga--}}
            <tr class="ketua">
                <td>DEPARTEMEN KEROHANIAN, SOSIAL BUDAYA DAN OLAH RAGA</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Arif Hary Prasetya</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>
                    <ul>
                        <li>Adie Mulyadi Setyawan</li>
                        <li>Zahra Efrina</li>
                    </ul>
                </td>
            </tr>
            {{--Departemen Perlindungan dan Pembelaan--}}
            <tr class="ketua">
                <td>DEPARTEMEN PERLINDUNGAN DAN PEMBELAAN</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Alif Maulana Arifin</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>
                    <ul>
                        <li>Mochammad Rifi JN</li>
                        <li>Jonggi JM Panjaitan</li>
                    </ul>
                </td>
            </tr>
            {{--Departemen Kesejahteraan--}}
            <tr class="ketua">
                <td>DEPARTEMEN KESEJAHTERAAN</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Sony Eka Santana</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>
                    <ul>
                        <li>Faruk Rohma Suha</li>
                        <li>Fani Syafani</li>
                    </ul>
                </td>
            </tr>
            {{--Departemen Pengembangan Bisnis--}}
            <tr class="ketua">
                <td>DEPARTEMEN PENGEMBANGAN BISNIS</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Yusuf</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>
                    <ul>
                        <li>Mangasa Laorensius Oloan</li>
                        <li>Hasyirun Niam</li>
                        <li>Rudy Firmana</li>
                    </ul>
                </td>
            </tr>
            {{--Departemen Komunikasi dan Informasi--}}
            <tr class="ketua">
                <td>DEPARTEMEN KOMUNIKASI DAN INFORMASI</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Afrialdi</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>
                    <ul>
                        <li>Ardiansyah</li>
                        <li>Krismian Sitompul</li>
                    </ul>
                </td>
            </tr>
            {{--Departemen Hubungan Antar Lembaga--}}
            <tr class="ketua">
                <td>DEPARTEMEN HUBUNGAN ANTAR LEMBAGA</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Niken Tri Mahayani</td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td>
                    <ul>
                        <li>Tantrama Hardra</li>
                        <li>Malinda Budi Wiranti</li>
                    </ul>
                </td>
            </tr>
            {{--Departemen Khusus Aspirasi dan Solusi--}}
            <tr class="ketua">
                <td>DEPARTEMEN KHUSUS ASPIRASI DAN SOLUSI</td>
                <td></td>
            </tr>
            <tr>
                <td>Ketua</td>
                <td>: Maulana Siregar</td>
            </tr>
            <tr>
                <td>Anggota
                    <ul>
                        <li>Kantor Pusat</li>
                        <li style="list-style: none">&nbsp;</li>
                        <li style="list-style: none">&nbsp;</li>
                        <li style="list-style: none">&nbsp;</li>
                        <li>Wilayah Sumbagut</li>
                        <li>Wilayah Sumbarriau</li>
                        <li>Wilayah Sumbagse</li>
                        <li>Wilayah Banten</li>
                        <li>Wilayah DKI Jakarta</li>
                        <li>Wilayah Jawa Barat</li>
                        <li>Wilayah Jawa Tengah</li>
                        <li>Wilayah Jawa Timur</li>
                        <li>Wilayah Kalimantan</li>
                        <li>Wilayah Sulama</li>
                        <li>Wilayah Banuspa</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li style="list-style: none">&nbsp;</li>
                        <li>Qifrizal Putra</li>
                        <li>Bimo Prasetyo</li>
                        <li>Achmad Rizki Maulana</li>
                        <li>Wahyu Wibowo</li>
                        <li>Sunardi</li>
                        <li>Muhammad Ridwan Lubis</li>
                        <li>Kukuh Pratama</li>
                        <li>Murdian Putraga</li>
                        <li>Lanzanova</li>
                        <li>Nining Kania</li>
                        <li>Dedi Hermanto</li>
                        <li>Asnar Ahdyansyah</li>
                        <li>Achmad Syubaiki</li>
                        <li>Muhammad Irfan</li>
                        <li>Sukardin</li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>


        <hr>

        <figure class="org-chart cf" style="height: 2000px;">
            <ul class="administration">
                <li>
                    <ul class="director">
                        <li>
                            <a href="#"><span>Ketua Umum<br>Eko Purnomo</span></a>
                            <ul class="subdirector">
                                <li><a href="#"><span>Sekretaris<br>Hendra Nopriansyah</span></a></li>
                            </ul>
                            <ul class="departments cf">
                                <li><a href="#"><span>Administration</span></a></li>

                                <li class="department dep-a">
                                    <a href="#"><span>Urusan Keanggotaan</span></a>
                                    <ul class="sections">
                                        <li class="section"><a href="#"><span>Section A1</span></a></li>
                                        <li class="section"><a href="#"><span>Section A2</span></a></li>
                                        <li class="section"><a href="#"><span>Section A3</span></a></li>
                                        <li class="section"><a href="#"><span>Section A4</span></a></li>
                                        <li class="section"><a href="#"><span>Section A5</span></a></li>
                                    </ul>
                                </li>
                                <li class="department dep-b">
                                    <a href="#"><span>Urusan Komunikasi<br>Afrialdi</span></a>
                                    <ul class="sections">
                                        <li class="section"><a href="#"><span>Ardiansyah</span></a></li>
                                        <li class="section"><a href="#"><span>Krismian Sitompul</span></a></li>
                                        <li class="section"><a href="#"><span>Section B3</span></a></li>
                                        <li class="section"><a href="#"><span>Section B4</span></a></li>
                                    </ul>
                                </li>
                                <li class="department dep-c">
                                    <a href="#"><span>Department C</span></a>
                                    <ul class="sections">
                                        <li class="section"><a href="#"><span>Section C1</span></a></li>
                                        <li class="section"><a href="#"><span>Section C2</span></a></li>
                                        <li class="section"><a href="#"><span>Section C3</span></a></li>
                                        <li class="section"><a href="#"><span>Section C4</span></a></li>
                                    </ul>
                                </li>
                                <li class="department dep-d">
                                    <a href="#"><span>Department D</span></a>
                                    <ul class="sections">
                                        <li class="section"><a href="#"><span>Section D1</span></a></li>
                                        <li class="section"><a href="#"><span>Section D2</span></a></li>
                                        <li class="section"><a href="#"><span>Section D3</span></a></li>
                                        <li class="section"><a href="#"><span>Section D4</span></a></li>
                                        <li class="section"><a href="#"><span>Section D5</span></a></li>
                                        <li class="section"><a href="#"><span>Section D6</span></a></li>
                                    </ul>
                                </li>
                                <li class="department dep-e">
                                    <a href="#"><span>Department E</span></a>
                                    <ul class="sections">
                                        <li class="section"><a href="#"><span>Section E1</span></a></li>
                                        <li class="section"><a href="#"><span>Section E2</span></a></li>
                                        <li class="section"><a href="#"><span>Section E3</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </figure>

    </div>

    @endsection





