import $ from 'jquery';

function wpmlSwitcherMobile() {

    // Define the width of screen
    
    let width = $(window).width(); 

    // From long to short label
    
    function labelChange() {

        $('.wpml-ls').each(function(){
            $(this).find('.wpml-ls-native').each(function(){
                let languageName = $(this).text();
                if (languageName === 'English') {
                    $(this).text('Eng');
                } if (languageName == 'Italiano') {
                    $(this).text('It');
                }
            });
        });

    }

    // From short to long label

    function labelChangeRevert() {

        $('.wpml-ls').each(function(){
            $(this).find('.wpml-ls-native').each(function(){
                let languageName = $(this).text();
                console.log(languageName);
                if (languageName === 'Eng') {
                    $(this).text('English');
                } if (languageName == 'It') {
                    $(this).text('Italiano');
                }
            });
        });

    }

    // if window less than 991 - show smaller version

    $(document).ready(function(){

        if (width < 991) {
            labelChange();
        }

    });

    // on resize

    $(window).resize(function() {
        let width = $(window).width(); 
        if (width < 991) {
            labelChange();
        } else {
            labelChangeRevert();
        }

    });
   
    
}

export {wpmlSwitcherMobile};