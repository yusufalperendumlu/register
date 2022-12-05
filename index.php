<?php

/*    
if($_GET['name'] != null && $_GET['age'] != null && isset($_GET['gender']) && $_GET['gender'] != null){
    echo "Tüm Kontrollerini Gectin";
}
else{
    echo "Tüm Alanlar Doldurulmalıdır!";
}
*/


if(@$_POST['name'] != null && @$_POST['surname'] != null)
{
    echo "Ad ve Soyad Kontrollerini Gectin".'<br>';
}
else
{
    echo "Ad ve Soyad Doldurulmalıdır!".'<br>';
}

if(@$_POST['age'] <= 18 && @$_POST['age'] ==null)
{
    echo "18 yaşından küçükler giremez!!".'<br>';
}
else
{
    echo "Yaş sınırını geçtiniz".'<br>';
}

if (empty(@$_POST["gender"]) != null) 
{
    echo"Cinsiyet Alanı Zorunludur".'<br>';
} 
else 
{
    echo "Cinsiyet alanını doldurdunuz".'<br>';
}

if(@$_POST["password"] && @$_POST['re-password'])
{
    if(@$_GET['password'] == @$_GET['confirm_password'])
    {
        echo "Şifreler uyuşmaktadır";
    }
    else
    {
        echo "Şifreler uyuşmamaktadır";
    }

    $sifre = $_POST["password"];
    $kontrol = "/\S*((?=\S{8,})(?=\S*[A-Z]))\S*/";


    if(preg_match($kontrol,$sifre))
    {  
        echo "Şifreniz uygun formatta.";
    }
  
    else
    {
        echo "<b> Hata : </b>Şifreniz uygun formatta değil.";
    }
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>REGISTER</title>
</head>
<body>
    <form action="" method="post" name="registerQuery">
    <div class="container">
        <p class="tittle">Register</p>
        <div class="cont">
        <div class="input out">
            <input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" class="box">
            <label for="" class="label">Name</label>
        </div>
        <div class="input out"> 
            <input type="text" name="surname" class="box">
            <label for="surname" class="label">Surname</label>
        </div>
        <div class="input out"> 
            <input type="number" name="age" id="age" class="box">
            <label for="age" class="label">Age</label>
        </div>
        <div >
        <fieldset data-role="controlegroup" id="gender" aria-required="true">
                <legend><i class="fa-solid fa-venus-mars"></i>Gender</legend>
                <label for="male" class="gender">Male</label>
                <input type="radio" name="gender" id="male" value="male" class="gender" <?php if(isset($_GET['gender']) && $_GET['gender'] == "male"){echo "checked";} ?>>
                <label for="female" class="gender">Female</label>
                <input type="radio" name="gender" id="female" value="female" class="gender" <?php if(isset($_GET['gender']) && $_GET['gender'] == "male"){echo "checked";} ?> >
                <label for="other" class="gender">Other/İntersex</label>
                <input type="radio" name="gender" id="other" value="other" class="gender">
            </fieldset>
        </div>
        <div class="input out">
            <input type="password" name="password" id="password" class="box">
            <label for="password" class="label">Password</label>
        </div>
        <div class="input out">
            <input type="password" name="re-password" id="password" class="box">
            <label for="password" class="label">Re-Enter Password</label>
        </div>
        <div class="button">
            <a href="">
                <button><span>Submit</span></button>
                <div class="liquid"></div>
            </a>
        </div>
        </div>
    </div>
    </form>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>