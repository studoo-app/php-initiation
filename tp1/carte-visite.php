<?php
// === INFORMATIONS PERSONNELLES ===
$nom = "BERNARD";
$prenom = "Thomas";
$age_actuel = 24;
$annee_naissance = 2000;

// === INFORMATIONS PROFESSIONNELLES ===
$poste = "Développeur Web Junior";
$entreprise = "TechnoSolutions";
$secteur = "Services numériques";
$annee_debut_experience = 2022;
$annee_debut_entreprise = 2023;

// === COORDONNÉES ===
$telephone = "06 12 34 56 78";
$email = "thomas.bernard@technosolutions.fr";
$adresse = "15 Rue de la Technologie, 75001 Paris";

// === COMPÉTENCES TECHNIQUES ===
$competence1 = "PHP";
$maitrise1 = 75;
$competence2 = "JavaScript";
$maitrise2 = 80;
$competence3 = "HTML/CSS";
$maitrise3 = 90;
$competence4 = "MySQL";
$maitrise4 = 70;

// === CALCULS AUTOMATIQUES ===
$annee_actuelle = 2024;

// Calcul de l'âge (simulation)
$age_calcule = $annee_actuelle - $annee_naissance;

// Calcul de l'expérience
$annees_experience = $annee_actuelle - $annee_debut_experience;

// Calcul de l'ancienneté dans l'entreprise
$anciennete_entreprise = $annee_actuelle - $annee_debut_entreprise;

// Calcul du pourcentage moyen de maîtrise
$maitrise_moyenne = ($maitrise1 + $maitrise2 + $maitrise3 + $maitrise4) / 4;

// === ÉLÉMENTS DYNAMIQUES ===
$slogan = "Développeur passionné par l'innovation et la qualité";
$statut_disponibilite = "Disponible pour nouveaux projets";
$nom_complet = $prenom . " " . $nom;

// Génération d'un ID unique pour cette carte
$id_carte = "CARD-" . date('Y') . "-" . substr(md5($nom_complet), 0, 6);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte de visite - <?php echo $nom_complet; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .carte-visite {
            background: white;
            width: 100%;
            max-width: 800px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 2fr;
            min-height: 500px;
        }

        .section-gauche {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .section-droite {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .nom-principal {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .poste-titre {
            font-size: 18px;
            color: #3498db;
            margin-bottom: 20px;
            font-weight: 300;
        }

        .slogan {
            font-style: italic;
            font-size: 16px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .info-contact {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .info-contact .emoji {
            font-size: 20px;
            margin-right: 10px;
            width: 30px;
        }

        .section-competences {
            margin: 30px 0;
        }

        .competence {
            margin-bottom: 15px;
        }

        .competence-nom {
            font-weight: bold;
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
        }

        .barre-progression {
            background: #ecf0f1;
            height: 8px;
            border-radius: 4px;
            overflow: hidden;
        }

        .progression {
            background: linear-gradient(90deg, #3498db, #2ecc71);
            height: 100%;
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        .stats-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .stat-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #dee2e6;
        }

        .stat-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .disponibilite {
            background: #d4edda;
            color: #155724;
            padding: 10px 15px;
            border-radius: 25px;
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }

        .footer-carte {
            text-align: center;
            font-size: 12px;
            color: #6c757d;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .carte-visite {
                grid-template-columns: 1fr;
                max-width: 500px;
            }

            .nom-principal {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
<div class="carte-visite">
    <!-- Section gauche avec informations principales -->
    <div class="section-gauche">
        <div class="nom-principal"><?php echo $nom_complet; ?></div>
        <div class="poste-titre"><?php echo $poste; ?></div>
        <div class="slogan"><?php echo $slogan; ?></div>

        <div class="info-contact">
            <span class="emoji">🏢</span>
            <span><?php echo $entreprise; ?></span>
        </div>

        <div class="info-contact">
            <span class="emoji">📱</span>
            <span><?php echo $telephone; ?></span>
        </div>

        <div class="info-contact">
            <span class="emoji">✉️</span>
            <span><?php echo $email; ?></span>
        </div>

        <div class="info-contact">
            <span class="emoji">📍</span>
            <span><?php echo $adresse; ?></span>
        </div>
    </div>

    <!-- Section droite avec détails et compétences -->
    <div class="section-droite">
        <div>
            <h2 style="color: #2c3e50; margin-bottom: 20px;">🎯 Compétences Techniques</h2>

            <div class="section-competences">
                <div class="competence">
                    <div class="competence-nom">
                        <span><?php echo $competence1; ?></span>
                        <span><?php echo $maitrise1; ?>%</span>
                    </div>
                    <div class="barre-progression">
                        <div class="progression" style="width: <?php echo $maitrise1; ?>%;"></div>
                    </div>
                </div>

                <div class="competence">
                    <div class="competence-nom">
                        <span><?php echo $competence2; ?></span>
                        <span><?php echo $maitrise2; ?>%</span>
                    </div>
                    <div class="barre-progression">
                        <div class="progression" style="width: <?php echo $maitrise2; ?>%;"></div>
                    </div>
                </div>

                <div class="competence">
                    <div class="competence-nom">
                        <span><?php echo $competence3; ?></span>
                        <span><?php echo $maitrise3; ?>%</span>
                    </div>
                    <div class="barre-progression">
                        <div class="progression" style="width: <?php echo $maitrise3; ?>%;"></div>
                    </div>
                </div>

                <div class="competence">
                    <div class="competence-nom">
                        <span><?php echo $competence4; ?></span>
                        <span><?php echo $maitrise4; ?>%</span>
                    </div>
                    <div class="barre-progression">
                        <div class="progression" style="width: <?php echo $maitrise4; ?>%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="stats-box">
            <h3 style="color: #2c3e50; margin-bottom: 15px;">📊 Statistiques Professionnelles</h3>

            <div class="stat-item">
                <span><strong>Âge :</strong></span>
                <span><?php echo $age_calcule; ?> ans</span>
            </div>

            <div class="stat-item">
                <span><strong>Expérience :</strong></span>
                <span><?php echo $annees_experience; ?> années</span>
            </div>

            <div class="stat-item">
                <span><strong>Ancienneté entreprise :</strong></span>
                <span><?php echo $anciennete_entreprise; ?> an(s)</span>
            </div>

            <div class="stat-item">
                <span><strong>Maîtrise moyenne :</strong></span>
                <span><?php echo number_format($maitrise_moyenne, 1); ?>%</span>
            </div>

            <div class="stat-item">
                <span><strong>Secteur :</strong></span>
                <span><?php echo $secteur; ?></span>
            </div>
        </div>

        <div class="disponibilite">
            ✅ <?php echo $statut_disponibilite; ?>
        </div>

        <div class="footer-carte">
            Carte générée automatiquement • ID: <?php echo $id_carte; ?> • <?php echo date('d/m/Y H:i'); ?>
        </div>
    </div>
</div>
</body>
</html>