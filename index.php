<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bwolf PHP WebPage</title>
   <link rel="stylesheet" href="css/main.css">
    <?php 
        $arquivo =  "contador.txt";
        $handle = fopen($arquivo , 'r+');
        $data = fread($handle , 512);
        $contador = $data + 1;
        fseek($handle , 0);
        fwrite($handle , $contador);
        fclose($handle);    
    ?>
</head>

<body>
    <header id="principal"> 
        <div><?php  print "Contador: ".$contador." Visitantes"; ?></div>
        <span id="header">LOBOS DO SUL</span>
        <nav>
            <nav class="item">
                    <a href="" class="dir" >HOME</a>
            </nav>
            <nav class="item">
                <a href="" class="esq" >TAEKWONDO</a>
            </nav>
            <nav class="item">
               <a href="" class="dir" >FAIXAS</a>
            </nav>
            <nav class="item">
                   <a href="" class="esq" >ABOUT</a>
            </nav>
        </nav>         
    </header>
   <!--<article class="janela">
      <header>
          <span>HOME</span>
         <a id="xClose" href="">x</a>
        </header>
        <article>
           <p>  A nível organizacional, a constante divulgação das informações desafia a capacidade de equalização das regras de conduta normativas. No mundo atual, a revolução dos costumes promove a alavancagem da gestão inovadora da qual fazemos parte. Evidentemente, o aumento do diálogo entre os diferentes setores produtivos faz parte de um processo de gerenciamento de alternativas às soluções ortodoxas. Do mesmo modo, a competitividade nas transações comerciais auxilia a preparação e a composição do investimento em reciclagem técnica. </p>

          <p>O que temos que ter sempre em mente é que a contínua expansão de nossa atividade garante a contribuição de um grupo importante na determinação dos procedimentos normalmente adotados. Ainda assim, existem dúvidas a respeito de como o entendimento das metas propostas maximiza as possibilidades por conta dos paradigmas corporativos. Acima de tudo, é fundamental ressaltar que a percepção das dificuldades possibilita uma melhor visão global do processo de comunicação como um todo. </p>

          Caros amigos, o consenso sobre a necessidade de qualificação apresenta tendências no sentido de aprovar a manutenção do levantamento das variáveis envolvidas. As experiências acumuladas demonstram que a necessidade de renovação processual não pode mais se dissociar das condições financeiras e administrativas exigidas. Podemos já vislumbrar o modo pelo qual o comprometimento entre as equipes exige a precisão e a definição do impacto na agilidade decisória. Por outro lado, a consolidação das estruturas ainda não demonstrou convincentemente que vai participar na mudança dos índices pretendidos. </p>

          <p>É importante questionar o quanto o novo modelo estrutural aqui preconizado pode nos levar a considerar a reestruturação do retorno esperado a longo prazo. Gostaria de enfatizar que a estrutura atual da organização estimula a padronização do orçamento setorial. No entanto, não podemos esquecer que a mobilidade dos capitais internacionais prepara-nos para enfrentar situações atípicas decorrentes do fluxo de informações. O incentivo ao avanço tecnológico, assim como o surgimento do comércio virtual aponta para a melhoria do sistema de participação geral. </p>


        </article>
    </article>-->
</body>

</html> 