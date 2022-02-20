<!--Cerchietto -->
<li style="top:<?php echo $row['Y']*100/$h;?>%; left:<?php echo $row['X']*100/$w-$temp/2;?>%; width: <?php echo $temp?>%;" class="trigger" id='rettangolo<?php echo $row['Id_prepair']; ?>' data-toggle="modal" data-target ='#popup<?php echo $row['Id_prepair']; ?>'  >
</li>

<!-- POPUP -->
<div class="modal fade" id='popup<?php echo $row['Id_prepair']; ?>' tabindex="-1" role="dialog" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Label"><?php echo $row['Nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $row['Descrizione']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
