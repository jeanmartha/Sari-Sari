<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sari-Sari Store</title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      background: linear-gradient(to bottom right, #0a1123, #3a3e6c);
      color: #fff;
      line-height: 1.6;
    }

    header {
      background: #0a1123(13, 26, 43, 0.95);
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      color: #fddf89;
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
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 60px 20px;
      background-image: url('images/cat.jpeg'); 
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .hero::after {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.6);
    }

    .hero-text {
      position: relative;
      z-index: 1;
      max-width: 700px;
    }

    .hero-text h1 {
      font-family: 'Playfair Display', serif;
      font-size: 40px;
      color: #fddf89;
    }

    .hero-text p {
      margin: 20px 0;
      font-size: 18px;
      color: #ccc;
    }

    .hero-text button {
      background: #fddf89;
      color: #000;
      border: none;
      padding: 12px 30px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
    }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      color: #fddf89;
      text-align: center;
      margin: 60px 20px 30px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      padding: 0 40px 60px;
    }

    .card {
      background: #152238;
      border-radius: 16px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 0 2px #8387c3;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 12px;
    }

    .card h3 {
      margin: 15px 0 5px;
      font-family: 'Playfair Display', serif;
      font-size: 18px;
    }

    .card p {
      font-size: 14px;
      color: #ccc;
    }

    .card button {
      margin-top: 12px;
      background-color: #fddf89;
      border: none;
      padding: 10px 20px;
      color: #000;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
    }

    .reviews {
      background-color: #0d1a2b;
      padding: 60px 20px;
      text-align: center;
    }

    .review-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .review {
      background: #1a2a3d;
      border-radius: 16px;
      padding: 20px;
      color: #fff;
      font-size: 14px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    .stars {
      color: #fddf89;
      font-size: 18px;
      margin-bottom: 10px;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav ul {
        flex-direction: column;
        gap: 10px;
        margin-top: 10px;
      }

      .hero-text h1 {
        font-size: 30px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">EL GATO</div>
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
      <h1>Fall in Love with Our Signature Goods</h1>
      <p>Curated products for your everyday needs — delivered with care.</p>
      <button>Shop Now</button>
    </div>
  </section>

  <h2 class="section-title">Shop Our Products</h2>
  <div class="grid">
    <?php
      $products = [
        ['img' => 'k.jpeg', 'name' => 'Da wOrl sHall Kno3 PeyN', 'price' => '010', 'weight' => '390g'],
        ['img' => 'eh.jpeg', 'name' => 'am hUrT :(', 'price' => '010', 'weight' => '150g'],
        ['img' => 'uh.jpeg', 'name' => 'hUh', 'price' => '010', 'weight' => '120g'],
        ['img' => 'no.jpeg', 'name' => 'Sad car', 'price' => '010', 'weight' => '420g'],
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

  <section class="reviews">
    <h2 class="section-title">Customer Reviews</h2>
    <div class="review-container">
      <div class="review">
        <div class="stars">★★★★★</div>
        <p>I absolutely love Fluffy Car! So fluffy I could die!. Highly recommend!</p>
      </div>
      <div class="review">
        <div class="stars">★★★★★</div>
        <p>Da wOrl sHall Kno3 PeyN is my go-to for summer. Heavy, solid, and puts me in a unique mood. Long lasting too!</p>
      </div>
    </div>
  </section>

</body>
</html>
