<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Portal NodeJS - site em node.js e geddy </title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
	
		<link type="text/css" rel="stylesheet" charset="utf-8" media="screen" href="/static/templatemo_style.css"></link>
		<link type="text/css" rel="stylesheet" charset="utf-8" media="screen" href="/static/css/coda-slider.css"></link>
		<style type="text/css">
			.text_content {
				clear: both;
				overflow: auto;
				width: 685px;
				height: 250px;
				padding-right: 15px;
			}
		</style>
		
		<script type="text/javascript" src="/static/js/jquery.min.js"></script>
		<script type="text/javascript" src="/static/js/jquery.scrollTo-1.3.3.js"></script>
		<script type="text/javascript" src="/static/js/jquery.localscroll-1.2.5.js"></script>
		<script type="text/javascript" src="/static/js/jquery.serialScroll-1.2.1.js"></script>
		<script type="text/javascript" src="/static/js/coda-slider.js"></script>
		<script type="text/javascript" src="/static/js/jquery.easing.1.3.js"></script>
	
	</head>
	<body>
		<div id="slider">
			<div id="templatemo_wrapper">
				<div id="header">
					<h1>
						<a href="/">Portal NodeJS<span>site em node.js e geddy</span></a>
					</h1>
				</div>
				<div id="menu">
					<ul class="navigation">
						<?php include("menu.php"); ?>
						<li>
							<a href="#contactus" >
								Contate-nos
								<span class="ui_icon contactus"></span>
							</a>
						</li>
					</ul>
				</div>
				<div id="content">
					<div class="scroll">
						<div class="scrollContainer">
							<?php include("pages.php"); ?>
							<div class="panel" id="contactus">
                    			<h1>Contate-nos</h1>
		                        <div class="col_320 float_l">
        		                    <div id="contact_form">
		                                <form method="post" name="contact" action="">
	                                        <label for="author">Nome:</label> 
	                                        <input name="author" type="text" class="input_field" id="author" maxlength="60">
	    	                                <div class="cleaner_h10"></div>
	                                    
	                                        <label for="email">E-mail:</label>
	                                        <input name="email" type="text" class="input_field" id="email" maxlength="60">
	                                    	<div class="cleaner_h10"></div>
	        
	                                    	<label for="text">Mensagem:</label>
	                                    	<textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
	                                    	<div class="cleaner_h10"></div>
	                                    
		                                    <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Limpar">
		                                    <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Enviar">
	                               		</form>
	                            	</div>
								</div>
	                            <div class="col_320 float_r">
	                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in lectus turpis. Vivamus cursus tortor quis leo ullamcorper auctor quis tincidunt metus.</p>
	                                <h4>Endereço</h4>
	                            
		                            <h6>Web Design Company</h6>
		                            110-160 Vitae urna blandit est egestas, <br>
		                            Pulvinar sit amet convallis eget, 20180<br>
		                            Lorem ipsum dolor<br>
		                            
		                			<br>
		                     		Tel: 020-010-7800<br>
		                        	Fax: 020-010-6800
	                        	</div>
	                		</div>
						</div>
					</div>
					<!-- end of scroll -->
				</div>
				<!-- end of content -->
				<div id="footer">
					<p id="sobre">Copyright &copy; 2012 <a href="/static/sobre.html" target="popupwindow"
													   onclick='window.open("/sobre.html", "popupwindow", "scrollbars=yes,width=590,height=360");return true'>Cesar Augusto</a> - Todos os direitos reservados</p>
				</div>
			</div>
			<!-- end of wrapper -->
		</div>
		<!-- end of slider -->
		<!-- Codigo de acompanhamento do Google Analytics -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-17278922-1']);
			_gaq.push(['_trackPageview']);
			
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>
