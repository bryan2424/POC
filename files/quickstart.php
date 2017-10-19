<!DOCTYPE html>
<html>
    <head>
        <title>Google Calendar API Quickstart</title>
        <meta charset='utf-8' />
        <link href="http://addtocalendar.com/atc/1.5/atc-style-blue.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    </head>
    <body>
        <script>
            function myFunction() {
                var titre = document.getElementById("titre").value;
                var description = document.getElementById("description").value;
                var location = document.getElementById("location").value;
                var organiseur = document.getElementById("organiseur").value;
                var organiseur_email = document.getElementById("organiseur_email").value;
                var timezone = document.getElementById("timezone").value;
                var date_start = document.getElementById("date_start").value;
                var date_end = document.getElementById("date_end").value;
                $(document).ready(function () {
                    $("btnClick").click(function () {
                        $("date_start2").text(date_start);
                    });
                });
            }

//fonction bouton addtocalendar
            (function () {
                if (window.addtocalendar)
                    if (typeof window.addtocalendar.start == "function")
                        return;
                if (window.ifaddtocalendar == undefined) {
                    window.ifaddtocalendar = 1;
                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                    s.type = 'text/javascript';
                    s.charset = 'UTF-8';
                    s.async = true;
                    s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://addtocalendar.com/atc/1.5/atc.min.js';
                    var h = d[g]('body')[0];
                    h.appendChild(s);
                }
            })();
        </script>



        
        <span class="addtocalendar atc-style-blue">
            <var class="atc_event">
                <var class="atc_date_start"></var>
                <var class="atc_date_end">2017/10/15 09:00:00</var>
                <var class="atc_timezone">Europe/London</var>
                <var class="atc_title">agdffa</var>
                <var class="atc_description">agga</var>
                <var class="atc_location">adfa</var>
                <var class="atc_organizer">agfag</var>
                <var class="atc_organizer_email">tehxso7@gmail.com</var>
            </var>
        </span>

    </body>
</html>