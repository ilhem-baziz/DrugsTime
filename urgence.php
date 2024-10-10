<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numéros d'Urgence et Téléconsultation</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Lien CDN pour FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="assets/css/main.css" rel="stylesheet">

    <style>

        
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #1977cc;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
            flex-wrap: wrap;
        }
        .box:hover {
  transform: translateY(-10px);
}
.box {
  background-color: var(--surface-color);
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  position: relative;
  border-radius: 5px;
  transition: 0.5s;
  padding: 30px;
  height: 100%;
}



        .box {
            width: 45%;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }



        .box h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
}
        h2 {
            color: #1977cc;
            font-size: 22px;
            margin-bottom: 15px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            font-size: 18px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        li i {
            font-size: 20px;
            color: #1977cc;
            margin-right: 10px;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
        .emergency {
            font-style: italic;
        }
        .teleconsultation {
            font-style: italic;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #1977cc;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 16px;
        }
        @media (max-width: 768px) {
            .box {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<header>
    Numéros d'Urgence et Téléconsultation
</header>



<div class="container">
    <!-- Numéros d'Urgence -->
    <div class="box">
        <h2>Numéros d'Urgence</h2>
        <ul>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:15" class="emergency">Samu : 15</a></li>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:18" class="emergency">Pompiers : 18</a></li>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:112" class="emergency">Numéro d’urgence européen : 112</a></li>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:3624" class="emergency">SOS Médecins : 3624</a></li>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:114" class="emergency">Urgence Sourds et Malentendants : 114</a></li>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:0800595959" class="emergency">Centre antipoison : 0 800 59 59 59</a></li>
        </ul>
    </div>

    <!-- Médecins pour Téléconsultation -->
    <div class="box">
        <h2>Médecins pour Téléconsultation</h2>
        <ul>
            <li><i class="fas fa-video"></i> <a href="tel:0612345678" class="teleconsultation">Dr. Jean Dupont - Tél :(+33) 06 12 34 56 78</a></li>
            <li><i class="fas fa-video"></i> <a href="tel:0623456789" class="teleconsultation">Dr. Marie Martin - Tél : 06 23 45 67 89</a></li>
            <li><i class="fas fa-video"></i> <a href="tel:0634567890" class="teleconsultation">Dr. Alain Bernard - Tél : 06 34 56 78 90</a></li>
            <li><i class="fas fa-video"></i> <a href="tel:0645678901" class="teleconsultation">Dr. Sophie Lefebvre - Tél : 06 45 67 89 01</a></li>
            <li><i class="fas fa-video"></i> <a href="tel:0656789012" class="teleconsultation">Dr. Claire Dubois - Tél : 06 56 78 90 12</a></li>
            <li><i class="fas fa-video"></i> Plates-formes Téléconsultation : Doctolib, Livi</li>
        </ul>
    </div>

    <!-- Médecins à Domicile -->
    <div class="box">
        <h2>Médecins à Domicile</h2>
        <ul>
            <li><i class="fas fa-ambulance"></i> <a href="tel:0678901234" class="teleconsultation">Dr. Nicolas Fabre - Tél : 06 78 90 12 34</a></li>
            <li><i class="fas fa-ambulance"></i> <a href="tel:0689012345" class="teleconsultation">Dr. Julie Thomas - Tél : 06 89 01 23 45</a></li>
            <li><i class="fas fa-ambulance"></i> <a href="tel:0690123456" class="teleconsultation">Dr. Philippe Leroy - Tél : 06 90 12 34 56</a></li>
            <li><i class="fas fa-ambulance"></i> <a href="tel:0612233445" class="teleconsultation">Dr. Caroline Petit - Tél : 06 12 23 34 45</a></li>
        </ul>
    </div>


<div class="box">
        <h2>Infirmiers à Domicile</h2>
        <ul>
            <li><i class="fas fa-ambulance"></i> <a href="tel:06 63 61 52 52" class="infirmerie">Rutter Solene- Tél : tel:06 63 61 52 52</a></li>
            <li><i class="fas fa-ambulance"></i> <a href="tel:07 66 74 29 74" class="infirmerie">TARLET Alexandra / CHEMAMI Dounia - Tél : 07 66 74 29 74</a></li>
            <li><i class="fas fa-ambulance"></i> <a href="tel:01 46 67 02 49" class="infirmerie">Aïda Chedikian - Tél : 01 46 67 02 49</a></li>
            <li><i class="fas fa-ambulance"></i> <a href="tel:01 45 06 43 00" class="infirmerie">Séverine Bichoffe Spodymek - Tél : 01 45 06 43 00</a></li>
        </ul>
    </div>
</div>
</div>

<footer>
    En cas de besoin, contactez immédiatement le service d'urgence.
</footer>

</body>
</html>
