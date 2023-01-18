<script src="/assets2/js/jquery-2.2.3.min.js"></script>
<!-- <script src="http://maps.googleapis.com/maps/api/js?v=3"></script> -->
<script src="/assets2/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets2/js/plugins.min.js"></script>
<script src="/assets2/js/custom.min.js"></script>
<script src="/assets2/js/timer.js"></script>
<script src="/assets2/js/jquery.blink.js"></script>
<script>
    $(document).ready(function() {

        $('.blink').blink({});

    });
</script>
<script src="../cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: "7feba953-e91f-4727-8587-e8fddd5c37ef",
        });
    });
</script>
<script type="text/javascript">
    var ua = navigator.userAgent;

    if (ua.indexOf("BlackBerry") >= 0)
    {
        if (ua.indexOf("WebKit") >= 0)
        {

        }
    }

    if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPad/i))) {

        // document.getElementById("img1").src = '/assets2/images/home/Birthday-Celebration-Web-Banner-small.jpg';
        // document.getElementById("img9").src = '/assets2/images/home/zlpc_small.jpg';


        // document.getElementById("img3").src = '/assets2/images/home/IMG001.jpg';
        // document.getElementById("img2").src = '/assets2/images/home/weekend-delight-800x400.jpg';
        document.getElementById("img4").src = '/assets2/images/home/wa1.jpg';
        document.getElementById("img5").src = '/church/service_1.PNG';
        // document.getElementById("img6").src = '/assets2/images/home/wa3.jpg';
        // document.getElementById("img7").src = '/assets2/images/home/wa4.jpg';
        document.getElementById("img8").src = '/church/Service2.PNG';


    }

    if ( (navigator.userAgent.match(/Android/i))) {


        // ('#img1').html('<img src="/assets2/images/home/slider03.jpg" style="width: 100%; height: auto;" >');
        // document.getElementById("img1").src = '/assets2/images/home/Birthday-Celebration-Web-Banner-small.jpg';
        // document.getElementById("img9").src = '/assets2/images/home/zlpc_small.jpg';



        // document.getElementById("img3").src = '/assets2/images/home/IMG001.jpg';
        // document.getElementById("img2").src = '/assets2/images/home/weekend-delight-800x400.jpg';
        document.getElementById("img4").src = '/assets2/images/home/wa1.jpg';
        document.getElementById("img5").src = '/church/service_1.PNG';
        // document.getElementById("img6").src = '/assets2/images/home/wa3.jpg';
        // document.getElementById("img7").src = '/assets2/images/home/wa4.jpg';
        document.getElementById("img8").src = '/church/Service2.PNG';
    }


    else {
    }
</script>
