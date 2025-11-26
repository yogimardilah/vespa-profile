@extends('layouts.app')

@section('title','Contact')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Contact</h1>
            <p class="text-muted max-width-72ch">Hubungi kami melalui telepon, email, atau kunjungi kantor sekolah. Gunakan formulir di bawah untuk mengirim pertanyaan.</p>

            <div class="row g-3 mt-3">
                <div class="col-md-7">
                    <div class="card card-custom p-3">
                        <div class="fw-bold mb-2">Kirim Pesan</div>
                        <form method="post" action="#">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input placeholder="Nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input placeholder="Email" type="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <textarea placeholder="Pesan" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="mb-0"><button class="btn btn-warning" type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card card-custom p-3 mb-3">
                        <div class="fw-bold">Kantor Sekolah</div>
                        <div class="text-muted mt-2">{{ setting('school_address', 'Alamat sekolah belum diatur') }}</div>
                        <div class="text-muted mt-1">Telp: {{ setting('school_phone', '(0266) 0000-000') }} · email: {{ setting('school_email', 'info@sekolah.example') }}</div>
                        <div class="text-muted mt-2">Jam: Senin-Jumat 07:30 - 15:30</div>
                    </div>

                    <div class="card card-custom p-3">
                        <div class="fw-bold mb-2">Lokasi</div>
                        <div id="map"></div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Initialize map centered on school location
                            const lat = parseFloat('{{ setting("school_lat", "-6.9457120233073635") }}');
                            const lng = parseFloat('{{ setting("school_lng", "106.93933584787159") }}');
                            const schoolAddress = '{{ setting("school_address", "Alamat sekolah") }}';
                            const schoolName = '{{ setting("school_name", "Sekolah") }}';
                            
                            const map = L.map('map').setView([lat, lng], 15);
                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '© OpenStreetMap',
                                maxZoom: 19
                            }).addTo(map);
                            L.marker([lat, lng]).addTo(map)
                                .bindPopup(schoolName + '<br>' + schoolAddress)
                                .openPopup();
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
@endsection
