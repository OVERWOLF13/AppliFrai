<?php
$this->load->helper('url');
?>

<div id="contenu">
	<h2>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee; ?></h2>
					
	<div class="corpsForm">
	  
		<fieldset>
			<legend>Eléments forfaitisés</legend>
			<?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];

					echo 
					'<p>
						<label for="'.$idFrais.'">'.$libelle.'</label>
						<input type="text" id="'.$idFrais.'" name="lesFrais['.$idFrais.']" size="10" maxlength="5" value="'.$quantite.'" disabled="disabled" />
					</p>
					';
				}
			?>
		</fieldset>
		<p></p>
	</div>

	
	<table class="listeLegere">
		<caption>Descriptif des éléments hors forfait</caption>
		<tr>
			<th >Date</th>
			<th >Libellé</th>  
			<th >Montant</th>
          
        </tr>
        
		<?php    
			foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
			{
				$libelle = $unFraisHorsForfait['libelle'];
				$date = $unFraisHorsForfait['date'];
				$montant=$unFraisHorsForfait['montant'];
				$id = $unFraisHorsForfait['id'];
				echo 
				'<tr>
					<td class="date">'.$date.'</td>
					<td class="libelle">'.$libelle.'</td>
					<td class="montant">'.$montant.'</td>
				</tr>';
			}
		?>	  
                                          
    </table>

</div>
