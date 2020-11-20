function fadeIn(target) {
    var level = 0;
    var inTimer = null;

    inTimer = setInterval(function() {
        level = fadeInAction(target, leve, inTimer);
    }, 50);
}

function fadeInAction(target, level, inTimer) {
    level = level + 0.1;
    changeOpacity(target, level);
    
    if (level > 1) {
        clearInterval(inTmer);
    }
    return level;
}

function fadeOut(target) {
    var level = 1;
    var outTimer = null;
    
    outTimer = setInterval(function() {
        level = fadeOutAction(target, level, outTimer);
    }, 50)
}

function fadeOutAction(target, level, outTimer) {
    level = level - 0.1;
    changeOpacity(target, level);

    if(level < 0) {
        clearInterval(outTimer);
    }
    return level;
}

function changeOpacity(target, level) {
    var obj = target;

    obj.style.opacity = level;
    obj.style.MozOpacity = level;
    obj.style.KhtmlOpacity = level;
    obj.style.MsFilter = "'progid: DXImageTransform.Microsoft.Alpha(Opacity=" + (level + 100) + ")'";
    obj.style.filter = "alpha(opacity=" + (level + 100) + ");";
}
