CREATE TABLE tb_dosen (
	dosen_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	dosen_nama VARCHAR(50) NOT NULL,
	alamat TEXT DEFAULT NULL,
	tgl_lahir date,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(dosen_id),
	UNIQUE KEY(dosen_nama)
);

CREATE TABLE tb_matkul (
	matkul_id INT(11) NOT NULL AUTO_INCREMENT,
	matkul_id_dosen TINYINT(3) NOT NULL,
	matkul_nama VARCHAR(50) NOT NULL,
	jumlah_sks INT(11) NOT NULL,
	semester INT(11) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(matkul_id),
	UNIQUE KEY(matkul_nama),
	FOREIGN KEY(matkul_id_dosen) REFERENCES tb_dosen(dosen_id) ON UPDATE CASCADE ON DELETE RESTRICT
);
 