<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimia Kompleks</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #eef5fc, #cce2f7);
        }

        header {
            background-color: #2176c7;
            color: white;
            text-align: center;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 3rem;
            margin: 0;
        }

        header p {
            font-size: 1.2rem;
            margin: 0.5rem 0 0;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #145ea8;
            padding: 0.5rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        nav a:hover {
            background-color: #0d4a82;
        }

        main {
            padding: 2rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card h3 {
            background-color: #2176c7;
            color: white;
            margin: 0;
            padding: 0.8rem;
            text-align: center;
        }

        .card p {
            padding: 1rem;
            font-size: 1rem;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #2176c7;
            color: white;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Kimia Kompleks</h1>
        <p>Memahami dunia kimia secara mendalam dan interaktif</p>
    </header>
    <nav>
        <a href="#pengantar">Pengantar</a>
        <a href="#konsep">Konsep Utama</a>
        <a href="#eksperimen">Eksperimen</a>
        <a href="#penutup">Penutup</a>
    </nav>
    <main>
        <!-- Pengantar -->
        <section id="pengantar" class="section">
            <h2>Pengantar</h2>
            <p>Kimia adalah ilmu yang mempelajari struktur, sifat, dan perubahan materi. Dari molekul air hingga reaksi nuklir, kimia adalah inti dari banyak fenomena alam.</p>
            <img src="Ad21XABuJmuHQuYHWozBnVFaIvvXaKYveh6tH8Pg.jpg" alt="Ilustrasi Molekul" style="width: 100%; margin-top: 1rem; border-radius: 8px;">
        </section>

        <!-- Konsep Utama -->
        <section id="konsep" class="section">
            <h2>Konsep Utama</h2>
            <div class="grid">
                <!-- Card Atom -->
                <div class="card">
                    <img src="Class-11-Structure-of-an-Atom.jpg" alt="Struktur Atom">
                    <h3>Struktur Atom</h3>
                    <p>Atom adalah partikel terkecil dari suatu elemen yang masih memiliki sifat kimiawi. Komponen utamanya adalah proton, neutron, dan elektron.</p>
                </div>
                <!-- Card Molekul -->
                <div class="card">
                    <img src="molekul-air.jpg" alt="Molekul Air">
                    <h3>Molekul</h3>
                    <p>Molekul terbentuk dari kombinasi atom melalui ikatan kimia. Contoh umum adalah molekul air (H₂O) dan karbon dioksida (CO₂).</p>
                </div>
                <!-- Card Reaksi -->
                <div class="card">
                    <img src="reaksi kimia1.JPG" alt="Reaksi Kimia">
                    <h3>Reaksi Kimia</h3>
                    <p>Reaksi kimia adalah proses di mana zat-zat berubah menjadi zat baru. Contohnya adalah reaksi pembakaran dan reaksi redoks.</p>
                </div>
            </div>
        </section>

        <!-- Eksperimen -->
        <section id="eksperimen" class="section">
            <h2>Eksperimen Kimia</h2>
            <p>Eksperimen adalah cara terbaik untuk memahami konsep kimia. Berikut adalah beberapa eksperimen sederhana:</p>
            <ul>
                <li><b>Reaksi Asam-Basa:</b> Campurkan cuka (asam asetat) dengan soda kue untuk menghasilkan karbon dioksida.</li>
                <li><b>Elektrolisis:</b> Pisahkan air menjadi gas hidrogen dan oksigen menggunakan arus listrik.</li>
                <li><b>Reaksi Endoterm dan Eksoterm:</b> Amati perubahan suhu selama reaksi.</li>
            </ul>
            <img src="OIP.jpg" alt="Ilustrasi Eksperimen Kimia" style="width: 100%; margin-top: 1rem; border-radius: 8px;">
        </section>

        <!-- Penutup -->
        <section id="penutup" class="section">
            <h2>Penutup</h2>
            <p>Kimia membantu kita memahami dunia di sekitar kita. Dengan mendalami ilmu ini, kita dapat menciptakan solusi untuk berbagai masalah di bidang kesehatan, lingkungan, dan teknologi.</p>
        </section>
    </main>
    <footer>
        <p>&copy;Robert Deniro Hutagalung (G1C024038).</p>
    </footer>
</body>
</html>
