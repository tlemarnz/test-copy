<html>
  <head>
<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.7.1/dist/clipboard.min.js"></script>


  </head>
  <body>
   <!-- 1. Define some markup -->
    <button class="btn" data-clipboard-text="1">Copy</button>
    <button class="btn" data-clipboard-text="2">Copy</button>
    <button class="btn" data-clipboard-text="3">Copy</button>

    <!-- 2. Include library -->
    <script src="../dist/clipboard.min.js"></script>

    <!-- 3. Instantiate clipboard by passing a string selector -->
    <script>
    var clipboard = new Clipboard('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
  </body>
</html>
