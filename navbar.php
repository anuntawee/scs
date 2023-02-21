<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
          <a href="index.html" class="navbar-brand">
            <h1 class="m-0 text-uppercase text-primary">
              <img src=img/logo_SCS.png alt="" srcset="" width="200px">
            </h1>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
              <a href="index.html" class="nav-item nav-link active">หน้าแรก</a>
              <a href="about.html" class="nav-item nav-link">เกี่ยวกับเรา</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >สินค้า</a
                >
                <div class="dropdown-menu m-0">
                  <a href="blog.html" class="dropdown-item">Blog Grid</a>
                  <a href="detail.html" class="dropdown-item">Blog Detail</a>
                  <a href="team.html" class="dropdown-item">The Team</a>
                  <a href="testimonial.html" class="dropdown-item"
                    >Testimonial</a
                  >
                  <a href="appointment.html" class="dropdown-item"
                    >Appointment</a
                  >
                  <a href="search.html" class="dropdown-item">Search</a>
                </div>
              </div>
              <a href="service.html" class="nav-item nav-link">บริาการ</a>
              <a href="price.html" class="nav-item nav-link">ข่าว & กิจกรรม</a>

              <a href="contact.html" class="nav-item nav-link">ติดต่อเรา</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->
  </body>
   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   
   <!-- Template Javascript -->
   <script src="js/main.js"></script>
</html>
