<html>
    <head>
        <style>
            .center{
                text-align: center;
            }
            .f16{
                font-size: 16px;
            }
            .f20{
                font-size: 20px;
            }
            .f12{
                font-size: 12px;
            }
            .justify{
                text-align: justify;
            }
            .bold{
                font-weight: bold;
            }
            section{
                margin:0;
                padding:0;
            }
            .underline{
                border-bottom: 1px solid black;
                width:40%;
                margin-left: 30%;
            }
            .paragraf{
                margin-left: 50px;
                margin-right: 50px;
            }
            .pengesahan{
                display: inline-block;
                width:50%;
                text-align: center;
            }
            .floatleft{
                float:left;
                position: relative;
            }
            .floatright{
                float:right;
                position: relative;
            }
            table{
                width:80%;
            }
            .tdleft{
                width:40%;
                padding-left: 20px;
            }
            .tdright{
                width:60%;
                padding-right: 20px;
            }
            .logo_kop{
                width:85px;
                float:left;
                position:absolute;                
            }
            .right{
                position:absolute;
                float:right;
            }
            .inline-block{
                display: inline-block;
                width:90%;
                margin-left: 10%;
                
            }
        </style>
    </head>
    <body>
        <img src="<?= base_url()?>/assets/images/logo_kab.jpg" class="inline-block logo_kop"/>
        <header class="inline-block center right">
            <section class="f16">PEMERINTAH KABUPATEN CIREBON</section>
            <section class="f16 bold">KECAMATAN KEDAWUNG</section>
            <section class="f20 bold">KANTOR KUWU SUTAWINANGUN</section>
            <section class="f12"><i>Jalan Pramuka No. 13 Telp. (0231)337037 <span class="bold">Cirebon 45153</span></i></section>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <?php foreach ($surat as $row) {} 
        $array1=explode("-",$row->tanggal_pembuatan);
        $tahun=$array1[0];
        $bulan=$array1[1];
        $sisa1=$array1[2];
        $array2=explode(" ",$sisa1);
        $tanggal=$array2[0];
        $array_bulan = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        if($bulan>10){
            $bulan = $array_bulan[$bulan];
        }else{
            $bulan = $array_bulan[$bulan[1]];
        }
             
        ?> 
        <section class="center bold underline f12 ">SURAT KELAHIRAN</section>
        <section class="center f12">Nomor: 142 /<?= $tanggal.$row->id_surat; ?> / <?=$bulan?> / Des / <?=$tahun?></section>
        <br>
        <section class="justify f12">
        <p class="paragraf">Yang bertanda tangan di bawah ini menerangkan bahwa :</p>
        </section>
        <section class="paragraf">
            <table>
                <tr>
                    <td class="f12 tdleft">Di</td>
                    <td class="f12 tdright">: <?= $row->tempat_tanggal_lahir; ?></td>
                </tr>
            </table>
        </section>
        <section class="justify f12">
        <p class="paragraf">Telah lahir anak ke-<?= $row->anak_ke; ?> berjenis kelamin <?= $row->jenis_kelamin; ?> bernama: <?= $row->nama; ?>. Dari seorang ibu bernama: <?= $row->nama_ibu_kandung; ?></p>
        </section>
        
        <section class="paragraf">
            <table>
                <tr>
                    <td class="f12 tdleft">Istri dari</td>
                    <td class="f12 tdright">: <?= $row->nama_ayah_kandung; ?></td>
                </tr>
                <tr>
                    <td class="f12 tdleft">Anak Ke</td>
                    <td class="f12 tdright">: <?= $row->anak_ke; ?></td>
                </tr>
                <tr>
                    <td class="f12 tdleft">Alamat</td>
                    <td class="f12 tdright">: <?= $row->alamat; ?></td>
                </tr>
            </table>
        </section>
        <section class="justify f12">
            <p class="paragraf justify">
            Surat keterangan ini dibuat atas dasar yang sebenarnya.
            </p>
        </section>
        <br>
        <br>
        <br>
        <br>
        
        <section class="pengesahan f12 floatright">
        Sutawinangun, <?= $format = date('d F Y', strtotime($row->tanggal_pembuatan)); ?><br>
            Kuwu Sutawinangun,
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <span class="bold underline">HERI HERIYADI</span>
        </section>
    </body>
</html>