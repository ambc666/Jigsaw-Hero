var changeTheme = ['img/themes/backgroundMain.jpg', 'img/themes/themeBlue.jpg', 'img/themes/themeBlue.jpg', 'img/themes/themeCyan.jpg', 'img/themes/themeGreen.jpg', 'img/themes/themeGreenBlue.jpg', 'img/themes/themePurple.jpg', 'img/themes/themePurpleBlue.jpg', 'img/themes/themeRed.jpg', 'img/themes/themeYellow.jpg']; 
//Array of different theme options.

var selectTheme = changeTheme[Math.floor(Math.random() * changeTheme.length)];
//Changing the variable name and randomizing it.

$('body').css('background-image', 'url(' + selectTheme + ')');
//Calling above variable and targetting the body and changing the theme per click at random.

/* Array is add all my theme images and randomise them per refresh/page change */