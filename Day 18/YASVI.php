<!doctype html>
<html lang = "en">
   <head>
      <meta charset = "utf-8">
      <title>Accordion JQuery UI</title>
      
	  <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel ="stylesheet" type="text/css" />
      <script src="https://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js" type="text/javascript"></script>
      
	  <script type="text/javascript">
             $(document).ready(function () {
                 $("#MyAccordion").accordion();
             });
      </script>
      
	  <style type="text/css">
         #MyAccordion{font-size: 14px;width:50%;}
         #MyAccordion div{background:#ffffff;}
      </style>
   </head>
   
   <body>
      <div id="MyAccordion">
         <h3>Tab 1</h3>
         <div>
			 <p>
				Paragraph 1
			 </p>
		 </div>
         <h3>Tab 2</h3>
         <div>
            <p>
				Paragraph 2
            </p>
         </div>
         <h3>Tab 3</h3>
         <div>
            <p>
				Paragraph 3
            </p>
         </div>
		 <h3>Tab 4</h3>
         <div>
            <p>
				Paragraph 4
            </p>
         </div>
      </div>
   </body>
</html>