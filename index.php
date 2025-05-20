<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ucapan Ulang Tahun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #f9c5d1, #ffe1e1);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .fullscreen {
      height: 100vh;
    }
    h1, h2, h4 {
      font-family: 'Pacifico', cursive;
    }
    .bg-primary {
      background-color: #0dcaf0 !important;
    }
    .btn-custom {
      background-color: #fff0f6;
      border: 2px solid #ff69b4;
      color: #ff1493;
      transition: 0.3s;
    }
    .btn-custom:hover {
      background-color: #ff69b4;
      color: white;
    }
    #main-content, #hello-screen {
      opacity: 0;
      transform: translateY(50px);
      transition: all 0.8s ease-in-out;
    }
    #main-content.show, #hello-screen.show {
      opacity: 1;
      transform: translateY(0);
    }
    .carousel-inner img {
      height: 400px;
      object-fit: cover;
      cursor: pointer;
      transition: transform 0.3s;
    }
    .modal-img {
      width: 100%;
    }
    .typewriter {
      display: inline-block;
      overflow: hidden;
      white-space: normal;
      border-right: 3px solid white;
      font-size: 2.5rem;
      max-width: 90vw;
      text-align: center;
      word-break: break-word;
    }

    @keyframes blink {
      50% { border-color: transparent }
    }
  </style>
