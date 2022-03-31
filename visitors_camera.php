<?php
session_start();
if (!isset($_SESSION['vuser'])) {
    header('Location: visitor_login.php');
} else {
?>
    <html>

    <head>
        <title>Instascan</title>
        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
        <link rel="stylesheet" href="table.css">
    </head>

    <body>
        <ul>
            <li> <button class="button"> <a href="visitor_logout.php" class="back"> Log out </a> </button> </li>
        </ul>

        <video id="preview"></video>
        <label>Scan QR code</label>
        <input type="text" name="text" id="text" readonly="" placeholder="scan qr">
        <script type="text/javascript">
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            scanner.addListener('scan', function(content) {
                document.getElementById("text").value = content
                // window.location.replace(content);
            });
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    console.error('No cameras found.');
                }
            }).catch(function(e) {
                console.error(e);
            });
        </script>
    </body>

    </html>
<?php
}
?>