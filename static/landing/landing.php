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
                        
                        <?php
                            if(isset($_COOKIE["uname"])){ 
                                echo $_COOKIE["uname"]; 
                            } 
                            else{ 
                                echo "Not Logged In"; 
                                } 
                        ?>
                    </div>
                    <?php
                        $host ="localhost";
                        $uname = "root";
                        $pwd = 'root@123';
                        $db_name = "ASD";
                        $temp_user=$_COOKIE["uname"]; 
                                        

                        $file_path = '../../assets';
                        $result = mysqli_connect($host,$uname,$pwd,$db_name) or die("Could not connect to database." .mysqli_error());
                        mysqli_select_db($result,$db_name) or die("Could not select the database." .mysqli_error());
                        $image_query1 = mysqli_query($result,"select pimg from auth where Username= '$temp_user'");
                        while($rows = mysqli_fetch_array($image_query1))
                        {
                            $img_src1 = $rows['pimg'];
                        
                    ?>
                    <div class="userImg">
        
                        <img  src="<?php echo $img_src1; ?>" alt="" />
                        <!--   <p><strong><?php echo $img_name; ?></strong></p>-->
                    </div>

                    <?php
                        }
                    ?>
            </div>
        </div>

        <div class="details">
            <div class="readBooks">
                <div class="filter">
                
                    <div class="dropdown">
                       <!-- <button onclick="myFunction()" class="dropbtn">Sort By <span> &#8964 </span></button> --> 
                        <div id="myDropdown" class="dropdown-content">
                          <a href="#name">Name</a>
                          <a href="#author">Author</a>
                          <a href="#Genre">Genre</a>
                          <a href="#Cost">Cost</a>
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
                
                </script>
                </div>
                <div class="bookCase">
                <!--  <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>
                    <div><img src="../../assets/book4.jpg"></div>-->
                
                <?php
                    $host ="localhost";
                    $uname = "root";
                    $pwd = 'root@123';
                    $db_name = "ASD";
                    $temp_user=$_COOKIE["uname"];                    

                    $file_path = '../../assets';
                    $result = mysqli_connect($host,$uname,$pwd,$db_name) or die("Could     not                           connect to database." .mysqli_error());
                    mysqli_select_db($result,$db_name) or die("Could not select    the database." .mysqli_error());
                    $image_query = mysqli_query($result,"select book_img,book_name  from user_book where username= '$temp_user'");
                    while($rows = mysqli_fetch_array($image_query))
                    {
                        $img_src = $rows['book_img'];
                        $bname = $rows['book_name'];
                ?>
<div >
     
        <img src="<?php echo $img_src; ?>" alt="" />
        <p><?php echo $bname; ?></p>
     
        </div>

        <?php
        }
    ?>
                </div>
            </div>
            <div class="recommend">
            
		<div class="recommendbookCase">
            <a>Recommended Books</a>
            <div><img src="../../assets/martian.jpg"></div>
           <!-- <button class="button"><span>Recommend a book </span></button>-->
            <button class="button"><span>Buy this book </span></button>
		</div>
            </div>
        </div>
    </div>
</body>

</html>
