use connection;

-- ======================DATABASE MOCOOL=================================

CREATE TABLE pelatih(
ID_pelatih CHAR(6) NOT NULL PRIMARY KEY,
nama_pelatih VARCHAR(20),
asal_pelatih VARCHAR(20),
umur_pelatih INT(2),
nomor_telepon INT(13));

CREATE TABLE program(
kode_latihan CHAR(6) NOT NULL PRIMARY KEY,
latihan VARCHAR(30),
ID_pelatih VARCHAR(50));

CREATE TABLE atlet(
ID_atlet CHAR(6) NOT NULL PRIMARY KEY,
nama_atlet VARCHAR(30),
umur_atlet INT(2),
tingkatan_atlet VARCHAR(20),
asal_atlet VARCHAR(50));

CREATE TABLE lapangan(
kode_lapangan CHAR(6) NOT NULL PRIMARY KEY,
urutan_lapangan INT(3),
kapasitas_lapangan VARCHAR(10));

CREATE TABLE jadwal (
    ID_pelatih CHAR(6) PRIMARY KEY,
    ID_atlet CHAR(6) NOT NULL,
    hari VARCHAR(10) NOT NULL,
    durasi INT NOT NULL,
    tingkatan_atlet VARCHAR(20) NOT NULL,
    kode_lapangan CHAR(6) NOT NULL,
	CONSTRAINT fk_atlet FOREIGN KEY (ID_atlet)  REFERENCES atlet (ID_atlet) on delete cascade,
	CONSTRAINT fk_lap FOREIGN KEY (kode_lapangan) REFERENCES lapangan (kode_lapangan) on delete cascade);


CREATE TABLE alat_dan_barang(
kode_barang CHAR(6) NOT NULL PRIMARY KEY,
nama_barang VARCHAR(30) NOT NULL,
stok_barang INT(38));

CREATE TABLE pemasok(
kode_pasok CHAR(6) NOT NULL PRIMARY KEY,
nama_pasok VARCHAR(30) NOT NULL,
jumlah_pasok INT(38));

DROP TABLE atlet;

DROP TABLE pemasok;

-- ==================================================================================================================================
-- Materi DML(Data manipulation language)

INSERT INTO pelatih (ID_pelatih,nama_pelatih,asal_pelatih,umur_pelatih,nomor_telepon)
VALUES ('P001', 'Aldo','Malang', 30, 0895632544);

INSERT INTO pelatih (ID_pelatih,nama_pelatih,asal_pelatih,umur_pelatih,nomor_telepon)
VALUES ('P002', 'Arrafi','Bogor', 28, 0817544963);

INSERT INTO pelatih (ID_pelatih,nama_pelatih,asal_pelatih,umur_pelatih,nomor_telepon)
VALUES ('P003', 'Jason','Bekasi', 32, 0895661241);

INSERT INTO pelatih (ID_pelatih,nama_pelatih,asal_pelatih,umur_pelatih,nomor_telepon)
VALUES ('P004', 'Indira','Yogyakarta', 35, 088934522);
SELECT * FROM pelatih;

INSERT INTO program(kode_latihan,latihan ,ID_pelatih) 
VALUES ('L001','Forehand','P001');
INSERT INTO program(kode_latihan,latihan ,ID_pelatih) 
VALUES ('L002','Backhand','P002');
INSERT INTO program(kode_latihan,latihan ,ID_pelatih) 
VALUES ('L003','Servis','P003');
INSERT INTO program(kode_latihan,latihan ,ID_pelatih) 
VALUES ('L004','Rally','P004');
SELECT * FROM program;

 INSERT INTO atlet (ID_atlet,nama_atlet,umur_atlet,tingkatan_atlet,asal_atlet) 
 VALUES ('A001','Santoso',15,'Beginner','Yogyakarta');
 INSERT INTO atlet (ID_atlet,nama_atlet,umur_atlet,tingkatan_atlet,asal_atlet) 
 VALUES ('A002','Marsha',12,'Beginner','Palembang');
 INSERT INTO atlet (ID_atlet,nama_atlet,umur_atlet,tingkatan_atlet,asal_atlet) 
 VALUES ('A003','Dion',20,'Advanced','Jakarta');
 INSERT INTO atlet (ID_atlet,nama_atlet,umur_atlet,tingkatan_atlet,asal_atlet) 
 VALUES ('A004','Adel',18,'Intermediate','Bali');
 INSERT INTO atlet (ID_atlet,nama_atlet,umur_atlet,tingkatan_atlet,asal_atlet) 
 VALUES ('A005','Rani',21,'Intermediate','Tangerang');
 INSERT INTO atlet (ID_atlet,nama_atlet,umur_atlet,tingkatan_atlet,asal_atlet) 
 VALUES ('A006','Henri',26,'Advanced','Yogyakarta');
