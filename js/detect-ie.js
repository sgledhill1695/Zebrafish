            //detects if user uses Internet Explorer
            //returns version of IE or false, if browser is not IE
            //Function to detect IE or not
            function IEdetection() {
                var ua = window.navigator.userAgent;
                var msie = ua.indexOf('MSIE ');
                if (msie > 0) {
                    // IE 10 or older, return version number
                    return ('IE ' + parseInt(ua.substring(
                      msie + 5, ua.indexOf('.', msie)), 10));
                }
                var trident = ua.indexOf('Trident/');
                if (trident > 0) {
                    // IE 11, return version number
                    var rv = ua.indexOf('rv:');
                    return ('IE ' + parseInt(ua.substring(
                      rv + 3, ua.indexOf('.', rv)), 10));
                }
                var edge = ua.indexOf('Edge/');
                if (edge > 0) {
                    //Edge (IE 12+), return version number
                    return ('IE ' + parseInt(ua.substring(
                      edge + 5, ua.indexOf('.', edge)), 10));
                }
                // User uses other browser
                return ('Not IE');
            }
            var result = IEdetection();
/*             document.write(result); */
            if(result != 'Not IE'){
              location.href = 'ie-identified';
            }