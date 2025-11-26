<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Sekolah')</title>
        <style>
            :root{--primary:#0f4c81;--accent:#ffb703;--muted:#6b7280}
            *{box-sizing:border-box}
            body{margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial;line-height:1.5;color:#111827}
            a{color:inherit;text-decoration:none}
            .container{max-width:1100px;margin:0 auto;padding:24px}
            header{background:#fff;border-bottom:1px solid #e5e7eb}
            .nav{display:flex;align-items:center;justify-content:space-between}
            .brand{display:flex;align-items:center;gap:12px}
            .brand img{height:56px}
            .nav-links{display:flex;gap:20px;align-items:center}
            .hero{background:linear-gradient(180deg, var(--primary), #1b6aa8);color:white;padding:48px 0}
            .hero .grid{display:flex;gap:24px;align-items:center}
            .card-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px;margin-top:18px}
            .card{background:white;border-radius:8px;padding:18px;box-shadow:0 6px 18px rgba(16,24,40,0.06)}
            footer{background:#0b1220;color:#cbd5e1;padding:28px 0;margin-top:48px}
            .btn{background:var(--accent);color:#111827;padding:10px 14px;border-radius:6px;font-weight:600}
            @media (max-width:720px){.hero .grid{flex-direction:column;text-align:center}.brand img{height:48px}}
        </style>
    </head>
    <body>
        <header>
            <div class="container nav">
                <div class="brand">
                    <img src="/images/logo.svg" alt="logo">
                    <div>
                        <div style="font-weight:700">Nama Sekolah</div>
                        <div style="color:var(--muted);font-size:13px">Cerdas, Santun, Berprestasi</div>
                    </div>
                </div>
                <nav class="nav-links">
                    <a href="#">Beranda</a>
                    <a href="#profil">Profil</a>
                    <a href="#berita">Berita</a>
                    <a href="#kontak" class="btn">Kontak</a>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap">
                <div>
                    <div style="font-weight:700">Nama Sekolah</div>
                    <div style="color:var(--muted);font-size:13px">Jl. Contoh No.1 · Kota · Provinsi</div>
                </div>
                <div style="color:var(--muted);font-size:13px">© {{ date('Y') }} Nama Sekolah · Semua hak dilindungi</div>
            </div>
        </footer>
    </body>
</html>
