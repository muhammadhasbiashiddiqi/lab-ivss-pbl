<?php
// File: profil.php (Seharusnya menjadi model/Profil.php)

class Profil {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Mengambil data Profil (hanya 1 baris)
     */
    public function get() {
        // Asumsi: Nama tabel adalah 'profil'
        $result = pg_query($this->db, "SELECT * FROM profil LIMIT 1");
        return pg_fetch_assoc($result) ?: null;
    }
    
    /**
     * Memastikan setidaknya satu baris data Profil ada.
     */
    public function ensureRecordExists() {
        $data = $this->get();

        if (!$data) {
            // Data awal jika tabel kosong
            $initialDeskripsi = 'Masukkan deskripsi singkat tentang Profil Lab di sini.';
            $initialImage = '/public/uploads/default_profile.png'; // Path default image

            // Lakukan INSERT data awal dan kembalikan datanya
            $result = pg_query_params(
                $this->db,
                "INSERT INTO profil (deskripsi, image) VALUES ($1, $2) RETURNING id, deskripsi, image",
                [
                    $initialDeskripsi,
                    $initialImage
                ]
            );
            
            return pg_fetch_assoc($result) ?: null;
        }
        
        return $data; 
    }

    /**
     * Mengupdate data Profil
     * @param int $id ID Profil (seharusnya selalu 1)
     * @param array $data Array berisi 'deskripsi' dan 'image' (opsional)
     */
   public function update($id, $data) {
    // $data seharusnya berisi ['deskripsi' => '...', 'image' => '...']
    $query = "UPDATE profil SET deskripsi=$1, image=$2, updated_at=CURRENT_TIMESTAMP WHERE id=$3";
    
    return pg_query_params(
        $this->db,
        $query,
        [
            $data['deskripsi'], // Ambil nilai deskripsi
            $data['image'],     // Ambil path image (bisa path lama atau baru)
            $id
        ]
    );
}
}