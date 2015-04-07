<?php

$profissionais = array(
	1 => array(
		'name' => 'Giovana Grison',
		'image' => IMAGE_URL . 'temp/entry_doctor_2.jpg',
		'experiencia' => 'Psicóloga Clínica (desde 2014) Professora de Arte da Rede de Ensino Municipal (desde 2012); Professora de Arteterapia na Prefeitura Municipal de Caxias do Sul (de 2010 à 2012).'
	),
	2 => array(
		'name' => 'Adriana Benenot',
		'image' => IMAGE_URL . 'temp/entry_doctor_2.jpg',
		'experiencia' => 'Trabalhou na Randon S.A de 2003 a 2009 como secretaria da Diretoria, Assessora do Programa de mestrado e Doutorado em Administração na Universidade de Caxias do Sul,  Professora em Disciplinas de Humanas e Liderança na Escola São Pelegrino (2010) e Instrutora no Programa Jovem prendiz no Senac (2011). Atualmente é assessora na Sil Echer Projetos Esportivos Ltda e Coaching no Sublimar.'
	)
);

?>
<div class="container_12">
	<div class="grid_8 content">

        <div class="post-item">
        	<h1>Quem Somos</h1>
            <div class="entry">
				<p>O Sublimar Espaço de Psicologia é um ambiente de atendimentos psicológico à crianças, adolescentes e adultos. Nosso principal objetivo é a busca do bem-estar, do autoconhecimento e da solução de conflitos.</p>

				<p>Os atendimentos podem ser individuais (psicoterapia e/ou coaching), grupais (dinâmica de grupo, orientação vocacional, orientação profissional) ou familiares (casais e/ou atendimento das famílias). Oferecemos ainda consultoria organizacional, workshops, palestras e imersões. </p>

				<p>O Espaço, idealizado pela psicóloga Giovana Grison (CRP 07/22774), é formado por uma equipe de diversos profissionais que utilizam as linhas teóricas da psicologia, conforme sua formação, para dar pleno acolhimento aos seus pacientes. Tem por finalidade a construção do saber, seja pelos atendimentos, como também por supervisões, grupos de estudos ou pesquisas nas áreas de interesses da Psicologia.</p>

              	<div class="row">
                <div class="col col_1_2">
                	<div class="list_dots_blue">
                    	<ul>
                        	<li><a href="<?php echo BASE_URL; ?>servicos/psicoterapia.php">Psicoterapia</a></li>
                            <li><a href="<?php echo BASE_URL; ?>servicos/psicoterapia-infantil.php">Psicoterapia Infantil</a></li>
                            <li><a href="<?php echo BASE_URL; ?>servicos/coaching.php">Coaching</a></li>
                        </ul>
                    </div>
                  	<a href="<?php echo BASE_URL; ?>paginas/servicos.php" class="button_link"><span>Ver todos os serviços</span></a>
                </div>

                <div class="col col_1_2">
                	<div class="list_dots_blue">
                    	<ul>
                        	<li><a href="<?php echo BASE_URL; ?>servicos/grupos.php">Grupos</a></li>
                            <li><a href="<?php echo BASE_URL; ?>servicos/terapia-de-casal.php">Terapia de Casal</a></li>
                            <li><a href="<?php echo BASE_URL; ?>servicos/orientacao-vocacional.php">Orientação Vocacional</a></li>
                        </ul>
                    </div>
                </div>

              	</div>

              	<div class="divider_space"></div>

				<h2>Nossos profissionais:</h2>

				<?php foreach($profissionais as $profissional): ?>

					<img src="<?php echo $profissional['image'];?>" alt="" width="115" height="152" class="alignright" />
					<h3 class="title_pink text_italic"><?php echo $profissional['name']; ?></h3>
					<?php if (isset($profissional['experiencia'])): ?>
						<p><?php echo $profissional['experiencia']; ?> </p>
					<?php endif; ?>
					<div class="divider_space_thin"></div>

				<?php endforeach; ?>

                <a href="<?php echo BASE_URL;?>paginas/profissionais.php" class="button_link"><span>Conheça todos os nossos profissionais</span></a>

            	<?php require_once('includes/contato.php'); ?>

			</div>
		</div>
    </div>
</div>
