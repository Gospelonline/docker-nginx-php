<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Comandos PowerShell</h2>
 
  <div class="card">

	<script language="javascript" type="text/javascript">
					function iFrameHeight() {
							var h = 0;
							if ( !document.all ) {
									h = document.getElementById('blockrandom').contentDocument.height;
									document.getElementById('blockrandom').style.height = h + 60 + 'px';
							} else if( document.all ) {
									h = document.frames('blockrandom').document.body.scrollHeight;
									document.all.blockrandom.style.height = h + 20 + 'px';
							}
					}
                </script>
				
                <div class="contentpane">
                <iframe
                onload="iFrameHeight()" 
				id="blockrandom"
                name="iframe"
                src="../doc/powershell.txt"
                width="100%"
                height="850"
                scrolling="auto"
                align="center"
                frameborder="0"
                class="wrapper">                
	</iframe></div>

  </div>
</div>
<script src="script.js"></script>
</body>
</html>
