<?php
if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['text'])){
    $hashdata = $_POST['text'];
   

  
    $hash = md5($hashdata);
    $shash = sha1($hashdata);
  
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <div class="container">
    <div class="row">
        <h3 class="txt1"> MD5   <h3 class="txt2">Hash</h3>   <h3 class="txt1">Generator</h3>
    </div>
    <div class="row-2">
    <div class="form-group">
  <label for="exampleFormControlTextarea3">Generate a MD5 hash of a string:
</label>


<form action="index.php" method="Post">
  <textarea class="form-control" id="exampleFormControlTextarea3" name="text" rows="10"></textarea>
  </div>
  </div>
 <button type="submit" class="btn btn-primary">Generate&#8594;</button>
   
  </form >
  <?php
  if(empty($_POST['text'])==true){
   
  }
  else{
  echo'
    <div class="table">
    <table>
    <tr>
    <td class="hash">Your Hash</td>
    <td>'.$hashdata.'</td>
  
  </tr>
  <tr>
    <td class="hash">MD5 Hash</td>
    <td>'.$hash.'</td>
  
  </tr>
 
  <tr>
    <td class="hash">SHA1 Hash</td>
    <td>'.$shash.'</td>
  
  </tr>

 
   
  </tr>
</table>
    </div>
   ' ;}?>
    <hr>
    <P>This MD5 hash generator is useful for encoding passwords, credit cards numbers and other sensitive date into MySQL, Postgress or other databases. PHP programmers, ASP programmers and anyone developing on MySQL, SQL, Postgress or similar should find this online tool an especially handy resource.</P>
    <h2>What is MD5 Hash?</h2>
    <p>An MD5 hash is created by taking a string of an any length and encoding it into a 128-bit fingerprint. Encoding the same string using the MD5 algorithm will always result in the same 128-bit hash output. MD5 hashes are commonly used with smaller strings when storing passwords, credit card numbers or other sensitive data in databases such as the popular MySQL. This tool provides a quick and easy way to encode an MD5 hash from a simple string of up to 256 characters in length.

MD5 hashes are also used to ensure the data integrity of files. Because the MD5 hash algorithm always produces the same output for the same given input, users can compare a hash of the source file with a newly created hash of the destination file to check that it is intact and unmodified.

An MD5 hash is NOT encryption. It is simply a fingerprint of the given input. However, it is a one-way transaction and as such it is almost impossible to reverse engineer an MD5 hash to retrieve the original string.</p>
<hr>

<footer class="row-3">
    <h5 class="footer_txt">&copy; Prashant's MD5 Hash Generator 2022</h5>
 
    
  </footer>
</div>

 <style>
     
     
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:wght@100;400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;900&family=Roboto:wght@100;400&display=swap');

      .container{
          width: 700px;
          
      }
      .row{
         display: flex;
          margin-top: 72px;
         justify-content: center;
         align-items: center;
     }
    label{
        font-weight: lighter;
    }
    .txt2{
      padding-left: 5px;
        color: blue;
    }
    .txt1{
      padding-left: 5px;
    }
    .table{
        margin-top: 25px;
    }
    .hash{
        background-color: #e9ecf2;
    }
   p{
       font-family: Roboto;
       font-size: 15px;
   }
   h1{
       font-weight: bolder;
       font-family: Roboto;
   }
  
 
      
      
 
   
   footer{
        display: flex;
       justify-content: center;
       align-items: center;

   }
   
  
      

  
    </style>

</html>
