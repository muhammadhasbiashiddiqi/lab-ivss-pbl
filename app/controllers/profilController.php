<?php
// File: profilController.php

class ProfilController
{
    private $db;
    private $model;

    public function __construct($db)
    {
        $this->db = $db;

        // Ganti path ke model Profil
        require_once __DIR__ . '/../models/Profil.php';
        $this->model = new Profil($this->db);

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * Tampilkan form edit Profil.
     */
    public function edit()
    {
        $data = $this->model->ensureRecordExists();

        if (!$data) {
            $_SESSION['error'] = 'Gagal memuat data Profil.';
            header("Location: index.php?page=admin-dashboard");
            return;
        }

        // Variabel untuk digunakan di view
        $profilItem = $data;

        // Asumsi view ada di /view/admin/profil/edit.php
        include __DIR__ . '/../../view/admin/profil/edit.php';
    }

    /**
     * Simpan perubahan Profil.
     */
    public function update() {
    $id = $_POST['id'] ?? 0;
    
    // 1. Ambil data lama (diperlukan untuk path gambar lama)
    $oldData = $this->model->get(); 
    $oldImagePath = $oldData['image'] ?? null;
    $newImagePath = $oldImagePath; 

    // 2. Cek apakah ada file baru yang di-upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadedPath = $this->uploadImage($_FILES['image'], 'profil'); // Folder 'profil'
        
        if ($uploadedPath) {
            $newImagePath = $uploadedPath;
            // Opsional: Hapus file lama jika path lama valid dan bukan default image
            if ($oldImagePath && $oldImagePath !== '/public/uploads/default_profile.png') {
                $old_file_path = __DIR__ . '/../../public/' . $oldImagePath;
                if (file_exists($old_file_path)) {
                    unlink($old_file_path);
                }
            }
        } else {
            // Jika upload gagal, redirect kembali (pesan error diatur di uploadImage)
            header("Location: index.php?page=admin-profil&action=edit");
            exit;
        }
    }
    
    // 3. Sanitasi dan siapkan data untuk Model
    $dataToUpdate = [
        'deskripsi' => htmlspecialchars($_POST['deskripsi'] ?? '', ENT_QUOTES, 'UTF-8'),
        'image' => $newImagePath // Path gambar baru atau lama
    ];
    
    // 4. Panggil Model update
    $success = $this->model->update($id, $dataToUpdate);

    if ($success) {
        $_SESSION['success'] = 'Profil berhasil diupdate!';
    } else {
        $_SESSION['error'] = 'Gagal mengupdate Profil.';
    }

    header("Location: index.php?page=admin-profil&action=edit");
    exit;
}
    private function uploadImage($file, $folder = 'uploads')
    {
        // Path absolut ke direktori upload
        $upload_dir = __DIR__ . '/../../public/uploads/' . $folder . '/';

        // Buat direktori jika belum ada
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $allowed_types = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
        $max_size = 2 * 1024 * 1024; // 2MB

        if (!in_array($file['type'], $allowed_types)) {
            $_SESSION['error'] = 'Tipe file tidak diizinkan. Gunakan JPEG, PNG, atau WebP.';
            return null;
        }

        if ($file['size'] > $max_size) {
            $_SESSION['error'] = 'Ukuran file melebihi batas 2MB.';
            return null;
        }

        // Generate nama file unik
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $new_file_name = uniqid('img_') . '.' . $extension;
        $destination = $upload_dir . $new_file_name;

        // Pindahkan file
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            // HARUS mengembalikan path relatif dari folder public/
            return 'uploads/' . $folder . '/' . $new_file_name;
        } else {
            // ...
            return null;
        }
    }
}