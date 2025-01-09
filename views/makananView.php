<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    :root {
        --primary: #27ae60;
        --primary-dark: #219a52;
        --accent: #fdcb6e;
        --danger: #e74c3c;
        --info: #2980b9;
        --gray-100: #f7fafc;
        --gray-200: #edf2f7;
        --gray-300: #e2e8f0;
        --gray-600: #718096;
        --gray-800: #2d3748;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', 'Segoe UI', sans-serif;
        background-color: #f8f9fa;
        color: var(--gray-800);
        line-height: 1.6;
    }

    .container {
        max-width: 1000px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .page-title {
        font-size: 1.75rem;
        font-weight: 600;
        color: var(--gray-800);
        position: relative;
        padding-bottom: 0.5rem;
    }

    .page-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(to right, var(--accent), transparent);
    }

    .card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        padding: 1.5rem;
        margin-top: 1.5rem;
    }

    .search-wrapper {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .search-input {
        width: 100%;
        padding: 0.75rem 1rem 0.75rem 2.5rem;
        border: 1px solid var(--gray-300);
        border-radius: 0.5rem;
        font-size: 0.875rem;
        transition: all 0.3s ease;
    }

    .search-input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(39, 174, 96, 0.1);
    }

    .search-icon {
        position: absolute;
        left: 0.75rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gray-600);
    }

    .add-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background-color: var(--primary);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .add-button:hover {
        background-color: var(--primary-dark);
        transform: translateY(-1px);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .data-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-bottom: 1rem;
    }

    .data-table th {
        background-color: var(--gray-800);
        color: white;
        padding: 1rem;
        font-weight: 500;
        text-align: left;
        font-size: 0.875rem;
        letter-spacing: 0.05em;
    }

    .data-table th:first-child {
        border-top-left-radius: 0.5rem;
    }

    .data-table th:last-child {
        border-top-right-radius: 0.5rem;
    }

    .data-table td {
        padding: 1rem;
        border-bottom: 1px solid var(--gray-200);
        font-size: 0.875rem;
    }

    .data-table tbody tr {
        transition: all 0.3s ease;
    }

    .data-table tbody tr:hover {
        background-color: var(--gray-100);
        transform: scale(1.001);
    }

    .region-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        background-color: #fff3cd;
        color: #856404;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    .action-buttons {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-edit {
        color: var(--info);
        border: 1px solid var(--info);
    }

    .btn-edit:hover {
        background-color: var(--info);
        color: white;
    }

    .btn-delete {
        color: var(--danger);
        border: 1px solid var(--danger);
    }

    .btn-delete:hover {
        background-color: var(--danger);
        color: white;
    }

    .footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1rem;
        padding: 1rem 0;
        border-top: 1px solid var(--gray-200);
    }

    .total-records {
        font-size: 0.875rem;
        color: var(--gray-600);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    @media (max-width: 768px) {
        .dashboard-header {
            flex-direction: column;
            align-items: stretch;
        }

        .action-buttons {
            flex-direction: column;
        }

        .data-table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="dashboard-header">
            <h2 class="page-title">Data Makanan</h2>
            <a href="?page=makananAdd" class="add-button">
                <i class="fas fa-plus"></i>
                Tambah Makanan Baru
            </a>
        </div>

        <div class="card">
            <div class="search-wrapper">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Cari makanan..." id="searchInput">
            </div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th class="center" width="10%">No</th>
                        <th width="30%">Nama Makanan</th>
                        <th width="30%">Daerah Asal</th>
                        <th class="center" width="30%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "includes/config.php";
                    $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                    $sql = mysqli_query($conn, $query);
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td class="center"><?= $nomor++; ?></td>
                        <td><?= htmlspecialchars($data["nama_makanan"]) ?></td>
                        <td>
                            <span class="region-badge">
                                <?= htmlspecialchars($data["daerah_makanan"]) ?>
                            </span>
                        </td>
                        <td class="center">
                            <div class="action-buttons">
                                <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>" class="btn btn-edit">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>"
                                    onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-delete">
                                    <i class="fas fa-trash"></i>
                                    Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="footer">
                <div class="total-records">
                    <i class="fas fa-database"></i>
                    Total Data: <?= mysqli_num_rows($sql) ?>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Search functionality
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const searchValue = this.value.toLowerCase();
        const tableRows = document.querySelectorAll('.data-table tbody tr');

        tableRows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchValue) ? '' : 'none';
        });
    });
    </script>
</body>

</html>