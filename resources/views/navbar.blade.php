<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="{{url('/css/navbar.css')}}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).on('click','.vertical-link',function(){$(this).addClass('.active').siblings().removeClass('.active')})
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="
https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="
https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('.vertical-link').click(function() {
                $('.vertical-link.active').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
    <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</head>

<body style="overflow:hidden">
<div class="company-logo">
            <img src="data:image/png;base64,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">
  </div>

  <div class="vertical-contain-menu">
  
    <div class="vertical-navbar">
    
      <div class="username">
            <h3>V</h3>
      </div>
      <a href="#about" class="vertical-link"><i class="material-icons icon">&#xe0e1;</i></a>
      <a href="#about" class="vertical-link"><i class="material-icons icon">&#xe0e1;</i></a>
      <a href="#about" class="vertical-link"><i class="material-icons icon">&#xe0e1;</i></a> 
      <a href="#about" class="vertical-link"><i class="material-icons icon">&#xe0e1;</i></a> 
      <a href="#about" class="vertical-link"><i class="material-icons icon">&#xe0e1;</i></a> 
      <a href="#about" class="vertical-link"><i class="material-icons icon">&#xe0e1;</i></a> 


    </div>
  </div>
  
  <div class="sidebar">
  

    
  <i class='bx bx-menu' id="btn"></i>
  
  
    <div class="logo-details">
    

    
      <!-- <i class='bx bxl-c-plus-plus icon'></i>  -->
      <div class="logo_name"><select class="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="vw">VW</option>
  <option value="audi" selected>Audi</option>
</select></div>
      <!-- <i class="material-icons bx bx-menu" id="btn" style="font-size:36px"></i>  -->
     
    </div>
    
    <ul class="nav-list">
      
      

      
      <!-- <li>
        <i class='bx bx-search'></i>
        <input type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
      </li> -->
      
      <li>
        <a href="#" class="sidebar-link">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name" style="float:right">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#"  class="sidebar-link">
          <i class='bx bx-user'></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="#"  class="sidebar-link">
          <i class='bx bx-chat'></i>
          <span class="links_name">Messages</span>
        </a>
        <span class="tooltip">Messages</span>
      </li>
      <li>
        <a href="#" class="sidebar-link dropdown">
        <i class='bx bx-chat'></i>
        <span class="drop">Dropdown</span>
        </a>
        <span class="tooltip">DropdoWN</span>
      </li>
      <li>
        <a href="#"  class="sidebar-link">
          <i class='bx bx-pie-chart-alt-2'></i> <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
      </li>
      <li>
        <a href="#"  class="sidebar-link">
          <i class='bx bx-folder'></i>
          <span class="links_name">File Manager</span>
        </a>
        <span class="tooltip">Files</span>
      </li>
      <li>
        <a href="#"  class="sidebar-link">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">Order</span>
        </a>
        <span class="tooltip">Order</span>
      </li>

      <li>
        <a href="#"  class="sidebar-link">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <!--<img src="profile.jpg" alt="profileImg">-->
          <div class="name_job">
            <div class="name">Prem Shahi</div>
            <div class="job">Web designer</div>
          </div>
        </div>
        <i class='bx bx-log-out' id="log_out"></i>
      </li>
    </ul>
  </div>
  <!-- <div class="dummy">
            <img src="data:image/png;base64,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" style="height:50%;width:30%;margin-left:60%;">
  </div> -->
  <section class="home-section">
    <div class="text">Dashboard</div>
  </section>
      
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>
</body>

</html>