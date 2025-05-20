<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equipment Booking</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <style>
      body {
        font-family: Arial, sans-serif;
      }

      .equipment-card {
        position: relative;
        aspect-ratio: 3 / 4;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: left;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        text-align: left;
        height: 100%;
      }

      .equipment-card img {
        width: 100%;
        height: 70;
        object-fit: cover;
      }

      .mostly-borrowed {
        position: absolute;
        top: 5px;
        left: 5px;
        background-color: #007bff;
        color: white;
        font-size: 12px;
        padding: 2px 6px;
        border-radius: 4px;
      }

      .header {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-top: 20px;
      }

      .logo-container {
        display: flex;
        align-items: center;
        width: 100%;
      }

      .logo-container img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 2px solid black;
      }

      .separator {
        width: 100%;
        height: 2px;
        background-color: rgb(7, 7, 7);
        margin-top: 10px;
      }

      .bottom-nav {
        position: fixed;
        bottom: -20px; /* Menurunkan posisi navigasi bawah */
        width: 100%;
        background: #fff;
        border-top: 1px solid #ddd;
        display: flex;
        justify-content: space-around;
        padding: 15px 0; /* Menambah ruang agar lebih turun */
      }

      .text-center.mt-4.mb-5 {
        margin-bottom: 80px; /* Menambahkan ruang agar Book Now! terlihat penuh */
      }

      .bottom-nav a {
        text-align: center;
        text-decoration: none;
        color: black;
        font-size: 14px;
      }
    </style>
  </head>

  <body>
    <div class="container mt-3">
      <div class="header">
        <div class="logo-container">
          <img
            src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (10).png"
            alt="Logo"
          />
        </div>
        <div class="separator"></div>
        <h2 class="fw-bold mt-2">Equipment</h2>
      </div>
      <p>All list of goods, please tap the goods to start booking</p>

      <div class="row">
        <!-- Barang 1 - 4 -->
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <span class="mostly-borrowed">Mostly Borrowed</span>
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (5).png"
              alt="Lighting Set Sony"
            />
            <p>Lighting Set Sony</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (2).png"
              alt="Canon Lens EFS"
            />
            <p>Canon Lens EFS 18-135mm</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (3).png"
              alt="Sony Camcorder"
            />
            <p>Sony PXW-Z90T XDCAM camcorder</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <span class="mostly-borrowed">Mostly Borrowed</span>
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (11).png"
              alt="Canon EOS 40000"
            />
            <p>Canon EOS 40000</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>

        <!-- Barang 5 - 8 -->
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <span class="mostly-borrowed">Mostly Borrowed</span>
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (29).png"
              alt="TaffSTUDIO Softbox Reflektor"
            />
            <p>TaffSTUDIO Softbox Reflektor</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (26).png"
              alt="Inbex Lighting Studio Softbox"
            />
            <p>InbexLighting Studio Softbok</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (9).png"
              alt="Tripod LED 204 Video Lighting"
            />
            <p>Tripod LED 204 Video Lighting</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (30).png"
              alt="F8 Reflek Lens 900 mm"
            />
            <p>F8 Reflek Lens 900 mm</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>

        <!-- Barang 9 - 12 -->
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (24).png"
              alt="Sony FE 24-70mm F2.8 GM LENS"
            />
            <p>Sony FE 24-70mm F2.8 GM LENS</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (25).png"
              alt="Canon EFS 18-55mm"
            />
            <p>Canon EFS 18-55mm</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (1).png"
              alt="Nikon D7500"
            />
            <p>Nikon D7500</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (8).png"
              alt="Insta slim-go"
            />
            <p>Instax slim-go</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>

        <!-- Barang 13 - 15 -->
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (12).png"
              alt="Sony Ziess"
            />
            <p>Sony Ziess</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <span class="mostly-borrowed">Mostly Borrowed</span>
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (28).png"
              alt="Black Backdrop kit"
            />
            <p>Black Backdrop kit</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
        <div class="col-3 mb-2">
          <div class="equipment-card">
            <img
              src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (27).png"
              alt="Blue Backdrop kit"
            />
            <p>Blue Backdrop kit</p>
            <span class="text-success">&#x2022; Available</span>
          </div>
        </div>
      </div>

      <div class="text-center mt-4 mb-5">
        <button class="btn btn-dark">Book Now!</button>
      </div>
    </div>

    <div class="bottom-nav">
      <a href="#"
        ><img
          src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (23).png"
          width="24"
          height="24"
        /><br />Profile</a
      >

      <a href="#"
        ><img
          src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (22).png"
          width="24"
          height="24"
        /><br />Menu</a
      >

      <a href="#"
        ><img
          src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (20).png"
          width="24"
          height="24"
        /><br />Riwayat</a
      >

      <a href="#"
        ><img
          src="C:\Users\FARIS\OneDrive\Documents\KULIAH\Mata kuliah semester 4\Pemrograman Web\VS code\FEC5026231036\materialC\Gambar (21).png"
          width="24"
          height="24"
        /><br />Equipment</a
      >
    </div>
  </body>
</html>
