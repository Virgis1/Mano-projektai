/* animacija */
window.sr = ScrollReveal();
        sr.reveal('.navbar', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('.pavadinimas', {
          duration: 2000,
          origin:'top',
          distance:'0px'
        });
         sr.reveal('.showcase-left', {
          duration: 2000,
          origin:'left',
          distance:'0px'
        });
        sr.reveal('.showcase-top', {
          duration: 2000,
          delay: 1000,
          origin:'top',
          distance:'0px'
        });
        sr.reveal('.showcase-right', {
          duration: 2000,
          delay: 2000,
          origin:'right',
          distance:'0px'
        });
        sr.reveal('.showcase-paslaugos-right', {
          duration: 2000,
          origin:'right',
          distance:'0px'
        });

/* sweet alert (kontaktinė forma) */
$(function(){
    $('#submit').click(function(){
            var name = $('#vardas').val();  
            var email = $('#email').val(); 
            var message = $('#message').val(); 
            if(name == '' || email == '' || message =='')  
            {  
                $('#error_message').html("All Fields are required");  
            }  
            else  
            {  
                Swal.fire({
                title: 'Ačiū, Jūsų žinutė gauta!',
                text: 'Pasistengsime kuo greičiau su Jumis susisiekti.',
                type: 'success',
                confirmButtonText: 'grįžti atgal'
                          })
            } 
    });      
});

/* sweet alert (užklausos forma) */
$(function(){
    $('#register_modal').click(function(){
        Swal.fire({
        title: 'Ačiū, Jūsų užsakymas gautas!',
        text: 'Pasistengsime kuo greičiau su Jumis susisiekti.',
        type: 'success',
        confirmButtonText: 'grįžti atgal'
        })
    });      
});

let navbar = $(".navbar");

$(window).scroll(function () {
  // get the complete hight of window
  let oTop = $(".projektai").offset().top - window.innerHeight;
  if ($(window).scrollTop() > oTop) {
    navbar.addClass("sticky");
  } else {
    navbar.removeClass("sticky");
  }
});