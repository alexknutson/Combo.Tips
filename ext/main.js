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

  //console.log('main loaded');
  $('.uploaded-image').on("click", function(){
    //console.log('clicked image');
  $(document).initImageAnalysis();
    ga('send', 'event', 'button', 'click', 'Combo Requested', 1);
  });
  
  $.fn.initImageAnalysis = function() {
    // Setup orb array
    var orbs_found = [];
    
    //Create a stage by getting a reference to the canvas
    stage = new createjs.Stage("drawCanvas");
    var image_object = $('.uploaded-image');
    
    // Percentages (NOT USED)
    var game_header_height = 55.72;
    var game_header_width = 100;
    var orb_grid_height = 44.28;
    var orb_grid_width = 100;

    var image_height = $(image_object).height();
    var image_width = $(image_object).width();
    
    // if we want to break the algorithm... use these
    //var orb_frame_width = (image_width * .166);
    //var orb_frame_height = (image_height * .0916);
    
    // Mobile phones have a wide variety of screenshot resolutions.
    // So to make sure our analysis works on all of those image sizes, we
    // set the frame size using dynamic width/height values.
    var orb_frame_width = (image_width * .166);
    var orb_frame_height = (image_height * .0905555);
    
    var uploaded_image_url = $('.uploaded-image').attr('src');
    var data = {
      images:[uploaded_image_url],
      frames: {width: orb_frame_width, height: orb_frame_height},
    };
    var spriteSheet = new createjs.SpriteSheet(data);
    var sprite = new createjs.Sprite(spriteSheet);
    //console.log(spriteSheet);
    var number_of_frames = spriteSheet._numFrames;
    //console.log(number_of_frames + ' get number frames');
    var frameIndex = spriteSheet._numFrames;
    //console.log(frameIndex);
    // 20 works best...
    var tolerance_level = 20;

    // Used to add the tolerance for an RGB value
    var color_top_range = function(color) {
        var cTopRange = (color + tolerance_level);
        
        return cTopRange;

    }
    // Used to subtract the tolerance for an RGB value
    var color_bottom_range = function(color) {
      var cBottomRange = (color - tolerance_level);
      return cBottomRange;
    }
    // Sets up defaults. These may need to be adjusted if we start seeing a lot of errors
    var fire_rgb_default = [179, 98, 84];
    var water_rgb_default = [106, 132, 165];
    var wood_rgb_default = [94, 152, 111];
    var light_rgb_default = [169, 154, 97];
    var dark_rgb_default = [145, 91, 140];
    var heart_rgb_default = [173, 86, 124];




    // Super dirty, but it works...
    for (numx=0; numx < frameIndex; numx++) {
      if (numx > 29) {  

        var isLikeFire = false;
        var isLikeWater = false;
        var isLikeWood = false;
        var isLikeLight = false;
        var isLikeDark = false;
        var isLikeHeart = false;

        var imgEl = createjs.SpriteSheetUtils.extractFrame(spriteSheet, numx);
        var imageColor = $(document).getAverageRGB(imgEl);
        var red_value = imageColor.r;
        var green_value = imageColor.g;
        var blue_value = imageColor.b;
        var orb = {"red": red_value, "green": green_value, "blue": blue_value};
        if (orb) {
          //console.log('#### Setting up color ranges ####');
          //console.log(orb);

          if (color_top_range(orb.red) > fire_rgb_default[0] && fire_rgb_default[0] > color_bottom_range(orb.red)) {
            if (color_top_range(orb.green) > fire_rgb_default[1] && fire_rgb_default[1] > color_bottom_range(orb.green)) {
              if (color_top_range(orb.blue) > fire_rgb_default[2] && fire_rgb_default[2] > color_bottom_range(orb.blue)) {
                isLikeFire = true;
              }
            }
          }
          if (color_top_range(orb.red) > water_rgb_default[0] && water_rgb_default[0] > color_bottom_range(orb.red)) {
            if (color_top_range(orb.green) > water_rgb_default[1] && water_rgb_default[1] > color_bottom_range(orb.green)) {
              if (color_top_range(orb.blue) > water_rgb_default[2] && water_rgb_default[2] > color_bottom_range(orb.blue)) {
                isLikeWater = true;
              }
            }
          }
          if (color_top_range(orb.red) > wood_rgb_default[0] && wood_rgb_default[0] > color_bottom_range(orb.red)) {
            if (color_top_range(orb.green) > wood_rgb_default[1] && wood_rgb_default[1] > color_bottom_range(orb.green)) {
              if (color_top_range(orb.blue) > wood_rgb_default[2] && wood_rgb_default[2] > color_bottom_range(orb.blue)) {
                isLikeWood = true;
              }
            }
          }
          if (color_top_range(orb.red) > light_rgb_default[0] && light_rgb_default[0] > color_bottom_range(orb.red)) {
            if (color_top_range(orb.green) > light_rgb_default[1] && light_rgb_default[1] > color_bottom_range(orb.green)) {
              if (color_top_range(orb.blue) > light_rgb_default[2] && light_rgb_default[2] > color_bottom_range(orb.blue)) {
                isLikeLight = true;
              }
            }
          }
          if (color_top_range(orb.red) > dark_rgb_default[0] && dark_rgb_default[0] > color_bottom_range(orb.red)) {
            if (color_top_range(orb.green) > dark_rgb_default[1] && dark_rgb_default[1] > color_bottom_range(orb.green)) {
              if (color_top_range(orb.blue) > dark_rgb_default[2] && dark_rgb_default[2] > color_bottom_range(orb.blue)) {
                isLikeDark = true;
              }
            }
          }
          if (color_top_range(orb.red) > heart_rgb_default[0] && heart_rgb_default[0] > color_bottom_range(orb.red)) {
            if (color_top_range(orb.green) > heart_rgb_default[1] && heart_rgb_default[1] > color_bottom_range(orb.green)) {
              if (color_top_range(orb.blue) > heart_rgb_default[2] && heart_rgb_default[2] > color_bottom_range(orb.blue)) {
                isLikeHeart = true;
              }
            }
          }





        }

        // NEW WAY
        if (isLikeFire) {
          orbs_found.push("e0");
          //console.log('its fire');
        }
        if (isLikeWater) {
          orbs_found.push("e1");
          //console.log('its water');
        }
        if (isLikeWood) {
          orbs_found.push("e2");
          //console.log('its wood');
        }
        if (isLikeLight) {
          orbs_found.push("e3");
          //console.log('its light');
        }
        if (isLikeDark) {
          orbs_found.push("e4");
          //console.log('its dark');
        }
        if (isLikeHeart) {
          orbs_found.push("e5");
          //console.log('its heart');
        }
        


        /** OLD WAY
        console.log('--');
        // LIGHT ORBS
        if (orb.red < 175 && orb.red > 135 && orb.green > 120 && orb.green < 175) {
          orbs_found.push("e3");
          console.log('light');
        }
        // HEART ORBS
        if (orb.red < 185 && orb.red > 150 && orb.green > 70 && orb.green < 110 && orb.blue < 145 && orb.blue > 100) {
          orbs_found.push("e5");
          console.log('heart');
        }
        // DARK ORBS
        if (orb.red < 160 && orb.red > 105 && orb.green < 110 && orb.green > 60 && orb.blue < 155 && orb.blue > 110) {
          orbs_found.push("e4");
          console.log('dark');
        }
        // WOOD ORBS
        if (orb.red < 120 && orb.red > 65 && orb.green < 170 && orb.green > 125 && orb.blue < 130 && orb.blue > 75) {
          orbs_found.push("e2");
          console.log('wood');
        }
        // FIRE ORBS
        if (orb.red < 210 && orb.red > 150 && orb.green < 125 && orb.green > 75 && orb.blue < 120 && orb.blue > 50) {
          orbs_found.push("e0");
          console.log('fire');
        }
        // WATER ORBS
        if (orb.red < 135 && orb.red > 75 && orb.green < 155 && orb.green > 105 && orb.blue < 195 && orb.blue > 135) {
          orbs_found.push("e1");
          console.log('water');
        }
        console.log(orb.red);
        console.log(orb.green);
        console.log(orb.blue);
        console.log('--');
        //orbs_found.push(orb);
        **/

      }
    }
    $('#grid > div').each(function(index) {
      //console.log(orbs_found[index]);
      if (orbs_found.length > 0) {
        var grid_class = $(this).attr('class');
        var current_icon_class = $(this).attr('class').split(' ').slice(-1);
        var swap_class = grid_class.replace(current_icon_class, orbs_found[index]);
        $(this).removeClass().addClass(swap_class);
        // SET ERROR FOR ORB ISSUE
        if (orbs_found[index] === undefined) {
           $(this).addClass('eX');
           var message = '<div class="bs-example"><div class="alert alert-danger alert-error"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Error!</strong> It looks like there was a problem with one or more of the orbs. You may want to double check the board.</div></div>';
           $("#screenshot-upload").append(message);
        }
        //console.log(current_icon_class);
        //$(this).removeClass(current_icon_class);
        //$(this).removeClass(current_icon_class).addClass(orbs_found[index]);
      }	else {
        $(this).addClass('eX');
      }
      // ALEX - We will import the orbs within this each function
    });
    //console.log(orbs_found);
    //sprite.gotoAndStop(3);
    //var img = createjs.SpriteSheetUtils.extractFrame(spriteSheet, 54);
    //console.log(img);
    //document.getElementById("status").appendChild(img);
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

  //helpers
  

})(jQuery);
