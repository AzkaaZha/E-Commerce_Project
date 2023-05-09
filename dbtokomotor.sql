-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 08.39
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtokomotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `logo_merk` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id`, `merk`, `logo_merk`) VALUES
(1, 'Honda', 0x68747470733a2f2f632e746f7034746f702e696f2f705f3236383262706a7276312e706e67),
(2, 'Yamaha', 0x68747470733a2f2f692e706f7374696d672e63632f387a5271535737642f59414d4148412e706e67),
(3, 'TVS', 0x68747470733a2f2f682e746f7034746f702e696f2f705f323638326a67713436312e706e67),
(4, 'Suzuki', 0x68747470733a2f2f692e706f7374696d672e63632f577a343244386b502f53555a554b492e706e67),
(5, 'Kawasaki', 0x68747470733a2f2f642e746f7034746f702e696f2f705f32363832786c617465312e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE `motor` (
  `id` int(11) NOT NULL,
  `nama_motor` varchar(191) NOT NULL,
  `cc` int(11) NOT NULL,
  `harga` int(45) NOT NULL,
  `merk_id` int(45) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` blob NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`id`, `nama_motor`, `cc`, `harga`, `merk_id`, `stok`, `foto`, `deskripsi`) VALUES
(16, 'Aerox Connected/ABS', 155, 30960000, 2, 5, 0x68747470733a2f2f692e746f7034746f702e696f2f705f323637356e6864736e322e706e67, 'Teknologi Blue Core & VVA menjaga mesin 155 cc tetap efisien bahan bakar dan tenaga serta torsi maksimum di setiap putaran mesin.'),
(17, 'PCX 160', 156, 35500000, 1, 5, 0x68747470733a2f2f672e746f7034746f702e696f2f705f323637356164796c77312e706e67, 'Honda PCX160 tersedia dalam pilihan mesin Petrol di Indonesia Scooter baru dari Honda hadir dalam 4 varian. Bicara soal spesifikasi mesin Honda PCX160, ini ditenagai dua pilihan mesin Petrol berkapas'),
(20, 'All New Satria F150', 147, 24990000, 4, 5, 0x68747470733a2f2f662e746f7034746f702e696f2f705f323637357036733732312e706e67, 'Satria F150 adalah sepeda motor kategori underbone 4-Tak. Motor ini diproduksi oleh Suzuki Motor Corporation menggantikan model Suzuki FXR150. Mengusung mesin berteknologi tinggi dengan volume silinder bersih 150 cc, 4 klep digerakkan oleh Camshaft ganda.'),
(21, 'R15', 155, 39875000, 2, 5, 0x68747470733a2f2f682e746f7034746f702e696f2f705f3236373575336f6c74312e706e67, 'Yamaha R15 merupakan motor di kelas sport 150cc pertama yang menggunakan Upside Down pada bagian suspensi depan. Handling lebih sempurna, motor lebih stabil, dan terlihat semakin gagah saat berkendara.'),
(22, 'Vario 125', 125, 22000000, 1, 5, 0x68747470733a2f2f692e746f7034746f702e696f2f705f32363735687268786f312e706e67, 'Honda Vario 125 tersedia dalam pilihan mesin Petrol di Indonesia Scooter baru dari Honda hadir dalam 6 varian.'),
(23, 'XMAX 250', 250, 66000000, 2, 7, 0x68747470733a2f2f6a2e746f7034746f702e696f2f705f323637356233657938322e706e67, 'Yamaha XMAX Connected menjadi matic baru dari lini Yamaha MAXI yang mendukung Y-Connect. Mengusung slogan “Navigate to The Max”, motor ini dilengkapi segudang fitur yang membuat pengendaraan Anda terasa maksimal.'),
(24, 'Ninja 250 ABS SE', 250, 79300000, 5, 5, 0x68747470733a2f2f6b2e746f7034746f702e696f2f705f323637357638717564332e706e67, 'Dibentuk dengan gaya Ninja baru yang tajam, motor Kawasaki Ninja 250 baru memberikan performa lebih hebat dibanding pendahulunya.  Dengan mesin baru yang lebih bertenaga, Ninja 250 memiliki bobot yang lebih ringan.'),
(25, 'Jupiter z1', 115, 19790000, 2, 5, 0x68747470733a2f2f6c2e746f7034746f702e696f2f705f323637357662696568342e706e67, 'Jupiter Z memiliki desain yang futuristic dan aerodinamis, mesin berkapasitas 115cc dengan teknologi fuel injection sehingga performa mesin meningkat 20% lebih dahsyat dan lebih irit bbm, di dukung dengan forged piston yang membuat motor lebih responsive dan irit.'),
(26, 'Callisto Matte Blue', 110, 18900000, 3, 3, 0x68747470733a2f2f672e746f7034746f702e696f2f705f3236373561736a3776312e706e67, 'TVS Callisto yang mengadopsi gaya motor matic Italia.  Kalo dilihat dari desainnya, memang motor ini coba menggabungkan gaya klasik dan modern.  Yang unik, posisi tangki bahan bakar yang berkapasitas 6 liter berada di luar, tepatnya di belakang jok.'),
(27, 'Beat Street', 150, 18650000, 1, 5, 0x68747470733a2f2f682e746f7034746f702e696f2f705f32363735326a336967322e706e67, 'Bicara soal spesifikasi mesin Honda Beat Street, ini ditenagai dua pilihan mesin Petrol berkapasitas 110 cc. Beat Street tersedia dengan transmisi CVT tergantung variannya. '),
(28, 'Gixxer SF 250', 250, 51000000, 4, 5, 0x68747470733a2f2f692e746f7034746f702e696f2f705f323637356a31697036332e706e67, 'Gixxer SF 250 dilengkapi dengan LED headlight, LED taillight, Easy Start System dan Digital Instrument Cluster.  Suzuki juga menghadirkan Split Seat yang diklaim empuk dan bikin nyaman, serta Clip-on Handle Bar yang membantu posisi berkendara lebih ergonomis.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(191) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `motor_id` int(45) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `motor_id`, `quantity`) VALUES
(27, 'Fathir', 'Sawangan', 17, 1),
(28, 'Lampard', 'Citayem', 23, 2),
(29, 'Azka ', 'Depok', 21, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_motor2` (`merk_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan1` (`motor_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `motor`
--
ALTER TABLE `motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `fk_motor2` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan1` FOREIGN KEY (`motor_id`) REFERENCES `motor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
