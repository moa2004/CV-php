<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic CV Template</title>
    <style>
       body {
    font-family: 'cursive', sans-serif;
    background: linear-gradient(to right, #ffffff, #e0e0e0);
    color: #333;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.cv-container {
    background: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    max-width: 900px;
    width: 100%;
    animation: fadeInUp 0.8s ease;
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.header {
    text-align: center;
    border-bottom: 1px solid #aaa;
    padding-bottom: 15px;
    margin-bottom: 35px;
}

.header h1 {
    margin: 0;
    font-size: 2.6em;
    color: #444;
    font-weight: bold;
    animation: fadeIn 1s ease;
}

.header h2 {
    margin: 5px 0;
    font-size: 1.4em;
    color: #666;
    font-weight: normal;
    animation: fadeIn 1.2s ease;
}

.section {
    margin-bottom: 30px;
}

.section h3 {
    border-left: 4px solid #4a90e2;
    padding-left: 15px;
    color: #4a90e2;
    font-size: 1.5em;
    margin-bottom: 15px;
    font-weight: bold;
    animation: slideInLeft 0.8s ease;
}

.section ul {
    list-style: none;
    padding: 0;
}

.section li {
    margin-bottom: 8px;
    font-size: 1.1em;
    color: #555;
}

.contact-info p {
    margin: 5px 0;
    font-weight: normal;
    font-size: 1.1em;
    color: #444;
}

.profile p {
    font-size: 1.2em;
    color: #555;
    line-height: 1.8;
    margin-top: 10px;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideInLeft {
    from { opacity: 0; transform: translateX(-30px); }
    to { opacity: 1; transform: translateX(0); }
}

@media (max-width: 600px) {
    .cv-container {
        padding: 25px;
    }

    .header h1 {
        font-size: 2.2em;
    }

    .header h2 {
        font-size: 1.2em;
    }

    .section h3 {
        font-size: 1.3em;
    }

    .section ul, .profile p {
        font-size: 1em;
    }
}


    </style>
</head>
<body>

    <div class="container">
        <?php include 'cv_data.php'; ?>

        <h1><?= $cv_data['name']; ?></h1>
        <h2><?= $cv_data['title']; ?></h2>

        <div class="contact-info section">
            <p>Email: <?= $cv_data['contact']['email']; ?></p>
            <p>Phone: <?= $cv_data['contact']['phone']; ?></p>
            <p>Location: <?= $cv_data['contact']['location']; ?></p>
        </div>

        <div class="profile section">
            <h2>Profile</h2>
            <p><?= $cv_data['profile']; ?></p>
        </div>

        <div class="experience section">
            <h2>Experience</h2>
            <?php foreach ($cv_data['experience'] as $experience): ?>
                <h3><?= $experience['position']; ?> - <?= $experience['company']; ?></h3>
                <p><em><?= $experience['duration']; ?></em></p>
                <p><?= $experience['description']; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="education section">
            <h2>Education</h2>
            <?php foreach ($cv_data['education'] as $education): ?>
                <h3><?= $education['degree']; ?> - <?= $education['institution']; ?></h3>
                <p><em><?= $education['year']; ?></em></p>
            <?php endforeach; ?>
        </div>

        <div class="skills section">
            <h2>Skills</h2>
            <ul>
                <?php foreach ($cv_data['skills'] as $skill): ?>
                    <li><?= $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="languages section">
            <h2>Languages</h2>
            <ul>
                <?php foreach ($cv_data['languages'] as $language): ?>
                    <li><?= $language; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="hobbies section">
            <h2>Hobbies</h2>
            <ul>
                <?php foreach ($cv_data['hobbies'] as $hobby): ?>
                    <li><?= $hobby; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

</body>
</html>
