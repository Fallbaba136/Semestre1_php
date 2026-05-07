<?php
class GameRenderer
{
    private $game;

    public function __construct($game) {
        $this->game = $game;
    }

    public function getHTML() { ?>
        <div class="card">
            <div class="card-left">
                <h2><?= $this->game->name ?></h2>
                <img src="img/<?= $this->game->image ?>" alt="<?= $this->game->name ?>">
            </div>
            <div class="card-info">
                <p><?= $this->game->description ?></p>
            </div>
        </div>
    <?php }
}
 