SELECT * FROM atlet;

INSERT INTO lapangan(kode_lapangan,urutan_lapangan,kapasitas_lapangan) 
VALUES ('Lp001',1,'Double');
INSERT INTO lapangan(kode_lapangan,urutan_lapangan,kapasitas_lapangan) 
VALUES ('Lp002',2,'Single');
INSERT INTO lapangan(kode_lapangan,urutan_lapangan,kapasitas_lapangan) 
VALUES ('Lp003',3,'Double'); 
SELECT * FROM lapangan;

INSERT INTO jadwal(ID_pelatih,ID_atlet,hari,durasi,tingkatan_atlet,kode_lapangan) 
VALUES ('P001','A005','Kamis',200,'Intermediate', 'Lp003');
INSERT INTO jadwal(ID_pelatih,ID_atlet,hari,durasi,tingkatan_atlet,kode_lapangan) 
VALUES ('P002','A002','Selasa',120,'Beginner','Lp002');
INSERT INTO jadwal(ID_pelatih,ID_atlet,hari,durasi,tingkatan_atlet,kode_lapangan) 
VALUES ('P003','A006','Jmuat',240,'Advanced','Lp001');
SELECT * FROM jadwal;

INSERT INTO alat_dan_barang(kode_barang,nama_barang,stok_barang) 
VALUES ('B001','Keranjang Bola',5);
INSERT INTO alat_dan_barang(kode_barang,nama_barang,stok_barang) 
VALUES ('B002','Bola',100);
INSERT INTO alat_dan_barang(kode_barang,nama_barang,stok_barang) 
VALUES ('B003','Net',3); 
SELECT * FROM alat_dan_barang;

INSERT INTO pemasok(kode_pasok,nama_pasok,jumlah_pasok)
  VALUES ('Ps001','Keranjang Bola',3);
INSERT INTO pemasok(kode_pasok,nama_pasok,jumlah_pasok) 
  VALUES ('Ps002','Bola',4);
INSERT  INTO pemasok(kode_pasok,nama_pasok,jumlah_pasok)
  VALUES ('Ps003','Net',5); 
SELECT * FROM pemasok;

UPDATE alat_dan_barang
SET nama_barang = 'Keranjang bola', stok_barang = 10
WHERE kode_barang = 'B001';
SELECT * FROM alat_dan_barang;

-- ==================================================================================================================================
-- Materi use case

-- menampilkan banyaknya record sesuai dengan kriteria tertentu.
SELECT ID_atlet, asal_atlet, count(umur_atlet)
FROM atlet group by ID_atlet,asal_atlet;

-- menampilkan record dengan menghubungkan dua table atau lebih dalam satu perintah
SELECT alat_dan_barang.nama_barang, pemasok.jumlah_pasok
FROM pemasok
inner join alat_dan_barang on alat_dan_barang.kode_barang = pemasok.kode_pasok;

-- menggabungkan dua tabel dalam bentuk baris baru dimana field yang di-SELECT 
-- antara tabel satu dan lainnya adalah harus sama
SELECT kode_pasok, sum(jumlah_pasok) as jumlah_pasokan, count(jumlah_pasok) as banyaknya_pasok
FROM pemasok
WHERE kode_pasok = 'Ps002'
GROUP BY kode_pasok
UNION 
SELECT null as kode_barang, null as jumlah_pasokan, null as banyaknya_pasok
FROM alat_dan_barang
WHERE kode_barang = 'B002'
GROUP BY kode_barang;

-- sebuah fungsi yang berguna untuk menampilkan irisan dari dua tabel. 
SELECT ID_pelatih, kode_lapangan
FROM jadwal
WHERE durasi >= 220
intersect
SELECT nama_barang, stok_barang
FROM alat_dan_barang
WHERE kode_barang = 'B003';

