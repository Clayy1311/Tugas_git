<?php
// Kode PHP jika diperlukan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .contact {
            width: 800px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        form p {
            margin: 15px 0;
        }
        label, input, select, textarea {
          
            width: 100%;
            margin-top: 5px;
        }
        input, select, textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
          
        }
        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
      
        .gender-radio {
        
       
            gap: 15px;
            align-items: center;
        }
      
        
        
    </style>
</head>
<body>
    <div class="contact">
        <h1>Contact US!</h1>
        <form action="database.php" method="POST">
            <p>
                <label for="nama">Name:</label>
                <input type="text" id="nama" name="nama" placeholder="Nama lengkap..." />
            </p>
            <p>
                <label for="nim">NIM:</label>
                <input type="number" id="nim" name="nim" placeholder="NIM..." />
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your email..." />
            </p>
            <p class="gender-radio">
                <label>
                    <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" />
                    <span>Laki-laki</span>
                </label>
                <label>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" />
                    <span>Perempuan</span>
                </label>
            </p>
            <p>
                <label for="kelas">Kelas:</label>
                <select id="kelas" name="kelas">
                    <option value="T3A">T3A</option>
                    <option value="T3B">T3B</option>
                    <option value="T3H">T3H</option>
                    <option value="T3I">T3I</option>
                </select>
            </p>
            <p>
                <label for="message">Message:</label>
                <textarea id="message" name="pesan" rows="4" placeholder="Input message..."></textarea>
            </p>
            <p>
                <input type="submit" name="submit" value="Send" />
            </p>
        </form>
    </div>
</body>
</html>