</head>
<body>
  <!-- Musik Latar -->
  <audio id="bg-music" loop>
    <source src="foto/Nadin Amizah - Kanyaah (Official Lyric Video).mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <!-- Halaman Utama -->
  <div id="home" class="container-fluid d-flex justify-content-center align-items-center fullscreen bg-primary text-white">
    <div class="text-center">
      <h1 class="mb-4">Are you ready?</h1>
      <button class="btn btn-light btn-lg shadow-lg" onclick="showHelloPage()">Gasskeun!!</button>
    </div>
  </div>

  <!-- Halaman Hello Sementara -->
  <div id="hello-screen" class="container-fluid d-flex justify-content-center align-items-center fullscreen bg-primary text-white d-none">
    <div class="text-center">
      <span id="typewriter-text" class="typewriter"></span>
    </div>
  </div>

  <!-- Halaman Inti -->
  <div id="main-content" class="container py-5 d-none">
    <div class="text-center mb-5">
      <h2>Hallo Rismayanti Nurul Azizah, istriku yang cantik 💖</h2>
      <hr>
      <p class="fs-5" align="left">Assalamualaikum..</p>
      <p class="fs-5" align="left">Selamat datang di halaman website ini, ga ada apa apa sih disini hehehe 😛<br> 
        cuma mau bilang aja selamat yaa sudah hidup di dunia ini selama seperempat abad a.k.a dua puluh lima tahun
        hidup yang lama terus bareng aku yaaa kita lanjutkan perjalanan perjalanan lain yang belum pernah kamu lakukan,
        semoga selalu sehat dan bahagia terus yaaa, semoga kita segera punya dede bayi yang lucu 👶 
        ohiyaaa ini paling penting kurang kurangin bete dan ngambek ke aku yaa hihihi 🤭
        semoga hal-hal baik yang sedang kita usahakan dimudahkan dan dilancarkan oleh Allah SWT aamiin..🤲 
        terimakasih udah selalu mau berjuang bareng bareng yaa.. 
        <br> love youu.. 🤗💖
      </p>
      <p class="fs-5" align="right">Tertanda, <br> Hasbi Muhammad</p>
    </div>

    <!-- Galeri Foto - Carousel -->
    <div id="photoCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
      <p>boleh liat liat dulu beberapa hasil jepretan dari kamera HP android aku yang kureng itu hehehe 😅</p>
      <div class="carousel-inner" id="carousel-inner"></div>
      <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Tombol Tampilkan Pertanyaan -->
    <div class="text-center mb-4">
      <p class="fs-5">udah sih segitu aja, terimakasih sudah mau mampir ke website ini yaa hehehe..</p>
      <p class="fs-5">ohiyaa satu lagi klik tombol di bawah</p>
      <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#questionModal">
        yang ini
      </button>
    </div>
  </div>

  <!-- Modal Pilihan Tempat Makan -->
  <div class="modal fade" id="questionModal" tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="questionModalLabel">Kita mau gass makan di mana nihh nanti sore?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <a class="btn btn-custom m-2" href="https://wa.me/6285794190869?text=Aku+pengen+makan+di+Sushi+Tei" target="_blank">Sushi Tei</a>
          <a class="btn btn-custom m-2" href="https://wa.me/6285794190869?text=Aku+pengen+makan+di+Baso+Soun+Lodaya" target="_blank">Baso Soun Lodaya</a>
          <a class="btn btn-custom m-2" href="https://wa.me/6285794190869?text=Aku+pengen+makan+di+Ramen+Yaa" target="_blank">Ramen Yaa</a>
          <a class="btn btn-custom m-2" href="https://wa.me/6285794190869?text=Aku+pengen+makan+di+Mie+Soobek" target="_blank">Mie Soobek</a>
        </div>
        <div class="modal-footer">
            <p>*tapi uangnya dari ayang yaa hehehee 🙏🤭</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Zoom Image -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-0">
          <img id="modalImage" class="modal-img" src="" alt="Zoomed Image">
        </div>
      </div>
    </div>
  </div>

  <script>
    function showHelloPage() {
      document.getElementById("home").classList.add("d-none");
      const helloScreen = document.getElementById("hello-screen");
      helloScreen.classList.remove("d-none");
      setTimeout(() => {
        helloScreen.classList.add("show");
        startTyping("Halo, Rismayanti Nurul Azizah! selamat datang dan bersiap siap yaaa hehehe... 😁", "typewriter-text", 100);
      }, 100);

      const music = document.getElementById("bg-music");
      if (music.paused) {
        music.play().catch(e => {
          console.log("Audio gagal diputar otomatis:", e);
        });
      }

      setTimeout(() => {
        helloScreen.classList.remove("show");
        setTimeout(() => {
          helloScreen.classList.add("d-none");
          showMainPage();
        }, 500);
      }, 10000);
    }

    function startTyping(text, elementId, speed) {
      const element = document.getElementById(elementId);
      element.textContent = "";
      let i = 0;
      const interval = setInterval(() => {
        element.textContent += text.charAt(i);
        i++;
        if (i >= text.length) {
          clearInterval(interval);
        }
      }, speed);
    }

    function showMainPage() {
      const mainContent = document.getElementById("main-content");
      mainContent.classList.remove("d-none");
      setTimeout(() => {
        mainContent.classList.add("show");
      }, 100);
    }

    function zoomImage(src) {
      document.getElementById("modalImage").src = src;
      const modal = new bootstrap.Modal(document.getElementById('imageModal'));
      modal.show();
    }

    // Galeri Foto Dinamis
    const imageUrls = [
      "foto/foto (1).jpeg",
      "foto/foto (2).jpeg",
      "foto/foto (3).jpeg",
      "foto/foto (4).jpeg",
      "foto/foto (5).jpeg",
      "foto/foto (6).jpeg",
      "foto/foto (7).jpeg",
      "foto/foto (8).jpeg",
      "foto/foto (9).jpeg",
      "foto/foto (10).jpeg",
      "foto/foto (11).jpeg",
      "foto/foto (12).jpeg",
      "foto/foto (13).jpeg",
      "foto/foto (14).jpeg",
      "foto/foto (15).jpeg",
      "foto/foto (16).jpeg",
      "foto/foto (17).jpeg",
      "foto/foto (18).jpeg",
      "foto/foto (19).jpeg",
      "foto/foto (20).jpeg",
      "foto/foto (21).jpeg",
      "foto/foto (22).jpeg",
      "foto/foto (23).jpeg",
      "foto/foto (24).jpeg",
      "foto/foto (25).jpeg",
      "foto/foto (26).jpeg",
      "foto/foto (27).jpeg",
      // Tambahkan hingga Foto 27 dst
    ];

    const carouselInner = document.getElementById("carousel-inner");

    imageUrls.forEach((url, index) => {
      const div = document.createElement("div");
      div.className = "carousel-item" + (index === 0 ? " active" : "");
      div.innerHTML = `<img src="${url}" class="d-block w-100" alt="Foto ${index + 1}" onclick="zoomImage('${url}')">`;
      carouselInner.appendChild(div);
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
