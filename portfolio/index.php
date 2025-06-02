<?php
function get_Curl($url)

{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_Curl("https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCph_fzZPeWtrFWLbCjKouLA&key=AIzaSyCJ7RSk6KSO87fODvyETciYT2oTBAMwb5w");

$youtubeProfilePic = $result['items'][0]['snippet'] ['thumbnails']['default']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];


//Social Media//

//Latest video
$urlLatestVideo = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyCJ7RSk6KSO87fODvyETciYT2oTBAMwb5w&channelId=UCph_fzZPeWtrFWLbCjKouLA&maxResults=1&order=date&part=snippet";
$result = get_Curl($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

//instagram
$clientID = "1277256363821289";
$accessToken = "IGAASJqGvaSOlBZAE1WY1hWT0VseUpIN1pmeWxQLXpnYVpFaWx6S1BnSUdQQklZAbUFvRWhYRVRUa2xJREh3c201ZA0lCZAE96b2ZAmeXNUTGZAzUFpEOENVd012T0tfUFNyUHhFcXRKSV80UkR3TW94VUt6d0ZAYQ19UZAndJbFJsX0RXZAwZDZD";

$result2 = get_Curl("https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAAJyc20YPZBRBZAE5Wanp1VkJXTWpzZADdESXFXSXlYMzBfN1duUXVOenRpSEJXcS00S2V1eWViVVZA5QUl3S29kV2pHeWVDeUQxZAlU5V0R0aThuc3hGbzA0NHRCRDY4eTVjVlEzZA2RDQWFmTnh5ZAU1pSVQ1TGNlMUJsNzVGSVphSQZDZD");

$usernameIG = $result2['username'];
$profilePictureIG = $result2['profile_picture_url'];
$followersIG = $result2['followers_count'];



//Instagram
$resultGambar1 = get_Curl("https://graph.instagram.com/v22.0/18077478553477103?fields=media_url&access_token=IGAAJyc20YPZBRBZAE5Wanp1VkJXTWpzZADdESXFXSXlYMzBfN1duUXVOenRpSEJXcS00S2V1eWViVVZA5QUl3S29kV2pHeWVDeUQxZAlU5V0R0aThuc3hGbzA0NHRCRDY4eTVjVlEzZA2RDQWFmTnh5ZAU1pSVQ1TGNlMUJsNzVGSVphSQZDZD");
$resultGambar2 = get_Curl("https://graph.instagram.com/v22.0/17904745434015289?fields=media_url&access_token=IGAAJyc20YPZBRBZAE5Wanp1VkJXTWpzZADdESXFXSXlYMzBfN1duUXVOenRpSEJXcS00S2V1eWViVVZA5QUl3S29kV2pHeWVDeUQxZAlU5V0R0aThuc3hGbzA0NHRCRDY4eTVjVlEzZA2RDQWFmTnh5ZAU1pSVQ1TGNlMUJsNzVGSVphSQZDZD");
$resultGambar3 = get_Curl("https://graph.instagram.com/v22.0/18222944716173134?fields=media_url&access_token=IGAAJyc20YPZBRBZAE5Wanp1VkJXTWpzZADdESXFXSXlYMzBfN1duUXVOenRpSEJXcS00S2V1eWViVVZA5QUl3S29kV2pHeWVDeUQxZAlU5V0R0aThuc3hGbzA0NHRCRDY4eTVjVlEzZA2RDQWFmTnh5ZAU1pSVQ1TGNlMUJsNzVGSVphSQZDZD");


$gambar = [
  $resultGambar1['media_url'],
  $resultGambar2['media_url'],
  $resultGambar3['media_url']
];

$gambar1 = $gambar[0];
$gambar2 = $gambar[1];
$gambar3 = $gambar[2];



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Wa Ode Andini</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/profile3.png" class="rounded-circle" img-thumbnail style="width: 250px; height: 250px; object-fit: cover; border: 5px solid #fff; box-shadow: 0 0 10px rgba(0,0,0,0.15);">
          <h1 class="display-4">Wa Ode Andini</h1>
          <h3 class="lead">College Student | Business Man | Youtuber</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5 text-justify">
            <p class="text-justify">
            <p>Hallo, saya Andin dan saat ini saya sedang menjalani kehidupan sebagai mahasiswa di UIN Imam Bonjol Padang dengan jurusan Sistem Informasi Fakultas Sains dan Teknologi. Saya lahir di Timur Indonesia dan menetap di Barat Indonesia yaitu Padang Sumatera Barat. Saya lulus dari SMA Negeri 1 Silaut di Pesisir Selatan pada tahun 2022 dengan jurusan MIPA.
            </p>
          </div>
          <div class="col-md-5 text-justify">
          <p class="text-justify">
            <p>Dulu saat sekolah saya juga aktif sebagai anggota OSIS, mengikuti Ekskul Pramuka, Rohis, dan Marching Band. Dan Saat ini saya aktif sebagai anggota Senat Mahasiswa di Fakultas Sains dan Teknologi. Beberapa hal yang saya sukai yaitu membaca buku, menonton film/anime, traveling, mendengarkan musik, dan bernyanyi.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Youtube & Instagram -->
     <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col md-4">
                <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p><?= $subscriber; ?> Subscriber.</p>
                <div class="g-ytsubscribe" data-channelid="UCph_fzZPeWtrFWLbCjKouLA" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>" allowfullscreen></iframe>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col md-4">
                <img src="<?= $profilePictureIG; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $usernameIG ?></h5>
                <p><?= $followersIG ?> Followers.</p>
              </div>
            </div>

            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="<?= $gambar1; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar2; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar3; ?>">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
     </section>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/1.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Json</h5>
                <p class="card-text">Latihan menggunakan json.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/2.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Rest API</h5>
                <p class="card-text">Menampilkan Data Menu Pizza dengan website sederhana.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Public API</h5>
                <p class="card-text">Menggunakan OMdb API untuk menampilkan daftar film dengan website sederhana.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title"> API Social Media</h5>
                <p class="card-text">Menghubungkan Youtube dan Instagram menggunakan API untuk ditampilkan diwbsite Portfolio.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Portofolio</h5>
                <p class="card-text">Menampilkan data diri sendiri dengan menggunakan API</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Rest Server</h5>
                <p class="card-text">Latihan Membuat rest server menggunakan CodeIgniter.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Sungai Bangek No. 12 Kota Padang</li>
              <li class="list-group-item">West Sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2018.</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>