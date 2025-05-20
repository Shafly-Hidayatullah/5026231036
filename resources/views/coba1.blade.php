<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu Navigasi</title>
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
      }

      nav {
        background-color: #333;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .logo {
        font-size: 24px;
        color: white;
        font-weight: bold;
        text-decoration: none;
      }

      .nav-links {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
      }

      .nav-links li {
        display: inline;
      }

      .nav-links a {
        text-decoration: none;
        color: white;
        font-size: 18px;
        transition: 0.3s;
      }

      .nav-links a:hover {
        color: #f4a261;
      }

      /* Responsif untuk layar kecil */
      @media (max-width: 600px) {
        nav {
          flex-direction: column;
          text-align: center;
        }

        .nav-links {
          flex-direction: column;
          gap: 10px;
        }
      }
    </style>
  </head>
  <body>
    <nav>
      <a href="#" class="logo">MyWebsite</a>
      <ul class="nav-links">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Tentang</a></li>
        <li><a href="#">Layanan</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </nav>
  </body>
</html>
