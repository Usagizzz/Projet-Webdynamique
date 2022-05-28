<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultation en visio</title>
    <!--https://youtu.be/HX6AM_1-jNM vidéo explicative-->

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>

<body>
    
    <button id="join-btn">Rejoindre la consultation</button>

    <div id="stream-wrapper">

        <div id="video-streams"></div>

        <div id="stream-controls">
            <button id="leave-btn">Quitter</button>
            <button id="mic-btn">Activer/Désactiver son micro </button>
            <button id="camera-btn">Camera on/off</button>
        </div>

    </div>
    
</body>

<script src="AgoraRTC_N-4.11.1.js"></script>
<script src='main.js'></script>

</html>
