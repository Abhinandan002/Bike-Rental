<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
      }
      
      .container {
        padding: 0 16px;
      }
      
      .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
      }
      
      .title {
        color: grey;
      }

      
      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
      }
      
      .button:hover {
        background-color: #555;
      }
      
      .column{
        display: inline-block;
  padding-left: 290px;
  vertical-align: middle;
      }

      /* @media screen and (max-width: 650px) {
        .column {
           width: 100%;
          display: block;
          position: relative;
          top: 10px;
          height: 20px;
        }
      } */
      </style>
</head>
<body>
  
  <div class="about-section">
    <h1>About Our Team</h1>
    <p>We are the founders of Bike Rental System. In this website you can see the bikes that are for the rent in our bike station and you can rent them and travel around and explore many places.</p>
    <p>By this, we also giving our contribution in promoting tourism by renting a bike so that an individual can have his own vehicle while visiting places.</p>
    
  </div>
  
  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    
    <div class="column">
      <div class="card">
        <img src="ajay.webp" alt="Ajay" style="width: 200px;height: 200px;">
        <div class="container">
          <h2>Ajay</h2>
          <p class="title">Co-Founder</p>
          <p>Malnad College Of Engineering</p>
          <p>ticku.kumar5943@gmail.com</p>
        </div>
      </div>
    </div>
  
   
    
    <div class="column">
      <div class="card">
        <img src="abhi.webp" alt="Abbhi" style="width: 200px;height: 200px;" >
        <div class="container">
          <h2>Abhinandan</h2>
          <p class="title">Co-Founder</p>
          <p>Malnad College Of Engineering</p>
          <p>abhinandanhs2002@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>