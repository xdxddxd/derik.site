<script src="<?php echo URL_BASE ?>/assets/themes/js/Menu.js"></script>
<div class="menu-bar" id="menu-bar">
    <div id="search-button">
        <i class="fas fa-align-left" onclick="$('#menu-display').click();"></i>
        <input type="checkbox" onchange="MenuDisplay(this)" id="menu-display" class="d-none">
    </div>
    <div id="opened-apps">

    </div>
    <div id="extensions">
        <div id="time-now">
            <div id="now"></div>
            <div id="today"></div>
        </div>
        <i id="volume-up" class="fas fa-volume-up" onclick="$('#volume-display').click()"></i>
        <i id="volume-down" class="fas fa-volume-down" onclick="$('#volume-display').click()" style="display:none;"></i>
        <i id="volume-mute" class="fas fa-volume-mute" onclick="$('#volume-display').click()" style="display:none;"></i>
        <i class="fas fa-bell"></i>
        <input type="checkbox" onchange="volumeDisplay(this)" id="volume-display" class="d-none">
    </div>
</div>

<div id="volume-control" style="display: none;">
    <input type="range" min="0" max="100" value="100" class="slider" id="volume-value" onchange="volumeControl($(this).val());">
</div>

<div id="MenuDisplay" style="display: none;" onclick="$('#menu-display').click();">
    <div id="MenuDisplay-content">
        <a class="MenuDisplay-title">
            <h1>Menu</h1>
        </a>
        <div class="MenuDisplay-items">
            <a class="MenuDisplay-item">
                <i class="fas fa-user"></i>
                <span>Usuário</span>
            </a>
            <a class="MenuDisplay-item">
                <i class="fas fa-cog"></i>
                <span>Configurações</span>
            </a>
            <a class="MenuDisplay-item" onclick="logout();">
                <i class="fas fa-sign-out-alt"></i>
                <span>Sair</span>
            </a>
        </div>
    </div>
</div>