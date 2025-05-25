<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sari-Sari Store</title>


  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Open+Sans&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
      background: #292c36 url('images/dark-texture.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: #8e99ac;
    }

    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 24px;
      letter-spacing: 2px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
    }

    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 60px 40px;
      flex-wrap: wrap;
    }

    .hero-text h1 {
      font-family: 'Playfair Display', serif;
      font-size: 36px;
      color: #fff;
    }

    .hero-text p {
      max-width: 400px;
    }

    .hero-text button {
      margin-top: 20px;
      background-color: #a1a7af;
      border: none;
      padding: 12px 24px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      border-radius: 8px;
    }

    .hero-image img {
      width: 300px;
      border-radius: 50%;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
    }

    .hero-image .price {
      display: block;
      text-align: center;
      margin-top: 10px;
      font-size: 18px;
      color: #fff;
    }

    .products {
      padding: 60px 40px;
    }

    .products h2 {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      color: #fff;
      margin-bottom: 40px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 30px;
    }

    .card {
      background-color: #1e1e1e;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease;
      box-shadow: 0 0 20px rgba(0,0,0,0.4);
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .card img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .card h3 {
      margin: 10px 0 5px;
      font-family: 'Playfair Display', serif;
    }

    .card p {
      color: #ccc;
    }

    .card button {
      background-color: #a1a7af;
      border: none;
      padding: 10px 20px;
      color: #000;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 10px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">Dattebayo</div>
    <nav>
      <ul>
        <li><a href="#">About us</a></li>
        <li><a href="#">Delivery</a></li>
        <li><a href="#">Locations</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Sari-Sari Store</h1>
      <p>Dedicated to bringing you all(not all) your needs.</p>
      <button>Shop Now</button>
    </div>
    <div class="hero-image">
      <img src="images/mlem.jpeg" alt="Begging on my knees" />
      <span class="price">$010</span>
    </div>
  </section>

  <section class="products">
    <h2>Customer Favourites</h2>
    <div class="grid">
      <?php
        
        $products = [
          ['img' => 'k.jpeg', 'name' => 'Da wOrl sHall Kno3 PeyN car', 'price' => '010', 'weight' => '390g'],
          ['img' => 'eh.jpeg', 'name' => 'Pain car', 'price' => '010', 'weight' => '300g'],
          ['img' => 'uh.jpeg', 'name' => 'Uhm car', 'price' => '010', 'weight' => '420g'],
          ['img' => 'no.jpeg', 'name' => 'Sad car', 'price' => '010', 'weight' => '100g'],
          ['img' => 'd.jpeg', 'name' => 'Fluffy car', 'price' => '010', 'weight' => '1300g'],
          
        ];

        foreach ($products as $product) {
          echo '
          <div class="card">
            <img src="images/' . $product['img'] . '" alt="' . $product['name'] . '" />
            <h3>' . $product['name'] . '</h3>
            <p>$' . $product['price'] . ' • ' . $product['weight'] . '</p>
            <button>Add</button>
          </div>
          ';
        }
      ?>
    </div>
  </section>

</body>
</html>
