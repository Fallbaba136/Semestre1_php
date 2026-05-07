<?php
namespace gdb;

class GameRenderer
{
    public function getHTML(){?>

    <div class="game">
        <b><?= $this->name ?></b>
        <div><?= $this->description ?></div>
    </div>
    <?php }
}