<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
      </script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/headerNestedDropdown.css" />

    <style>
      /* inner nav style */
      .side-navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 200px;
        height: 100vh;
        background-color: #6d6d6d85;
        /* padding: 20px; */
        overflow-y: auto;
        z-index: 1; /* Lower z-index to ensure main navbar appears above */
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .side-navbar ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .side-navbar li {
        margin-bottom: 10px;
      }

      .side-navbar a {
        color: #000;
        text-decoration: none;
        font-size: 18px; /* Increase the font size as per your preference */
        font-weight: bold; /* Make the link letters bold */
      }

      .side-navbar a:hover {
        background-color: #e9ecef;
        color: #007bff;
      }

      .main-navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #f8f9fa;
        /* padding: 10px; */
        z-index: 2; /* Higher z-index to ensure it appears above side navbar */
      }
    </style>
  </head>

  <body>
    <!-- css first -->
    <script>0</script>

    <!-- Side Navbar -->
    <div class="side-navbar">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" aria-current="page" href="prawnTypes.php">Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnDiseases.php">Diseases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnFeed.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark link-opacity-75" href="prawnTips.php">Tips</a>
        </li>
      </ul>
    </div>

    <!-- Main Navbar Content -->
    <div class="main-navbar">
      <?php require 'partials/_header.php' ?>
    </div>




    <!-- body -->
    <div style="padding-left: 30px; margin-top:65px; margin-bottom:135px;">

      <!--Prawn Diseases-->

      <div class="container mb-5" style="text-align: justify; max-width:1400px; margin-left:auto; margin-right:auto;">
      <h2 class="mb-4" style="max-width:1400px; margin-left:auto; margin-right:auto;">Prawn Diseases</h2>
        <!-- <p style="font-size: 30px;"><strong>Prawn Diseases</strong></p> -->
        <p style="text-align: justify;">
          <strong>1. White Spot Syndrome Virus (WSSV):</strong> WSSV is a highly contagious viral disease that causes white spots or lesions on the prawn's exoskeleton. It leads to reduced appetite, lethargy, and high mortality rates in prawn farms.
          <br><br>
          <strong>2. Infectious Hypodermal and Hematopoietic Necrosis Virus (IHHNV):</strong> IHHNV is a viral disease that primarily affects the prawn's hepatopancreas, resulting in tissue damage, reduced growth, and increased vulnerability to other infections. It can be transmitted through infected broodstock or contaminated water.
          <br><br>
          <strong>3. Taura Syndrome Virus (TSV):</strong> TSV is a viral disease that affects both prawns and shrimps. It causes symptoms such as lethargy, soft-shell syndrome, and abnormal swimming behavior. TSV can cause significant economic losses in aquaculture farms.
          <br><br>
          <strong>4. Yellow Head Virus (YHV):</strong> YHV is a viral disease that affects prawns and shrimps. It leads to yellow discoloration of the cephalothorax and high mortality rates in infected populations. YHV spreads rapidly and causes severe losses in aquaculture.
          <br><br>
          <strong>5. Bacterial Infections:</strong> Prawns are susceptible to various bacterial infections caused by species like Vibrio spp., Aeromonas spp., and Pseudomonas spp. These infections can result in gill disease, septicemia, and shell diseases. Poor water quality and stressful conditions contribute to bacterial infections.
          <br><br>
          <strong>6. Fungal Infections:</strong> Prawns can be affected by fungal infections caused by species like Fusarium and Lagenidium. Fungal infections lead to lesions, necrosis, and overall poor health in prawns.
          <br><br>
          <strong>7. Environmental Factors:</strong> Environmental conditions play a significant role in the development and severity of prawn diseases. Poor water quality, inadequate nutrition, high stocking densities, and temperature fluctuations weaken the prawn's immune system, making them more susceptible to infections.
          <br><br>
          <strong>8. Disease Prevention and Management:</strong> Effective disease prevention and management in prawns involve implementing strict biosecurity measures, regular health monitoring, and disease prevention protocols. This includes maintaining good pond hygiene, proper disinfection of equipment, and implementing quarantine procedures. Vaccination and selective breeding for disease-resistant traits are also crucial strategies to mitigate disease impact.
        </p>
      </div>
    </div>




    <!-- footer -->
    <?php require 'partials/_footer.php'?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

    <script>
      // Start carousel and set auto-cycle interval
      document.addEventListener("DOMContentLoaded", function () {
        var myCarousel = document.getElementById("carouselExampleCaptions");
        var carousel = new bootstrap.Carousel(myCarousel, {
          interval: 3000, // Change slide every 3 seconds (3000 milliseconds)
          wrap: true // Enable looping of slides
        });
      });
    </script>
  </body>

</html>