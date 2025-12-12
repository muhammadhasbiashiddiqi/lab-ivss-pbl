<?php

class VisiMisiController {
    private $db;
    private $model; // <--- SANGAT PENTING ADA

    public function __construct($db) {
        $this->db = $db;
        // Jalur ini harus menunjuk ke models/VisiMisi.php
        require_once __DIR__ . '/../models/VisiMisi.php'; 
        $this->model = new VisiMisi($this->db);
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    // Ini adalah method yang DIPANGGIL oleh AdminController
    public function edit() {
        // Baris ini berjalan dengan baik karena $this->model sudah didefinisikan di __construct
        $data = $this->model->ensureRecordExists();
        
        if (!$data) {
             $_SESSION['error'] = 'Gagal memuat data Visi & Misi.';
             header("Location: index.php?page=admin-dashboard");
             return;
        }
        
        $visimisiItem = $data;
        
        // Memuat view edit, di mana $visimisiItem akan digunakan.
        include __DIR__ . '/../../view/admin/visimisi/edit.php';
    }
    public function update() {
        // Ambil ID dan data dari form POST.
        // ID diambil dari hidden field 'id' di form, bukan dari URL.
        $id = $_POST['id'] ?? 0;
        
        if (!$id) {
             $_SESSION['error'] = 'ID Visi & Misi tidak valid untuk update.';
             header("Location: index.php?page=admin-visimisi&action=edit"); // Redirect ke halaman edit
             exit;
        }
        
        // Sanitasi dan ambil data
        // htmlspecialchars di controller ini sudah benar untuk mengamankan data
        // sebelum disimpan ke database (PostgreSQL/pg_query_params yang aman).
        $data = [
            'visi' => htmlspecialchars($_POST['visi'] ?? '', ENT_QUOTES, 'UTF-8'),
            'misi' => htmlspecialchars($_POST['misi'] ?? '', ENT_QUOTES, 'UTF-8')
        ];
        
        $success = $this->model->update($id, $data);
        
        if ($success) {
            $_SESSION['success'] = 'Visi & Misi berhasil diupdate!';
        } else {
            $_SESSION['error'] = 'Gagal mengupdate Visi & Misi. Silakan cek log database.';
        }

        // Redirect kembali ke halaman edit
        header("Location: index.php?page=admin-visimisi&action=edit");
        exit;
    }
}