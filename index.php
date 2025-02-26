<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résolution d'équation du second degré</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        form {
            margin: 20px 0;
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
        input {
            width: 80%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            color: #fff;
            background-color: #007bff;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Résolution d'une équation du second degré</h2>
        <form method="post" action="traitement.php">
            <label for="a">Coefficient a:</label>
            <input type="number" step="any" name="a" required><br>
            
            <label for="b">Coefficient b:</label>
            <input type="number" step="any" name="b" required><br>
            
            <label for="c">Coefficient c:</label>
            <input type="number" step="any" name="c" required><br>
            
            <button type="submit">Résoudre</button>
        </form>
        
        <?php if (isset($_SESSION['resultat'])): ?>
            <?php $resultat = $_SESSION['resultat']; ?>
            <div class="result">
                <h3>Résultat:</h3>
                <p><?php echo htmlspecialchars($resultat); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