-- INTERSECT mengembalikan persimpangan 2 atau lebih kumpulan data. Jika sebuah record ada 
-- di kedua kumpulan data, maka akan disertakan dalam hasil INTERSECT.  
SELECT ID_pelatih, count(kode_lapangan) as lapangan_tersedia,sum(durasi) as durasi_dalam_menit
FROM jadwal
WHERE durasi <100
GROUP BY ID_pelatih
EXCEPT
SELECT ID_pelatih, count(kode_lapangan) as lapangan_tersedia,sum(durasi) as durasi_dalam_menit
FROM jadwal
WHERE durasi = 200
GROUP BY ID_pelatih;


-- ==================================================================================================================================
-- sub query
SELECT 
   kode_barang, 
   nama_barang, 
   stok_barang
FROM
    alat_dan_barang
WHERE
    stok_barang = (SELECT MAX(stok_barang) FROM alat_dan_barang);

-- ==================================================================================================================================
-- Materi view
--  didefenisikan sebagai ‘tabel virtual’. 
-- Tabel ini bisa berasal dari tabel lain, atau gabungan dari beberapa tabel.
CREATE VIEW view_jadwal_pelatih_lapangan AS
SELECT j.ID_pelatih, p.nama_pelatih AS Nama_Pelatih, j.hari, j.durasi, j.tingkatan_atlet, l.urutan_lapangan AS Urutan_Lapangan, j.kode_lapangan
FROM jadwal j
JOIN pelatih p ON j.ID_pelatih = p.ID_pelatih
JOIN lapangan l ON j.kode_lapangan = l.kode_lapangan;

-- ==================================================================================================================================
-- Materi fungsi, prosedur, trigger
-- procedure merupakan sekumpulan dari perintah-perintah SQL yang tersimpan dalam suatu database 
DELIMITER //
CREATE PROCEDURE PelatihTenis(
	IN ID_pelatih CHAR(6),
    IN nama_pelatih VARCHAR(20),
    IN asal_pelatih VARCHAR(20),
    IN umur_pelatih INT,
    IN nomor_telepon INT
    )
    BEGIN
    DECLARE str VARCHAR(20);
    INSERT INTO pelatih(ID_pelatih,nama_pelatih,asal_pelatih,umur_pelatih, nomor_telepon) VALUES (ID_pelatih,nama_pelatih,asal_pelatih,umur_pelatih, nomor_telepon);
    IF (ROW_COUNT ()>0) THEN 
		SET str = "BERHASIL";
    ELSE
		SET str = "TIDAK BERHASIL";
	END IF;
    SELECT str;
END//

DELIMITER ;

CALL PelatihTenis('P009','Dodo', 'Jambi',29, 095643689);

-- suatu bagian dari program yang digunakan untuk mengerjakan suatu tugas yang
-- mengembalikan suatu nilai untuk dikembalikan ke program pemanggil yang letaknya dipisahkan. 
DELIMITER $$

CREATE FUNCTION LapanganLevel(
	kapasitas VARCHAR(30)
) 
RETURNS VARCHAR(20)
DETERMINISTIC -- mengembalikan hasil yang sama untuk parameter input yang sama  
BEGIN
    DECLARE lapanganLevel VARCHAR(20);
    IF kapasitas = 'Double' THEN
		SET LapanganLevel = 'PLATINUM';
    ELSEIF kapasitas = 'Single' THEN
        SET LapanganLevel = 'SILVER';
    END IF;
	RETURN (LapanganLevel);
END$$
DELIMITER ;

-- perintah MySQL yang memicu suatu kejadian dalam MySQL berupa sebuah aksi CRUD setelah syarat 
CREATE TRIGGER daftar_atlet
    BEFORE UPDATE ON atlet
    FOR EACH ROW 
 INSERT INTO asal_atlet
 SET action = 'update',
     umur_atlet = OLD.umur_atlet,
     tingkatan_atlet = OLD.tingkatan_atlet,
     changedat = NOW();
SHOW TRIGGERS;


-- LOOP
DELIMITER $$
CREATE PROCEDURE Peralatan()
BEGIN
	DECLARE x  INT;
	DECLARE str  VARCHAR(255);
	SET x = 1;
	SET str =  '';
        
	stok_barang:  LOOP
		IF  x > 10 THEN 
			LEAVE  stok_barang;
		END  IF;
            
		SET  x = x + 1;
		IF  (x mod 2) THEN
			ITERATE  stok_barang;
		ELSE
			SET  str = CONCAT(str,x,',');   -- Fungsi CONCAT() menambahkan dua atau lebih ekspresi secara bersamaan. 
		END  IF;
	END LOOP;
	SELECT str;
END$$

DELIMITER ;



