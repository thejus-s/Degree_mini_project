
<?php include 'user_header.php';
$u_id=$_SESSION['user_id'];
extract($_GET);
if (isset($_POST['submit'])){
  extract($_POST);
$qin="INSERT INTO `ratings` VALUES(NULL,'$turf_id','$u_id','$r','$review',NOW())";
insert($qin);
alert('successfully added your ratings');
return redirect('user_home.php');
}
 
  


 ?>


<div style=" background:url('images/fly1.jpg') ; height: 90px; width: 100%; background-size: cover;"  >
    </div>

<div class="feedback">

<!-- <center>  <h3>Turf Name: <?php echo $tname ?></h3><br></center> -->


    <p>Dear Customer,<br>
    Thank you for Using Our <h5>Turf  <?php echo $tname ?> </h5> We would like to know how we performed. Please spare some moments to give us your valuable feedback as it will help us in improving our service.</p>
     
    <h4>Please rate your experience</h4>
     
    <form method="post">
       
    <label>Rating :</label><br>
      
    <span>
        <div class="rate">
            <input type="radio" id="star5" name="r" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="r" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="r" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="r" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="r" value="1" />
            <label for="star1" title="text">1 star</label>
          </div>
    </span>
     
      <br>
      <div class="clear"></div> 
      <hr class="survey-hr"> 
    <label for="m_3189847521540640526commentText">Review :</label><br/><br/>
    <textarea cols="75" name="review" rows="5" ></textarea><br>
    <br>
      <div class="clear"></div> 
    <input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" name="submit" value="Submit your review"> 
    </form>
    </div>

  
    <style>
        .checked {
          color: #eea214 ;
        }
        </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
    .feedback{
        width: 100%;
        max-width: 780px;
        background: #fff;
        margin: 0 auto;
        padding: 15px;
        box-shadow: 1px 1px 16px rgba(0, 0, 0, 0.3);
    }
    .survey-hr{
        margin:10px 0;
        border: .5px solid #ddd;
      }
      .feedback form input,
.feedback form textarea{
    width: 100%;
    border: 1px solid #ddd;
}
.star-rating {
    margin: 25px 0 0px;
   font-size: 0;
   white-space: nowrap;
   display: inline-block;
   width: 175px;
   height: 35px;
   overflow: hidden;
   position: relative;
   background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
   background-size: contain;
 }
 .star-rating i {
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 20%;
    z-index: 1;
    background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
    background-size: contain;
  }
  .star-rating input {
    /* -moz-appearance: none;
    -webkit-appearance: none; */
    opacity: 0;
    display: inline-block;
    width: 20%;
    height: 100%;
    margin: 0;
    padding: 0;
    z-index: 2;
    position: relative;
  }
  .star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
.choice {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    text-align: center;
    padding: 20px;
    display: block;
  }
  span.scale-rating{
  margin: 5px 0 15px;
      display: inline-block;
     
      width: 100%;
     
  }
  span.scale-rating>label {
    position:relative;
      /* -webkit-appearance: none; */
    outline:0 !important;
      border: 1px solid grey;
      height:33px;
      margin: 0 5px 0 0;
    width: calc(10% - 7px);
      float: left;
    cursor:pointer;
  }
  span.scale-rating label {
    position:relative;
      /* -webkit-appearance: none; */
    outline:0 !important;
      height:33px;
        
      margin: 0 5px 0 0;
    width: calc(10% - 7px);
      float: left;
    cursor:pointer;
  }
  span.scale-rating input[type=radio] {
    position:absolute;
      /* -webkit-appearance: none; */
    opacity:0;
    outline:0 !important;
      border-right: 1px solid grey;
      height:33px;
   
      margin: 0 5px 0 0;
    
    width: 100%;
      float: left;
    cursor:pointer;
    z-index:3;
  }
  span.scale-rating label:hover{
  background:#fddf8d;
  }
  span.scale-rating input[type=radio]:last-child{
  border-right:0;
  }
  span.scale-rating label input[type=radio]:checked ~ label{
      /* -webkit-appearance: none; */
   
      margin: 0;
    background:#fddf8d;
  }
  span.scale-rating label:before
  {
    content:attr(value);
      top: 7px;
      width: 100%;
      position: absolute;
      left: 0;
      right: 0;
      text-align: center;
      vertical-align: middle;
    z-index:2;
  }
  *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>


<?php include 'footer.php' ?>