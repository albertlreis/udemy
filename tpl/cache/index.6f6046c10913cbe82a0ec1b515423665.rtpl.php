<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Teste TPL - <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Testando template.</p>
<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>