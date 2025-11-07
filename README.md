# 🤖🧪 Lab IVSS – Portal Management System

> **Portal Lab Intelligent Vision and Smart System – Politeknik Negeri Malang**  
> Proyek Basis Data untuk PBL | Computer Vision & Smart Systems Lab

[![PHP](https://img.shields.io/badge/PHP-Native-777BB4?style=flat&logo=php&logoColor=white)](https://www.php.net/)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-13+-336791?style=flat&logo=postgresql&logoColor=white)](https://www.postgresql.org/)
[![Status](https://img.shields.io/badge/Status-Active-success?style=flat)](https://github.com/hafisc/lab-ivss-pbl)
[![License](https://img.shields.io/badge/License-Campus%20Project-orange?style=flat)](https://github.com/hafisc/lab-ivss-pbl)
[![Made by](https://img.shields.io/badge/Made%20by-@hafisc-blue?style=flat)](https://github.com/hafisc)

---

## 👋 Apa itu Lab IVSS?

**Lab IVSS (Intelligent Vision and Smart System)** adalah laboratorium riset di Politeknik Negeri Malang yang fokus pada **Computer Vision**, **AI**, dan **IoT Smart Systems**. Portal web ini dibuat sebagai bagian dari tugas **PBL (Project Based Learning)** untuk memfasilitasi manajemen lab, member, riset, dan dokumentasi kegiatan.

Web ini jadi pusat informasi buat dosen pembimbing, mahasiswa aktif, alumni, dan siapa aja yang pengen tahu aktivitas riset di Lab IVSS!

> 📸 _(Screenshot coming soon – portal lagi tahap development!)_

---

## 🔥 Fitur Utama

### 👨‍🏫 **Manajemen Admin & Ketua Lab**
- Dashboard monitoring kegiatan lab real-time
- **Approval bertingkat** pendaftar member baru (Dosen → Ketua Lab)
- Kelola berita, riset, dan peralatan lab
- Settings sistem dan profil
- Role-based access control untuk setiap fitur

### 👨‍🔬 **Manajemen Dosen Pengampu**
- Review pendaftar yang memilih dosen sebagai pembimbing
- **Notifikasi email** otomatis saat ada pendaftar baru
- Approve/reject pendaftaran dengan catatan
- Kelola riset yang dibimbing
- Dashboard statistik member yang dibimbing

### 🧑‍🎓 **Portal Member Lab**
- **Pendaftaran online dengan approval 2 tingkat:**
  1. Review Dosen Pengampu
  2. Review Ketua Lab
- Form registrasi lengkap (biodata + judul penelitian + motivasi)
- **Notifikasi email** untuk setiap tahap approval
- Status: Pending Dosen → Pending Ketua Lab → Active → Alumni

**Dashboard Member:**
- Info NIM, Angkatan, Status keanggotaan
- Info Dosen Pembimbing & status approval
- Statistik: Total riset, publikasi, dokumen
- Quick links ke fitur utama

**Riset Saya:**
- List riset yang diikuti member
- Detail riset dengan info lengkap (team, funding, publications)
- Upload dokumen riset (proposal, laporan, presentasi, dataset)
- Download & manage uploaded documents
- Track document approval status

**Publikasi Saya:**
- Manage publikasi personal (journal, conference, thesis)
- Tab filter: Semua, Published, Draft
- Add/Edit publikasi dengan form lengkap
- Track citation count & DOI
- Link publikasi ke riset terkait
- Upload PDF publikasi

**Profil & Berita:**
- Edit profil lengkap dengan foto
- Berita & event lab terbaru
- Dokumentasi kegiatan lab

### 📄 **Portal Riset & Publikasi**
- Listing riset utama & pendukung
- Kategori: Computer Vision, IoT, Face Recognition, dll
- Status riset: Active, Completed, On-Hold
- Tim riset, funding, publikasi

### 📰 **Berita & Dokumentasi**
- Portal berita kegiatan lab
- Workshop, seminar, publikasi paper
- Kategori berita & search functionality
- Draft & published mode

### 🛠️ **Inventaris Peralatan Lab**
- Katalog peralatan: Kamera, GPU, Sensor, dll
- Kondisi: Baik, Maintenance, Rusak
- Lokasi & spesifikasi lengkap
- Purchase tracking

### 🎨 **Modern UI/UX**
- Tailwind CSS - clean & responsive
- Dark mode ready (coming soon)
- Mobile-friendly design
- Smooth animations & transitions

---

## 🏗️ Arsitektur & Modul

Portal ini dibangun dengan **4 level access control**:

### 🌐 **Public Area** (No Login Required)
- 🏠 Landing page Lab IVSS
- 👨‍🏫 Profil dosen pembimbing
- 📄 Listing riset & publikasi
- 📰 Berita & kegiatan lab
- 📝 **Pendaftaran member online** (dengan form lengkap)
- 📞 Kontak & informasi lab

### 🔐 **Member Area** (Login as Member)
- 🏠 **Dashboard** - Overview riset, publikasi, status member
- 👤 **Profil** - Edit biodata, foto, bio, password
- 🧪 **Riset Saya** - Manage riset yang diikuti
  - List semua riset aktif
  - Upload dokumen (proposal, laporan, dataset, presentasi)
  - Download dokumen yang sudah diupload
  - Track approval status dokumen
- 📜 **Publikasi Saya** - Manage publikasi personal
  - Add/Edit paper, journal, conference
  - Filter: All, Published, Draft
  - Track citations & DOI
  - Upload PDF publikasi
- 📰 **Berita & Event** - Info terbaru lab
- 📊 **Statistik** - Total riset, dokumen, publikasi, citations

### 👨‍🔬 **Dosen Area** (Login as Dosen)
- 📊 Dashboard statistik member bimbingan
- ✅ **Review & approve pendaftar** yang memilih sebagai pembimbing
- 🔔 Notifikasi email otomatis pendaftar baru
- 📝 CRUD riset yang dibimbing
- ⚙️ Settings profil

### 👨‍🏫 **Admin/Ketua Lab Area** (Login as Admin/Ketua Lab)
- 📊 Dashboard analytics lengkap
- ✅ **Approval final** pendaftar (setelah disetujui dosen)
- 📝 CRUD berita, riset, dan member
- 🛠️ Kelola inventaris peralatan
- ⚙️ Settings sistem & manajemen user
- 📧 Email notification management

---

## ⚙️ Tech Stack

| Technology | Purpose |
|------------|---------|
| **PHP Native** | Backend logic tanpa framework (pure PHP OOP) |
| **PostgreSQL** | Database relasional |
| **Tailwind CSS** | Styling modern & responsive |
| **JavaScript (Vanilla)** | Interactivity & real-time search |
| **Apache/Nginx** | Web server (cPanel friendly) |
| **Git** | Version control |

**Why PHP Native?**  
Karena ini tugas kampus yang fokus ke konsep database & SQL query, bukan framework magic ✨

---

## 📁 Struktur Folder

```
lab-ivss-pbl/
├── 📂 app/                    # Core application
│   ├── config/                # Database & app config
│   ├── controllers/           # Business logic (MVC)
│   │   ├── AdminController.php
│   │   ├── AuthController.php
│   │   └── PublicController.php
│   ├── models/                # Database models
│   └── helpers/               # Helper functions
│
├── 📂 view/                   # Views (HTML + PHP)
│   ├── admin/                 # Admin panel views
│   │   ├── berita/            # News management
│   │   ├── research/          # Research management
│   │   ├── members/           # Member management
│   │   ├── equipment/         # Equipment management
│   │   ├── partials/          # Header, sidebar components
│   │   └── settings/          # System settings
│   ├── member/                # Member panel views
│   │   ├── research/          # Research module
│   │   │   ├── index.php      # List riset member
│   │   │   └── detail.php     # Detail riset + dokumen
│   │   ├── publications/      # Publications module
│   │   │   └── index.php      # Manage publikasi personal
│   │   ├── partials/          # Member sidebar, header
│   │   ├── dashboard.php      # Member dashboard
│   │   ├── news.php           # Berita & event
│   │   └── profile.php        # Edit profile
│   ├── public/                # Public pages
│   └── layouts/               # Layout templates
│       ├── admin.php          # Admin layout
│       ├── member.php         # Member layout
│       ├── auth.php           # Auth layout
│       └── pages.php          # Public layout
│
├── 📂 public/                 # Public assets & entry point
│   ├── index.php              # Main entry point
│   ├── assets/
│   │   ├── css/               # Stylesheets
│   │   ├── js/                # JavaScript files
│   │   ├── images/            # Images & logos
│   │   └── uploads/           # User uploaded files
│   │       └── profiles/      # Profile photos
│
├── 📂 database/               # Database scripts
│   └── setup_database.sql     # Complete DB setup
│
├── 📄 .env                    # Environment variables
├── 📄 .env.example            # Env template
└── 📄 README.md               # You're here! 👋
```

---

## 🛠️ Setup & Instalasi

### 📋 Prerequisites
- PHP >= 8.4
- PostgreSQL >= 15
- Apache/Nginx
- Git

### 🚀 Quick Start

```bash
# 1. Clone repository
git clone https://github.com/hafisc/lab-ivss-pbl.git
cd lab-ivss-pbl

# 2. Setup database
psql -U postgres
CREATE DATABASE lab_ivss;
\c lab_ivss
\i database/setup_database.sql
\q

# 3. Konfigurasi environment
cp .env.example .env
# Edit .env sesuai konfigurasi database Anda

# 4. Setup permissions (Linux/Mac)
chmod -R 755 public/assets/uploads

# 5. Jalankan di localhost
# Akses: http://localhost/lab-ivss-pbl/public
```

### 🌐 Deployment ke cPanel

1. Upload semua file ke hosting
2. Arahkan **Document Root** ke folder `public/`
3. Import database via phpPgAdmin
4. Edit `.env` dengan credential hosting
5. Set permission folder `uploads/` ke 755
6. Done! 🎉

### 🔑 Default Login

| Role | Email | Password | Info |
|------|-------|----------|------|
| **Admin** | admin@ivss.polinema.ac.id | admin123 | Full access |
| **Ketua Lab** | ketualab@ivss.polinema.ac.id | admin123 | Dr. Muhammad Hasan |
| **Dosen 1** | budi.dosen@polinema.ac.id | admin123 | Dr. Budi Santoso |
| **Dosen 2** | andi.dosen@polinema.ac.id | admin123 | Dr. Andi Wijaya |
| **Dosen 3** | siti.dosen@polinema.ac.id | admin123 | Dr. Siti Nurhaliza |
| **Member** | ahmad@student.polinema.ac.id | admin123 | Ahmad Fauzi (NIM: 2141720010) |

> ⚠️ **PENTING:** Ganti password default setelah login pertama kali!

### 📊 Sample Data Included

**Database setup sudah include sample data:**
- ✅ **7 Users** (1 admin, 1 ketua lab, 3 dosen, 2 member)
- ✅ **6 Member Registrations** (pending approval)
- ✅ **6 Research Projects** (5 active, 1 completed)
- ✅ **5 News Articles** (4 published, 1 draft)
- ✅ **15 Equipment Items** (lab inventory)
- ✅ **8 Lab Publications** (featured)
- ✅ **15 Notifications** (role-based)
- ✅ **4 Research Members** (Ahmad Fauzi di 4 riset)
- ✅ **5 Research Documents** (uploaded by member)
- ✅ **3 Member Publications** (2 published, 1 draft)

**Testing Member Features:**
- Login sebagai **Ahmad Fauzi** (ahmad@student.polinema.ac.id)
- Dashboard: Lihat 4 riset, 3 publikasi, 5 dokumen
- Riset Saya: 4 riset (Face Recognition, IoT, Object Detection, NLP)
- Publikasi Saya: 2 published, 1 draft
- Upload dokumen riset baru
- Add/Edit publikasi personal

**💡 Testing Role-Based Filtering:**
- Login sebagai **Dosen 1** (budi.dosen) → akan melihat 2 pendaftar (Budi & Yusuf)
- Login sebagai **Dosen 2** (andi.dosen) → akan melihat 2 pendaftar (Siti & Fitri)
- Login sebagai **Dosen 3** (siti.dosen) → akan melihat 1 pendaftar (Rudi)
- Login sebagai **Ketua Lab** → akan melihat 1 pendaftar yang sudah di-approve dosen (Andi Pratama)

### 📧 Email Configuration (Development)

Untuk testing notifikasi email di localhost:
- Install **MailHog** atau **FakeSMTP** untuk SMTP server lokal
- Atau gunakan layanan SMTP testing (Mailtrap, SendGrid Sandbox)
- Edit `app/helpers/EmailHelper.php` untuk konfigurasi SMTP

**Production:** Gunakan email service (SendGrid, AWS SES, Mailgun)

---

## 🗄️ Database Schema

Portal ini menggunakan **12 tabel** dengan relasi terstruktur:

### 📋 Core Tables

```sql
-- 1. USERS - Data pengguna (admin, ketua_lab, dosen, member)
users (
    id, name, email, password, 
    role,  -- 'admin', 'ketua_lab', 'dosen', 'member'
    status, -- 'pending', 'active', 'inactive', 'rejected'
    nim, nip, phone, angkatan, photo, bio,
    created_at, updated_at, last_login
)

-- 2. MEMBER_REGISTRATIONS - Pendaftaran member baru (Approval Bertingkat)
member_registrations (
    id, name, email, nim, phone, angkatan, origin, password,
    research_title, research_id, motivation,
    supervisor_id, supervisor_approved_at, supervisor_notes,
    lab_head_approved_at, lab_head_notes,
    status, created_at, updated_at
)

-- 3. RESEARCH - Data riset lab
research (
    id, title, description, category, image, 
    leader_id, team_members, status,
    start_date, end_date, funding, publications,
    created_at, updated_at
)

-- 4. RESEARCH_MEMBERS - Relasi member dengan riset (Many-to-Many)
research_members (
    id, research_id, user_id,
    role, -- 'leader', 'member', 'contributor'
    joined_at, status,
    UNIQUE(research_id, user_id)
)

-- 5. RESEARCH_DOCUMENTS - Dokumen riset yang diupload member
research_documents (
    id, research_id, uploaded_by,
    title, description, file_name, file_path,
    file_size, file_type, document_type,
    version, status, -- 'draft', 'submitted', 'approved', 'rejected'
    uploaded_at, updated_at
)

-- 6. MEMBER_PUBLICATIONS - Publikasi personal member
member_publications (
    id, user_id, title, authors, year,
    journal, conference, doi, url, abstract,
    citation_count, keywords, publication_type,
    status, -- 'draft', 'submitted', 'under_review', 'published'
    file_path, research_id, published_date,
    created_at, updated_at
)
```

### 📰 Content & System Tables

```sql
-- 7. NEWS - Berita & dokumentasi lab
-- 8. EQUIPMENT - Inventaris peralatan lab
-- 9. PUBLICATIONS - Publikasi lab (featured)
-- 10. NOTIFICATIONS - Notifikasi per role & user
-- 11. SYSTEM_SETTINGS - Pengaturan sistem
```

### 🔗 Relasi Utama

**Member Research Flow:**
```
users (member) ←→ research_members ←→ research
                        ↓
                research_documents
```

**Member Publications:**
```
users (member) → member_publications → research (optional link)
```

**Approval Flow:**
```
member_registrations → supervisor (dosen) → ketua_lab → users (active member)
```

📄 **Full schema:** Lihat `database/setup_database.sql`

---

## 🔗 Routing & URL Structure

### 🌐 Public Routes
```
index.php?page=home             → Landing page
index.php?page=about            → Tentang Lab IVSS
index.php?page=research         → List riset publik
index.php?page=publications     → List publikasi publik
index.php?page=news             → Berita & event
index.php?page=register         → Form pendaftaran member
```

### 🔐 Member Routes
```
index.php?page=member                    → Dashboard member
index.php?page=member-research           → List riset yang diikuti
index.php?page=member-research-detail&id=1  → Detail riset + dokumen
index.php?page=member-publications       → Publikasi personal
index.php?page=member-profile           → Edit profil
index.php?page=member-news              → Berita & event lab
```

### 👨‍🔬 Dosen Routes
```
index.php?page=admin                → Dashboard dosen
index.php?page=admin-applicants     → Review pendaftar
index.php?page=admin-research       → Kelola riset bimbingan
```

### 👨‍🏫 Admin/Ketua Lab Routes
```
index.php?page=admin                → Dashboard admin
index.php?page=admin-applicants     → Approval pendaftar (final)
index.php?page=admin-members        → Kelola member
index.php?page=admin-research       → Kelola riset
index.php?page=admin-news           → Kelola berita
index.php?page=admin-equip          → Kelola peralatan
index.php?page=admin-settings       → Settings sistem
```

---

## 🔄 Member Registration & Approval Workflow

Portal ini menggunakan **sistem approval bertingkat** untuk pendaftaran member baru:

### 📝 **Step 1: Mahasiswa Mendaftar**
Mahasiswa mengisi form registrasi lengkap melalui halaman public:
- Biodata (nama, email, NIM, angkatan, kelas/jurusan)
- **Judul Penelitian** yang akan dikerjakan
- **Pilih Dosen Pengampu** yang akan membimbing
- Motivasi bergabung (minimal 50 karakter)
- Password untuk akun

### 📧 **Step 2: Notifikasi Email Otomatis**
Sistem mengirim email secara otomatis:
- **Email ke Dosen Pengampu:** Notifikasi ada pendaftar baru dengan detail lengkap
- **Email ke Mahasiswa:** Konfirmasi pendaftaran diterima + info tahapan approval

### 👨‍🔬 **Step 3: Review Dosen Pengampu**
Dosen login ke admin panel dan:
- Melihat daftar pendaftar yang memilih dirinya sebagai pembimbing
- Review biodata + judul penelitian + motivasi
- **Approve** (lanjut ke Ketua Lab) atau **Reject** (dengan catatan)
- Status: `pending_supervisor` → `pending_lab_head` atau `rejected_supervisor`

### 👨‍🏫 **Step 4: Review Ketua Lab (Final Approval)**
Setelah disetujui dosen, Ketua Lab melakukan review final:
- Melihat pendaftar yang sudah lolos review dosen
- Verifikasi kelengkapan data dan kesesuaian dengan lab
- **Approve** (akun aktif) atau **Reject** (dengan catatan)
- Status: `pending_lab_head` → `approved` atau `rejected_lab_head`

### ✅ **Step 5: Akun Member Aktif**
Jika disetujui oleh **kedua pihak**:
- Data dipindahkan dari `member_registrations` ke tabel `users`
- Status user: `active`
- Member bisa login dan mengakses member area
- Email notifikasi dikirim: "Selamat! Akun Anda sudah aktif"

### 🔴 **Rejection Handling**
Jika ditolak di salah satu tahap:
- Status berubah menjadi `rejected_supervisor` atau `rejected_lab_head`
- Catatan penolakan disimpan
- Email notifikasi rejection dengan alasan
- Mahasiswa bisa daftar ulang dengan data yang diperbaiki

---

## ✅ Development Roadmap

### ✔️ **Sudah Selesai**
- [x] Database design & setup dengan approval bertingkat
- [x] Authentication system (login/logout) - 4 role support
- [x] **Role-based access control** (Admin, Ketua Lab, Dosen, Member)
- [x] Admin dashboard with statistics
- [x] CRUD Berita (create, read, update, delete, draft mode)
- [x] CRUD Riset dengan kategori & table layout
- [x] CRUD Peralatan lab dengan summary cards
- [x] **Member approval system 2 tingkat** (Dosen → Ketua Lab)
- [x] **Email notification system** (pendaftar + dosen)
- [x] Search & filter functionality dengan real-time search
- [x] Profile settings (update profile + upload photo)
- [x] Security settings (change password)
- [x] Responsive UI (mobile friendly)
- [x] **Dynamic page title** untuk halaman auth
- [x] Stats cards & summary cards di admin pages
- [x] Filter tabs dengan inline action buttons

### ✅ **Recently Completed**
- [x] **Member Dashboard** dengan stats overview (riset, publikasi, dokumen)
- [x] **Member Research Module** - List riset, detail, upload dokumen
- [x] **Member Publications Module** - CRUD publikasi personal dengan filter
- [x] **Research Detail Page** - Info lengkap riset + dokumen list
- [x] **Database schema** untuk research_members, research_documents, member_publications
- [x] **Notification bell** di header untuk semua role
- [x] **Role-based sidebar** dengan menu khusus per role

### 🚧 **In Progress**
- [ ] Backend integration (controller + database queries)
- [ ] File upload handler untuk dokumen & publikasi
- [ ] Public landing page refinement
- [ ] Dosen profile pages (public view)
- [ ] News detail page with comments

### 🔮 **Future Plans**
- [ ] Advanced search & filtering (publikasi, riset)
- [ ] Export data (PDF/Excel)
- [ ] Email templates customization
- [ ] Notification center dengan real-time updates
- [ ] Dark mode toggle
- [ ] Integrasi face recognition untuk presensi
- [ ] Activity logs & audit trail
- [ ] REST API untuk mobile app
- [ ] Multi-language support (ID/EN)
- [ ] Collaboration features (comments, reviews)

---

## 📸 Features Preview

### 🎛️ Admin Dashboard
- **Real-time statistics:** Total member aktif, alumni, riset berjalan, berita published
- **Pending approvals:** Notifikasi pendaftar baru
- **Latest news:** Quick access ke berita terbaru

### 📝 Content Management
- **Rich text editor** untuk berita & riset
- **Drag & drop upload** untuk gambar
- **Live search & filter** di semua halaman list
- **Status management:** Draft → Published workflow

### 👥 Member Management
- **Grid/Table view** untuk list member
- **Filter by status:** Active, Inactive (Alumni), Pending
- **Batch actions:** Set as alumni, activate, delete
- **Profile details:** Foto, bio, kontak, riset yang diikuti

---

## 🤝 Contributing

Proyek ini adalah bagian dari tugas kuliah, tapi pull request tetap welcome! 😊

1. Fork the repository
2. Create feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 👨‍💻 Credits

**Dibuat oleh:** [Hafis](https://github.com/hafisc)  
**Institusi:** Politeknik Negeri Malang - Jurusan Teknologi Informasi  
**Mata Kuliah:** Basis Data & Project Based Learning  
**Tahun:** 2024

### 📚 Referensi & Resources

- **Lab IVSS Official** - Intelligent Vision and Smart System Laboratory
- [Tailwind CSS Documentation](https://tailwindcss.com/)
- [PostgreSQL Tutorial](https://www.postgresql.org/docs/)
- Design inspiration: Modern admin dashboards & SaaS apps

---

## 📄 License

Proyek ini dibuat untuk keperluan **tugas kampus (PBL)** dan bukan untuk komersial.

```
MIT License (Campus Project)

Copyright (c) 2024 Hafis - Lab IVSS Polinema

Permission is granted for educational purposes only.
```

---

## 📞 Contact & Support

Ada pertanyaan atau menemukan bug? 🐛

- **GitHub Issues:** [Create an issue](https://github.com/hafisc/lab-ivss-pbl/issues)
- **Email:** (254107023005@student.polinema.ac.id)
- **Lab IVSS:** Contact your lab supervisor

---

<div align="center">

**⭐ Star this repo if you find it helpful!**

Made with ❤️ by students of Polinema  
🎓 Learning by Building | 🚀 Building by Learning

</div>
