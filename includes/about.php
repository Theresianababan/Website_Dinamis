<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Saya</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Portfolio Section -->
    <section id="portfolio" class="container py-5">
        <h2 class="text-center mb-4">Aboutme</h2>
        <div class="row">
            <?php
            // Array proyek dengan data dinamis
            $Aboutme = [

                [
                    "title" => "About Me",
                    "image" => "assets/images/Aboutme.jpg",
                    "description" => "keseharian saya sebagai anak rantau",
                    "link" => "https://github.com/Theresianababan/Aboutme.git"
                ],
                

            ];

            // Menampilkan setiap proyek dalam array
            foreach ($Aboutme as $Aboutme) {
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="' . $Aboutme["image"] . '" class="card-img-top" alt="' . $Aboutme["title"] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $Aboutme["title"] . '</h5>
                            <p class="card-text">' . $Aboutme["description"] . '</p>
                            <a href="' . $Aboutme["link"] . '" class="btn btn-primary" target="_blank">Lihat Detail</a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>