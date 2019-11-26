<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="landing.css">
    <title>
        Book Recommender
    </title>

</head>

<body>
    <div class="bigWrapper">

        <div class="navbar box-shadow">
            <div class="logo">
                <img src="../../assets/book-logo-1.png">
            </div>
            <div class="links">
                <a>Top Authors</a>
                <a>Top Books</a>
                <a>Fiction</a>
                <a>Non-Fiction</a>
                <!-- <a>Biographies/Autobiographies</a> -->

                <a>Liked Books</a>
            </div>
            <div class="searchBar">
                <input type="text" placeholder="&#xF002" style="font-family:Arial, FontAwesome" />
                <button>Search</button>
            </div>
            <div class="profileBar">
                <div class="userName">
                    Logged User :
                    <a>Nikhil Babu</a>
                </div>
                <div class="userImg">
                    <img src="../../assets/46668690_2197581593863101_5053659812705861632_n.jpg">
                </div>
            </div>
        </div>
        <div class="details">
            <div class="readBooks">
                <div class="filter">
                    Sort By:
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Genre <span> &#8964 </span></button>
                        <div id="myDropdown" class="dropdown-content">
                          
                          <a href="#trate" onclick="hideDisplay()">Top Rated</a>
                          <a href="#tread">Top Read</a>
                          <a href="#auth">Author</a>
                          <a href="#cost">Cost</a>
                          <a href="#date">Published Date</a>
                        </div>
                      </div> 
                <script>
                /* When the user clicks on the button,
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
                }

                function filterFunction() {
                var input, filter, ul, li, a, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                div = document.getElementById("myDropdown");
                a = div.getElementsByTagName("a");
                for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                    } else {
                    a[i].style.display = "none";
                    }
                }
                } 

                function hideDisplay() {
                    // input1 = document.getElementById("#trate");
                    // input2 = document.getElementById("#tread");
                    // input3 = document.getElementById("#auth");
                    // input4 = document.getElementById("#cost");
                    // input5 = document.getElementById("#date");
                    // input1.style.display = "none";
                // div = document.getElementById("myDropdown");
                // a = div.getElementsByTagName("a");
                // for (i = 0; i < a.length; i++) {
                //     txtValue = a[i].textContent || a[i].innerText;
                //     if (txtValue.toUpperCase().indexOf(filter) > -1) {
                //     a[i].style.display = "";
                //     } else {
                //     a[i].style.display = "none";
                //     }
                // }
                // div.style.display = "none";
                }
                
                </script>
                </div>
                <div class="bookCase">
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                </div>
            </div>
            <div class="recommend">
		<div class="recommendbookCase">
            <div><img src="../../assets/martian.jpg"></div>
            <button class="button"><span>Recommend a book </span></button>
            <button class="button"><span>Buy this book </span></button>
		</div>
            </div>
        </div>
    </div>
</body>

</html>
