<?php

class Common
{		
	
	protected $langVars;	
	protected $headerFiles = array();
	protected $showBackLink = true;
	
	public function logError($message, $file, $line)
	{
		$message = sprintf('Ocurrio un Error en %s linea %s: %s',$file,$line,$message);
		throw new Exception($message);
		echo '<span style="color: red;">'.$message.'</span>';
		//var_dump($message);
		exit();
	}


	protected function displayHeaderHtml()
	{
		?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head>
		<title>Form</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="css/table_styles.css" rel="stylesheet" type="text/css" />
		<link href="css/icon_styles.css" rel="stylesheet" type="text/css" />
		
		<link href="js/jquery/css/redmond/jquery-ui-1.9.2.custom.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery/js/jquery-1.8.3.js"></script>
		<script type="text/javascript" src="js/jquery/js/jquery-ui-1.9.2.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery/js/jquery.json.min.js"></script>

		<!-- Only needed if using cookie storage -->
		<script type="text/javascript" src="js/jquery/js/jquery.cookie.js"></script>

		<script type="text/javascript" src="js/jquery/js/jquery.storageapi.min.js"></script>
		
		<script type="text/javascript" src="js/ajax_table_editor.js"></script>
		
		<script type="text/javascript" src="js/jquery/js/lang/jquery-ui-datepicker-es.js"></script>
		
		<link rel="stylesheet" href="alert/style.css" />
<script src="alert/cute-alert.js"></script>

<!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  


		<?php echo implode("\n",$this->headerFiles); ?>
		

		</head>	
		<body>
		<?php
	}	
	
	protected function displayFooterHtml()
	{
		?>
		<?php if($this->showBackLink): ?>
			<br /><br /><div align="center"><a href="index.php">Back To Examples</a></div><br /><br />
		<?php endif; ?>
		</body>
		</html>
		<?php
	}	
	
	protected function getAjaxUrl()
	{
		$ajaxUrl = $_SERVER['PHP_SELF'];
		if(count($_GET) > 0)
		{
			$queryStrArr = array();
			foreach($_GET as $var => $val)
			{
				$queryStrArr[] = $var.'='.urlencode($val);
			}
			$ajaxUrl .= '?'.implode('&',$queryStrArr);
		}
		return $ajaxUrl;
	}
	
}
?>
