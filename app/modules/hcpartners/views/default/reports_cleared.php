<? 
$partners=PartnersContribution::Reports_cleared();

 if (!empty($_POST['PartnersContribution']))
            $this->renderPartial('_cleared', array('partners' => $partners['partners']));
        else
            $this->render('cleared', array('partners' => $partners['partners'], 'range' => $partners['range']));

?>