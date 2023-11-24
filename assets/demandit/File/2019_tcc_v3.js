//swiper
/*var swiper = new Swiper('.recommend-swiper', {
  slidesPerView: 4,
  spaceBetween: 10,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

var swiper2 = new Swiper('.swiperItem1', {
  slidesPerView: 3,
  spaceBetween: 10,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});*/

//gallery, choose the topic
selectGallery = function(){
  var selectedClass = "";
  $(".gallerybtn").click(function() {
    selectedClass = $(this).attr("data-rel");
    $("#gallery").fadeTo(100, 0.1);
    $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
    setTimeout(function() {
      $("." + selectedClass).fadeIn().addClass('animation');
      $("#gallery").fadeTo(300, 1);
    }, 300);
  });
}

//sidenavigation
$('.closeClick').hide();

$('.openClick').click(function() {
  openNav();
  $('.openClick').hide();
  $('.closeClick').show();
});

$('.closeClick').click(function() {
  closeNav();
  $('.closeClick').hide();
  $('.openClick').show();
})

openNav = function() {
  $('#mySidenav').css('width', '250px');
  $('.fw-nav-level3').hide();
  $('.fw-nav-selected').next('.fw-nav-level3').show();
}

closeNav = function() {
  $('#mySidenav').css('width', '0px');
  $('.fw-nav-level3').hide();
}

//click open undermenu
$("#mySidenav > ul > li > a").click(function(event) {
  if ($(this).next().is("ul")) {
    event.preventDefault();
    $('.fw-nav-level3').hide();
    $(this).next('.fw-nav-level3').toggle();
  } else {
    $(this).next().hide();
  }
});

setMagnificPopup = function(classname, urlSrc){
$(classname).magnificPopup({
  type: 'iframe',
  iframe: {
    patterns: {
      youtube: {

        index: 'youtube.com',

        id: function(url) {
          var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
          if (!m || !m[1]) return null;
          return m[1];
        },
        src: urlSrc
      }
    }
  }
});
}

setMagnificPopup('.video1', '//www.youtube.com/embed/v3v-HBYjiEU?autoplay=1');
setMagnificPopup('.video2', '//www.youtube.com/embed/-eZ2HciY2Ko?autoplay=1');
setMagnificPopup('.video3', '//www.youtube.com/embed/ZnI9NGaEcG8?autoplay=1');
setMagnificPopup('.video4', '//www.youtube.com/embed/Vfs2bHFYvhE?autoplay=1');


function initCheckDateForm() {
  $('#fg_formfield_id_70607').click(function() {
    if ($(this).attr('rel') == 'disabled') {
      return;
    }
    var $from = $('#fg_formfield_id_70604').val();
    var $until = $('#fg_formfield_id_70605').val();
    var $room = $('#fg_formfield_id_70606').val();
    sendData($from, $until, $room);
    return false;
  });

  function sendData(from, until, room) {
    var fromDatum = from;
    var untilDatum = until;
    var roomDef = room;
    $.ajax({
      type: 'POST',
      url: 'http://tcc.netlive.ch/index.cfm?page=137062', 
      data: {
        fromDatum: fromDatum,
        untilDatum: untilDatum,
        roomDef: roomDef
      },
      success: function(response) {
        $(".res-error").html("");
        $(".res-success").html("");
        if (response.error) {
          $(".res-error").html("<div class='alert alert-danger'>" + response.error + "</div>");
          return;
        }
        $(".res-success").html("<div class='alert alert-success'>" + response.data + "</div>");
      }
    });
  }
}

// #fg_formfield_id_70600, #fg_formfield_id_70601, #fg_formfield_id_70710, #fg_formfield_id_70711

function initDatePicker(){
/*   $( "#fg_formfield_id_74913, #fg_formfield_id_74914").datepicker({
    dateFormat: "yy-mm-dd",
    altFormat: "yy-mm-dd",
    minDate: new Date()
  }).attr("readonly", true); */

  $( "#fg_formfield_id_70600, #fg_formfield_id_70601, #fg_formfield_id_70710, #fg_formfield_id_70711, #fg_formfield_id_74913, #fg_formfield_id_74914").attr("readonly", true);
}


$(document).ready(function() {
  initCheckDateForm();
  initDatePicker();
  closeNav();
  selectGallery();
});
