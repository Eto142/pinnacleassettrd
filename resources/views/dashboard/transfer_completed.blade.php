<!--<html>-->
<!--  <head>-->
<!--    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">-->
<!--  </head>-->
<!--    <style>-->
<!--      body {-->
<!--        text-align: center;-->
<!--        padding: 40px 0;-->
<!--        background: #EBF0F5;-->
<!--      }-->
<!--        h1 {-->
<!--          color: skyblue;-->
<!--          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;-->
<!--          font-weight: 900;-->
<!--          font-size: 40px;-->
<!--          margin-bottom: 10px;-->
<!--        }-->
<!--        p {-->
<!--          color: #404F5E;-->
<!--          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;-->
<!--          font-size:20px;-->
<!--          margin: 0;-->
<!--        }-->
<!--      i {-->
<!--        color: #9ABC66;-->
<!--        font-size: 100px;-->
<!--        line-height: 200px;-->
<!--        margin-left:-50px;-->
<!--      }-->
<!--      .im{-->
<!--        color: #9ABC66;-->
<!--        margin-left:-50px;-->
<!--        font-size: 100px;-->
<!--        line-height: 200px;-->
<!--        width:300px;-->
<!--        height:230px-->
<!--      }-->
<!--      .card {-->
<!--        background: white;-->
<!--        padding: 60px;-->
<!--        border-radius: 4px;-->
<!--        box-shadow: 0 2px 3px #C8D0D8;-->
<!--        display: inline-block;-->
<!--        margin: 0 auto;-->
<!--      }-->
<!--    </style>-->
<!--    <body>-->
<!--      <div class="card">-->
<!--      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">-->
        
<!--        <img class="im" src="{{asset('assets/images/roll.gif')}}" alt="loading">-->
<!--      </div>-->
<!--        {{-- <h1>100%</h1> --}}-->
<!--        <p>Withdrawal <b style="color:blue">in Progress</b></p>-->
<!--        <p>please wait....Redirecting in seconds</p>-->
<!--      </div>-->

<!--      <script>-->
<!--        var timer = setTimeout(function() {-->
<!--            window.location='../home'-->
<!--        }, 3000);-->
<!--    </script>-->
<!--    </body>-->
<!--</html>-->






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
<style>
  body {
    text-align: center;
    padding: 40px 0;
    background: #f8f9fa;
    font-family: "Nunito Sans", sans-serif;
  }
  .card {
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: inline-block;
    margin: 0 auto;
    max-width: 90%;
    box-sizing: border-box;
  }
  h1 {
    color: #007bff;
    font-weight: 900;
    font-size: 36px;
    margin-bottom: 20px;
    position: relative;
  }
  p {
    color: #6c757d;
    font-size: 18px;
    margin: 0;
    margin-bottom: 10px;
  }
  .spinner {
    border: 8px solid rgba(0, 0, 0, 0.1);
    border-left-color: #007bff;
    border-radius: 50%;
    width: 64px;
    height: 64px;
    animation: spin 1s linear infinite;
    margin: 0 auto 30px;
  }
  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }
  @media only screen and (min-width: 768px) {
    .card {
      max-width: 500px;
    }
  }
</style>
</head>
<body>
  <div class="card">
    <h1>Withdrawal in progress</h1>
    <div class="spinner"></div>
    <p><strong>Please wait...</strong></p>
    <p>Redirecting to your transactions shortly.</p>
  </div>

  <script>
    setTimeout(function() {
      document.querySelector('.spinner').style.display = 'none';
      setTimeout(function() {
        window.location='../accounthistory';
      }, 3000);
    }, 3000);
  </script>
</body>
</html>
