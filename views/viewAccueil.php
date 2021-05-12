<?php $this->_t = 'Accueil MVC';
foreach($activites as $activite): ?>
<h2><?= $activite->getIntitule() ?></h2>
<h4><?= $activite->getDescription() ?></h4>
<h4><?= $activite->getUrlPhoto() ?></h4>
<?php endforeach; ?>


