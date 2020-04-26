<div class="window paint">
    <div class="title-bar">
        <div class="title-bar-text">
            Paint
        </div>
        <div class="title-bar-controls">
            <button class="close-paint" aria-label="Minimize"></button>
            <button aria-label="Maximize"></button>
            <button class="close-paint" aria-label="Close"></button>
        </div>
    </div>
    <div class="window-body">
        <div class="paint-container">
            <canvas id="paint" width="300" height="300">
            </canvas>
            <div class="paint-commands">
                <button class="couleur red">ROUGE</button>
                <button class="couleur blue">BLEU</button>
                <button class="couleur green">VERT</button>
                <button class="couleur yellow">JAUNE</button>
                <button class="couleur random">RANDOM</button>
                <hr>
                <button class="erase">EFFACER</button>
                <hr>
                <label for="grosseur">GROSSEUR: <span class="linewidth"></span></label>
                <input type="range" id="grosseur" name="grosseur"
                       min="1" max="18" step="1">
            </div>
        </div>
    </div>

</div>
