<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Affiliation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 250px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .product-card h3 {
            font-size: 18px;
            margin: 15px 0 10px;
        }
        .product-card p {
            color: #555;
        }
        .product-card button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .product-card button:hover {
            background-color: #218838;
        }
        #add-product-form {
            margin: 20px auto;
            max-width: 400px;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        #add-product-form input, #add-product-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        #add-product-form button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        #add-product-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Produits en Affiliation</h1>

    <div id="add-product-form">
        <h3>Ajouter un produit</h3>
        <input type="text" id="product-name" placeholder="Nom du produit" required>
        <input type="text" id="product-image" placeholder="Lien de l'image du produit" required>
        <input type="text" id="product-description" placeholder="Description du produit" required>
        <input type="url" id="affiliate-link" placeholder="Lien d'affiliation" required>
        <button onclick="addProduct()">Ajouter le produit</button>
    </div>

    <div class="product-container" id="product-container">
        <!-- Les produits s'afficheront ici -->
    </div>

    <script>
        // Fonction pour ajouter un produit à la page
        function addProduct() {
            const name = document.getElementById('product-name').value;
            const image = document.getElementById('product-image').value;
            const description = document.getElementById('product-description').value;
            const link = document.getElementById('affiliate-link').value;

            // Crée un nouvel élément produit
            const productCard = document.createElement('div');
            productCard.className = 'product-card';

            // Structure du produit
            productCard.innerHTML = `
                <img src="${image}" alt="${name}">
                <h3>${name}</h3>
                <p>${description}</p>
                <button onclick="window.location.href='${link}'">Afficher le produit</button>
            `;

            // Ajoute le produit à la page
            document.getElementById('product-container').appendChild(productCard);

            // Vide les champs du formulaire
            document.getElementById('product-name').value = '';
            document.getElementById('product-image').value = '';
            document.getElementById('product-description').value = '';
            document.getElementById('affiliate-link').value = '';
        }
    </script>

</body>
</html>
