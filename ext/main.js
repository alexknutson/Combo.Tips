//Dropzone.autoDiscover = false;
//(function($) {


////var dz_screenshot = new Dropzone("#screenshot-upload");
////dz_screenshot.on("addedfile", function(file) {

  ////console.log('file added');

////});
////$("#screenshot-upload").dropzone({url: "/upload.php"});
////$("#screenshot-upload").on("fileadded", function(file) {
////    console.log(file);
////});
//})(jQuery);
//
//

(function($) {

  // Handle the file uploaded by Dropzone
  Dropzone.autoDiscover = false;
  var dz_screenshot = new Dropzone("#screenshot-upload");
  dz_screenshot.on("complete", function(file) {
    $.ajax({
    url: '/images/uploads/' + file.name,
    // Double check to make sure the file is there before we attach the src to the canvas image
    success: function(){
      $('.uploaded-image').attr("src", "/images/uploads/" + file.name);
    },
    
    });

  });

  console.log('main loaded');
  $('.uploaded-image').on("click", function(){
    console.log('clicked image');
  $(document).initImageAnalysis();
    
  });
  
  $.fn.initImageAnalysis = function() {

          var orbs_found = [];
    //Create a stage by getting a reference to the canvas
    stage = new createjs.Stage("drawCanvas");
    var uploaded_image_url = $('.uploaded-image').attr('src');
    var data = {
      images:[uploaded_image_url],
      frames: {width: 177, height: 177},
    };
    var spriteSheet = new createjs.SpriteSheet(data);
    var sprite = new createjs.Sprite(spriteSheet);
    console.log(spriteSheet);
    if (!sprite.complete)
    var number_of_frames = spriteSheet._numFrames;
    console.log(number_of_frames + ' get number frames');
    var frameIndex = spriteSheet._numFrames;
    console.log(frameIndex);
    for (numx=0; numx < frameIndex; numx++) {
      if (numx > 29) {  
        var imgEl = createjs.SpriteSheetUtils.extractFrame(spriteSheet, numx);
        var imageColor = $(document).getAverageRGB(imgEl);
        var red_value = imageColor.r;
        var green_value = imageColor.g;
        var blue_value = imageColor.b;
        var orb = {"red": red_value, "green": green_value, "blue": blue_value};
        console.log('--');
        // LIGHT ORBS
        if (orb.red < 175 && orb.red > 135 && orb.green > 130 && orb.green < 175) {
          orbs_found.push("e3");
        }
        // HEART ORBS
        if (orb.red < 185 && orb.red > 160 && orb.green > 80 && orb.green < 110 && orb.blue < 145 && orb.blue > 110) {
          orbs_found.push("e5");	
        }
        // DARK ORBS
        if (orb.red < 160 && orb.red > 105 && orb.green < 110 && orb.green > 60 && orb.blue < 155 && orb.blue > 110) {
          orbs_found.push("e4");
        }
        // WOOD ORBS
        if (orb.red < 120 && orb.red > 70 && orb.green < 170 && orb.green > 125 && orb.blue < 130 && orb.blue > 75) {
          orbs_found.push("e2");
        }
        // FIRE ORBS
        if (orb.red < 210 && orb.red > 150 && orb.green < 125 && orb.green > 75 && orb.blue < 120 && orb.blue > 50) {
          orbs_found.push("e0");
        }
        // WATER ORBS
        if (orb.red < 135 && orb.red > 75 && orb.green < 155 && orb.green > 105 && orb.blue < 195 && orb.blue > 135) {
          orbs_found.push("e1");
        }
        console.log(orb.red);
        console.log(orb.green);
        console.log(orb.blue);
        console.log('--');
        //orbs_found.push(orb);

      }
    }
    $('#grid > div').each(function(index) {
      console.log(orbs_found[index]);
      if (orbs_found.length > 0) {
        var grid_class = $(this).attr('class');
        var current_icon_class = $(this).attr('class').split(' ').slice(-1);
        var swap_class = grid_class.replace(current_icon_class, orbs_found[index]);
        console.log(swap_class);
        $(this).removeClass().addClass(swap_class);
        //console.log(current_icon_class);
        //$(this).removeClass(current_icon_class);
        //$(this).removeClass(current_icon_class).addClass(orbs_found[index]);
      }	else {
        $(this).addClass('eX');
      }
      // ALEX - We will import the orbs within this each function
    });
    //console.log(orbs_found);
    sprite.gotoAndStop(3);
    var img = createjs.SpriteSheetUtils.extractFrame(spriteSheet, 59);
    //console.log(img);
    document.getElementById("status").appendChild(img);
    //var imageColor = getAverageRGB(img);
    //var red_value = imageColor.r;
    //var green_value = imageColor.g;
    //var blue_value = imageColor.b;

    //document.body.style.backgroundColor="rgb(" + red_value + "," + green_value + "," + blue_value +")";
    //stage.update();
    return orbs_found;
  }
  // GET IMAGE COLOR
  $.fn.getAverageRGB = function(imgEl) {

    var blockSize = 5, // only visit every 5 pixels
        defaultRGB = {r:0,g:0,b:0}, // for non-supporting envs
        canvas = document.createElement('canvas'),
        context = canvas.getContext && canvas.getContext('2d'),
        data, width, height,
        i = -4,
        length,
        rgb = {r:0,g:0,b:0},
        count = 0;

    if (!context) {
      return defaultRGB;
    }

    height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
    width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;

    context.drawImage(imgEl, 0, 0);

    try {
      data = context.getImageData(0, 0, width, height);
    } catch(e) {
      /* security error, img on diff domain */alert('x');
      return defaultRGB;
    }

    length = data.data.length;

    while ( (i += blockSize * 4) < length ) {
      ++count;
      rgb.r += data.data[i];
      rgb.g += data.data[i+1];
      rgb.b += data.data[i+2];
    }

    // ~~ used to floor values
    rgb.r = ~~(rgb.r/count);
    rgb.g = ~~(rgb.g/count);
    rgb.b = ~~(rgb.b/count);

    return rgb;

  }


})(jQuery);
