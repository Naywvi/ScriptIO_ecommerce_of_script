  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  </head>
  <div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies ?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        I agree
    </button>
  </div>
  <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
  <script>
  window.addEventListener("cookieAlertAccept", function() {
      alert("cookies accepted")
  })
  </script>