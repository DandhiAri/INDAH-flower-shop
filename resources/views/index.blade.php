@extends('layout.mainH')
@section('content')
    <section id="hero-section">
        <div class="banner-hero">
            <div class="slider">
                <div class="slide">
                    <img src="/img/er.png" alt="hero-banner1">
                </div>
                <div class="slide">
                    <img src="/img/re.png" alt="hero-banner1">
                </div>
            </div>
            <button class="prev-btn">&lt;</button>
            <button class="next-btn">&gt;</button>
        </div>
        <div class="categories">
            {{-- <div class="cate-top-text">
                <div class="cate-sub-title">
                    Kategori Pilihan
                </div>
                <div class="cate-next">
    
                </div>
            </div> --}}
            <div class="category-list">
                @foreach ($products as $item)
                <a class="category" href="{{ route('product',['slug'=>$item->slug]) }}" style="100px">
                    <img src="/img/product/{{ $item->image }}" alt="{{ $item->image }}" style="height:150px;">
                    <div class="cate-title">
                        {{ $item->name }}
                    </div>
                </a>
                @endforeach
            </div>
            <div class="button-link-shop">
                <a href="/shop" >
                    AYO BELANJA SEKARANG 
                </a>
            </div>
        </div>
        
    </section>
    <section id="about-us-section">
            <div class="about-text">
                <div class="text-title">
                    Tentang Kami
                </div>
                <center>
                    <div class="hr"></div>
                </center>
                <div class="about-desc">
                    Toko Indah menjual berbagai karangan bunga papan dan rangkaian bunga seperti bunga handbouqet, bunga standing dan rangkaian bunga lainnya, melalui online dengan harga yang sangat terjangkau dan desain yang sangat menarik serta berkualitas, bisa langsung dikirimkan kelokasi alamat tujuan, dijamin sampai dengan tepat waktu, mari konsultasikan terlebih dahulu untuk pesanannya dan dapatkan penawaran harga spesial
                </div>
            </div>
            <img src="/img/b.jpg" alt="img-about1">
            <img src="/img/w.jpg" alt="img-about2">
            <img src="/img/s.jpg" alt="img-about3" class="img-about3">
            <div class="promosi">
                <div class="promosi-text">
                    BELANJA ONLINE SEKARANG & DAPATKAN DISKON 10%
                </div>
                <a href="{{ route('shop') }}" class="button-promosi">BELI SEKARANG</a>
            </div>
    </section>
    <section id="contact-us-section">
        
        <form action="" method="post">
            <div class="top-contact-text">
                <div class="contact-title">
                    Hubungi kita
                </div>
                <div class="hr1"></div>
            </div>
            <ul>
                <li>
                    <label for="email">Email</label>
                </li>
                <li>
                    <input type="email" name="email" id="">
                </li>
                <li>
                    <label for="pesan">Pesan</label>
                </li>
                <li>
                    <textarea name="msg" id="" cols="30" rows="10"></textarea>
                </li>
                <li class="cont-submit">
                    <input type="submit" value="KIRIM">
                </li>
            </ul>
        </form>
    </section>
    <footer>
        Copyright@tim3web
    </footer>
@endsection
