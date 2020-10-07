<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>QR Scanner Demo</title>
</head>
<body>
    
<div class="container">
    <h1>Scan from WebCam:</h1>
    <div>
        <video id="qr-video" width="100%"></video>
    </div>
    <b>Detected QR code: </b>
    <span id="cam-qr-result">None</span>
    <br>
</div>

<script type="module">
    import QrScanner from "./qr-scanner.min.js";
    QrScanner.WORKER_PATH = './qr-scanner-worker.min.js';

    const video = document.getElementById('qr-video');
    const camHasCamera = document.getElementById('cam-has-camera');
    const camHasFlash = document.getElementById('cam-has-flash');
    const flashToggle = document.getElementById('flash-toggle');
    const flashState = document.getElementById('flash-state');
    const camQrResult = document.getElementById('cam-qr-result');
    const camQrResultTimestamp = document.getElementById('cam-qr-result-timestamp');
    const fileSelector = document.getElementById('file-selector');
    const fileQrResult = document.getElementById('file-qr-result');

    function setResult(label, result) {
        label.textContent = result;
        camQrResultTimestamp.textContent = new Date().toString();
        label.style.color = 'teal';
        clearTimeout(label.highlightTimeout);
        label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
    }

    // ####### Web Cam Scanning #######

    QrScanner.hasCamera().then(hasCamera => camHasCamera.textContent = hasCamera);

    const scanner = new QrScanner(video, result => setResult(camQrResult, result), error => {
        camQrResult.textContent = error;
        camQrResult.style.color = 'inherit';
    });
    scanner.start().then(() => {
        scanner.hasFlash().then(hasFlash => {
            camHasFlash.textContent = hasFlash;
            if (hasFlash) {
                flashToggle.style.display = 'inline-block';
                flashToggle.addEventListener('click', () => {
                    scanner.toggleFlash().then(() => flashState.textContent = scanner.isFlashOn() ? 'on' : 'off');
                });
            }
        });
    });

    // for debugging
    window.scanner = scanner;

    document.getElementById('show-scan-region').addEventListener('change', (e) => {
        const input = e.target;
        const label = input.parentNode;
        label.parentNode.insertBefore(scanner.$canvas, label.nextSibling);
        scanner.$canvas.style.display = input.checked ? 'block' : 'none';
    });

    document.getElementById('inversion-mode-select').addEventListener('change', event => {
        scanner.setInversionMode(event.target.value);
    });

    document.getElementById('start-button').addEventListener('click', () => {
        scanner.start();
    });

    document.getElementById('stop-button').addEventListener('click', () => {
        scanner.stop();
    });

    // ####### File Scanning #######

    fileSelector.addEventListener('change', event => {
        const file = fileSelector.files[0];
        if (!file) {
            return;
        }
        QrScanner.scanImage(file)
            .then(result => setResult(fileQrResult, result))
            .catch(e => setResult(fileQrResult, e || 'No QR code found.'));
    });

</script>
</body>
</html>
