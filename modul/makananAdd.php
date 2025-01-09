<!DOCTYPE html>
<html>

<head>
    <style>
    .container {
        max-width: 600px;
        margin: 2rem auto;
        padding: 2rem;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .form-header {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #e74c3c;
    }

    .form-header h2 {
        margin: 0;
        font-size: 1.8rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #34495e;
        font-weight: 500;
    }

    .form-control {
        width: 100%;
        padding: 0.8rem;
        border: 2px solid #ddd;
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: #3498db;
    }

    .button-group {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        cursor: pointer;
        transition: transform 0.2s, opacity 0.2s;
    }

    .btn:hover {
        transform: translateY(-2px);
        opacity: 0.9;
    }

    .btn-primary {
        background-color: #2ecc71;
        color: white;
        flex: 1;
    }

    .btn-reset {
        background-color: #e74c3c;
        color: white;
        flex: 1;
    }

    .btn-cancel {
        background-color: #95a5a6;
        color: white;
        flex: 1;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-header">
            <h2>Tambah Data Makanan Daerah</h2>
        </div>

        <form method="post" action="?page=makananAddProses">
            <div class="form-group">
                <label for="nama_makanan">Nama Makanan</label>
                <input type="text" id="nama_makanan" name="nama_makanan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="daerah_makanan">Daerah Makanan</label>
                <input type="text" id="daerah_makanan" name="daerah_makanan" class="form-control" required>
            </div>

            <div class="button-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-reset">Reset</button>
                <button type="button" class="btn btn-cancel" onclick="document.location='?page=makanan'">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>