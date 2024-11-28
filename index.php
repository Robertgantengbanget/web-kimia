<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Dasar Kimia - Kimia Dasar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
           
            color: black;
            padding: 20px;
            text-align: center;
        }
        nav {
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
        
            color: black;
        }
        section {
            margin: 20px;
            padding: 20px;
        
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
          
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px 12px;
            text-align: center;
        }
        th {
           
            color: white;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
        .reaction {
            font-family: "Courier New", monospace;
            
            padding: 10px;
            border-radius: 8px;
        }
        .box {
            border: 2px solid #4CAF50;
            padding: 10px;
            border-radius: 8px;
            margin-top: 20px;
           
        }
    </style>
</head>
<body>

<header>
    <h1>Materi Dasar Kimia</h1>
</header>

<nav>
    <a href="#pengantar">Pengenalan Kimia</a>
    <a href="#unsur">Unsur Kimia</a>
    <a href="#reaksi">Reaksi Kimia</a>
    <a href="#tabel">Tabel Periodik</a>
</nav>

<section id="pengantar">
    <h2>Pengenalan Kimia</h2>
    <p>Kimia adalah cabang ilmu yang mempelajari materi, perubahan-perubahan yang terjadi pada materi tersebut, serta energi yang terlibat dalam perubahan itu.</p>
    <div class="box">
        <p>Kimia mencakup berbagai konsep, seperti struktur atom, ikatan kimia, reaksi kimia, dan hukum-hukum dasar yang mengatur perubahan materi.</p>
    </div>
    <img src="Ad21XABuJmuHQuYHWozBnVFaIvvXaKYveh6tH8Pg.jpg">
</section>

<section id="unsur">
    <h2>Unsur Kimia</h2>
    <p>Unsur adalah zat yang tidak bisa diuraikan lagi menjadi zat yang lebih sederhana dengan reaksi kimia biasa. Ada lebih dari 100 unsur yang dikenal dalam ilmu kimia.</p>
    
    <table>
        <tr>
            <th>Simbol</th>
            <th>Nama</th>
            <th>Nomor Atom</th>
        </tr>
        <tr>
            <td>H</td>
            <td>Hidrogen</td>
            <td>1</td>
        </tr>
        <tr>
            <td>O</td>
            <td>Oksigen</td>
            <td>8</td>
        </tr>
        <tr>
            <td>Na</td>
            <td>Sodium</td>
            <td>11</td>
        </tr>
    </table>

    <p>Berikut adalah contoh beberapa unsur kimia yang penting dalam kehidupan sehari-hari.</p>
</section>

<section id="reaksi">
    <h2>Reaksi Kimia</h2>
    <p>Reaksi kimia adalah proses di mana satu atau lebih zat berubah menjadi zat lain. Selama reaksi kimia, ikatan kimia pada zat yang bereaksi diputus dan ikatan baru terbentuk.</p>
    
    <div class="reaction">
        2H₂ + O₂ → 2H₂O
    </div>
    
    <p>Contoh di atas menunjukkan reaksi pembentukan air dari hidrogen dan oksigen.</p>

    <div class="box">
        <p>Reaksi kimia dapat dikelompokkan menjadi berbagai jenis, seperti reaksi sintesis, penguraian, dan penggantian.</p>
    </div>
</section>

<section id="tabel">
    <h2>Tabel Periodik</h2>
    <p>Tabel periodik adalah tabel yang mengatur unsur-unsur kimia berdasarkan nomor atom dan sifat kimianya. Berikut adalah gambaran umum tabel periodik:</p>
    <img src="tabel-periodik-unsur-kimia.jpeg">
</section>

<footer>
    <p style="text-align: center; background-color: #333; color: white; padding: 10px; margin-top: 20px;">
        &copy; 2024 Materi Dasar Kimia -by Robert Deniro Hutagalung
    </p>
    
</footer>

<script>
    // JavaScript untuk interaktivitas sederhana
    const navLinks = document.querySelectorAll('nav a');
    
    navLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            window.scrollTo({
                top: targetSection.offsetTop - 50,
                behavior: 'smooth'
            });
        });
    });
</script>

</body>
</html>
