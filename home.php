<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moamen Mohammed - CV</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ffffff, #e0e0e0);
            color: #333;
            scroll-behavior: smooth;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: black;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .navbar a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #0056b3;
        }

        .cv-container {
            padding: 100px 20px 80px; 
            max-width: 900px;
            margin: auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .cv-container:hover {
            transform: translateY(-5px);
            opacity: 0.95;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            font-size: 1.8em;
            color: #007bff;
            margin-bottom: 15px;
            border-left: 4px solid #007bff;
            padding-left: 10px;
        }

        .section p, .section ul {
            margin: 10px 0;
            line-height: 1.6;
            font-size: 1.1em;
        }

        .section ul {
            padding-left: 20px;
        }

        .section ul li {
            margin-bottom: 5px;
        }

        @media (max-width: 600px) {
            .navbar a {
                display: block;
                padding: 10px;
            }

            .section h2 {
                font-size: 1.4em;
            }

            .section p, .section ul {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

     - Navbar -->
    <div class="navbar">
        <a href="#contact">Contact</a>
        <a href="#profile">Profile</a>
        <a href="#experience">Experience</a>
        <a href="#internships">Internships</a>
        <a href="#education">Education</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#certifications">Certifications</a>
        <a href="#languages">Languages</a>
        <a href="#hobbies">Hobbies</a>
    </div>

    <div class="cv-container">
        <?php include 'cv_data.php'; ?>

        <div class="section" id="contact">
            <h2>Contact Information</h2>
            <p>Email: <?= $cv_data['contact']['email']; ?></p>
            <p>Phone: <?= $cv_data['contact']['phone']; ?></p>
            <p>Location: <?= $cv_data['contact']['location']; ?></p>
        </div>

        <div class="section" id="profile">
            <h2>Profile</h2>
            <p><?= $cv_data['profile']; ?></p>
        </div>

        <div class="section" id="experience">
            <h2>Experience</h2>
            <?php foreach ($cv_data['experience'] as $experience): ?>
                <h3><?= $experience['position']; ?> - <?= $experience['company']; ?></h3>
                <p><em><?= $experience['duration']; ?></em></p>
                <p><?= $experience['description']; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="section" id="internships">
            <h2>Internships</h2>
            <?php foreach ($cv_data['internships'] as $internship): ?>
                <h3><?= $internship['position']; ?> - <?= $internship['company']; ?></h3>
                <p><em><?= $internship['duration']; ?></em></p>
                <p><?= $internship['description']; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="section" id="education">
            <h2>Education</h2>
            <?php foreach ($cv_data['education'] as $education): ?>
                <h3><?= $education['degree']; ?> - <?= $education['institution']; ?></h3>
                <p><em><?= $education['year']; ?></em></p>
            <?php endforeach; ?>
        </div>

        <div class="section" id="skills">
            <h2>Skills</h2>
            <ul>
                <?php foreach ($cv_data['skills'] as $skill): ?>
                    <li><?= $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section" id="projects">
            <h2>Projects</h2>
            <?php foreach ($cv_data['projects'] as $project): ?>
                <h3><?= $project['name']; ?></h3>
                <p><?= $project['description']; ?></p>
                <p><em>Technologies used: <?= $project['technologies']; ?></em></p>
            <?php endforeach; ?>
        </div>

        <div class="section" id="certifications">
            <h2>Certifications</h2>
            <ul>
                <?php foreach ($cv_data['certifications'] as $certification): ?>
                    <li><?= $certification; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section" id="languages">
            <h2>Languages</h2>
            <ul>
                <?php foreach ($cv_data['languages'] as $language): ?>
                    <li><?= $language; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section" id="hobbies">
            <h2>Hobbies</h2>
            <ul>
                <?php foreach ($cv_data['hobbies'] as $hobby): ?>
                    <li><?= $hobby; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

    <div class="footer">
        <p>&copy; <?= date("Y"); ?> Moamen Mohammed. All rights reserved.</p>
    </div>

</body>
</html>
