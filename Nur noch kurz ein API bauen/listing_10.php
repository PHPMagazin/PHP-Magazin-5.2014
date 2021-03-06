<?php
use WM2014Bet\Form\BetForm;

$match = $this->match;
$form  = $this->form; /** @var $form BetForm */
?>
<h1>Spiel anzeigen</h1>
<?php echo $this->form()->openTag($form); ?>
<table class="table table-bordered table-responsive table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>Spiel</th>
        <th>Team 1</th>
        <th>Team 2</th>
        <th>Datum</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $match->id ?></td>
        <td><?php echo $this->teams[$match->team1] ?></td>
        <td><?php echo $this->teams[$match->team2] ?></td>
        <td><?php echo $match->date ?></td>
        <td>
            <a href="<?php echo $this->url('wm2014-bet') ?>" class="btn btn-success btn-sm">
                zurück
            </a>
        </td>
    </tr>
    <tr>
        <td>Tippen</td>
        <td><?php echo $this->formElement($form->get('goals1')) ?></td>
        <td><?php echo $this->formElement($form->get('goals2')) ?></td>
        <td>&nbsp;</td>
        <td><?php echo $this->formElement($form->get('save_bet')) ?></td>
    </tr>
    </tbody>
</table>
<?php echo $this->form()->closeTag(); ?>

