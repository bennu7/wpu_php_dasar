-- insert into 'mahasiswa' ('id', 'nama', 'nim', 'email', 'juruan', 'gambar') values(
insert into 'mahasiswa' ('id', 'nama', 'nim', 'email', 'juruan', 'gambar') values(
    ('','Lalu Hidayatullah','19113073', 'ibnu@gmail.com', 'Teknik Informatika', 'ibnu.png'),
    ('','Lalu Muhammad Qodirun','19113111', 'deri@gmail.com','Teknik Komputer', 'deri.png'),
    ('','febi','19113112', 'febi@gmail.com','Ekonomi', 'febi.png')
);

create table mahasiswa(
    id int primary key auto_increment,
    nama varchar(100),
    nim char(8),
    email varchar(100),
    jurusan varchar(100),
    gambar varchar(100)   
)