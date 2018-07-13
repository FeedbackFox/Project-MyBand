      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="navbar" id="navbarid">
            <a href="index.php" class="navbaritem" id="currenttab">Homepage</a>
            <a href="index.php" class="navbaritem">Homepage 2</a>
              <a href="javascript:void(0);" id="navbaricon" onclick="navbarFunction()">
              <i class="fa fa-bars"></i></a>
        <script type="text/javascript">
        function navbarFunction() {
            var x = document.getElementById("navbarid");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
        </script>
      </div>
	</div>
