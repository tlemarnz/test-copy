<html>
  <head>
  </head>
  <body>
 <button class="btn">Copy</button>
    <div>tle</div>

    <!-- 2. Include library -->
    <script src="clipboard.min.js"></script>
  </body>
<script>
    var clipboard = new Clipboard('.btn', {
        target: function() {
            return document.querySelector('div');
        }
    });

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
</html>
