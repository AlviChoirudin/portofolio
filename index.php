<?php
$nama = "Nama Anda";
$nim = "123456789";
$fakultas = "Fakultas Teknologi Informasi";
$prodi = "Sistem Informasi";
$social_links = [
    "X" => "https://twitter.com",
    "Github" => "https://github.com",
    "IG" => "https://instagram.com",
    "dll..." => "#"
];
$profile_image = "profile.jpg"; // Ganti dengan URL gambar profil
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portofolio</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container">
        <div class="profile-img"></div>
        <div class="info">
            <?php echo "$nama / $nim / $fakultas / $prodi"; ?>
        </div>
        <div class="social-links">
            <?php foreach ($social_links as $name => $link): ?>
                <a href="<?php echo $link; ?>" target="_blank"><?php echo $name; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
